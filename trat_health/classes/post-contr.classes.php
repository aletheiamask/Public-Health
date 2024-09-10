<?php
class Post {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function uploadPost($data, $files) {
        $imageData = $this->handleMainImage($files['file_img']);
        $subImagesJson = $this->handleSubImages($files['file_img_text']);

        $stmt = $this->conn->prepare("INSERT INTO posts_forum (signatures, main_topic, Publishing_time, category, details, file_img, img_text , main_category) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $this->conn->error);
        }

        $stmt->bind_param(
            "ssssssss",
            $data['signature'],
            $data['main_topic'],
            $data['Publishing_time'],
            $data['category'],
            $data['details'],
            $imageData,
            $subImagesJson,
            $data['main_category']
        );

        if ($stmt->execute()) {
            header("Location: /เว็บสาธารณสุข/a_announce.php?error=none");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    private function handleMainImage($file) {
        if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
            $imageTmpName = $file['tmp_name'];
            return file_get_contents($imageTmpName);
        }
        return null;
    }

    private function handleSubImages($file) {
        $subImages = [];
        if (isset($file) && !empty($file['name'][0])) {
            foreach ($file['tmp_name'] as $index => $tmpName) {
                if ($file['error'][$index] === UPLOAD_ERR_OK) {
                    $subImageData = file_get_contents($tmpName);
                    $subImages[] = base64_encode($subImageData);
                }
            }
            return json_encode($subImages);
        }
        return null;
    }
}
?>
