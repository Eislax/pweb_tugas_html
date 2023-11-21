<?php
    include "validation.php";
    include "crud.php";
    include "util.php";

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

    $pass_photo_name = "photo/" . $nik . "-photo." . get_extension($pass_photo);
    $ktp_name = "ktp/" . $nik . "-ktp." . get_extension($ktp);
    $diploma_name = "diploma/" . $nik . "-diploma." . get_extension($diploma);
    $transcript_name = "transcript/" . $nik . "-transcript." . get_extension($transcript);

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
        "pass_photo" => $pass_photo_name,
        "ktp" => $ktp_name,
        "diploma" => $diploma_name,
        "transcript" => $transcript_name,
        "region" => $region,
        "study_program" => $study_program,
    );

    insert_data($data);
    move_file($pass_photo, $pass_photo_name);
    move_file($ktp, $ktp_name);
    move_file($diploma, $diploma_name);
    move_file($transcript, $transcript_name);
?>
