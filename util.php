<?php
    function get_extension($file) {
        return explode("/", $file["type"])[1];
    }

    function move_file($file, $file_name) {
        $targetFile = "uploads/" . $file_name;
        move_uploaded_file($file["tmp_name"], $targetFile);
    }
?>
