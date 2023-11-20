<?php
    include "db.php";

    function insert_data($data) {
        global $connection;
        $query = "INSERT INTO data (fullname, nik, nisn, email, phone, place_of_birth, date_of_birth, gender, religion, address, postal_code, high_school, pass_photo, ktp, diploma, transcript, region, study_program) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param(
            "ssssssssssssssssss",
            $data["fullname"],
            $data["nik"],
            $data["nisn"],
            $data["email"],
            $data["phone"],
            $data["place_of_birth"],
            $data["date_of_birth"],
            $data["gender"],
            $data["religion"],
            $data["address"],
            $data["postal_code"],
            $data["high_school"],
            $data["pass_photo"],
            $data["ktp"],
            $data["diploma"],
            $data["transcript"],
            $data["region"],
            $data["study_program"],
        );

        if ($stmt->execute()) {
            echo "Date inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    function select_all_data() {
        global $connection;

        $sql = "SELECT * FROM data";
        $result = $connection->query($sql);

        return $result;
    }
?>
