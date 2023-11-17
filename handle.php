<?php
    include "crud.php";

    $fullname = $_POST["fullname"];
    $nik = $_POST["nik"];
    $nisn = $_POST["nisn"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $place_of_birth = $_POST["place_of_birth"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $religion = $_POST["religion"];
    $address = $_POST["address"];
    $postal_code = $_POST["postal_code"];
    $high_school = $_POST["high_school"];
    $pass_photo = $_FILES["pass_photo"];
    $ktp = $_FILES["ktp"];
    $diploma = $_FILES["diploma"];
    $transcript = $_FILES["transcript"];
    $region = $_POST["region"];
    $study_program = $_POST["study_program"];

    $data = array(
        "fullname" => $fullname,
        "nik" => $nik,
        "nisn" => $nisn,
        "email" => $email,
        "phone" => $phone,
        "place_of_birth" => $place_of_birth,
        "date_of_birth" => $date_of_birth,
        "gender" => $gender,
        "religion" => $religion,
        "address" => $address,
        "postal_code" => $postal_code,
        "high_school" => $high_school,
        "pass_photo" => $pass_photo["name"],
        "ktp" => $ktp["name"],
        "diploma" => $diploma["name"],
        "transcript" => $transcript["name"],
        "region" => $region,
        "study_program" => $study_program,
    );

    insert_data($data);
?>
