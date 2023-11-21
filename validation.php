<?php
$fullNameErr = $nikErr = $nisnErr = $emailErr = $phoneErr = $place_of_birthErr = $date_of_birthErr = $genderErr = $religionErr = $addressErr = $postal_codeErr = $high_schoolErr = $pass_photoErr = $ktpErr = $diplomaErr = $transcriptErr = $regionErr = $study_programErr = "";
$fullName = $nik = $nisn = $email = $phone = $place_of_birth = $date_of_birth = $gender = $religion = $address = $postal_code = $high_school = $pass_photo = $ktp = $diploma = $transcript = $region = $study_program = "";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function validate_date($date) {
  $d = DateTime::createFromFormat('Y-m-d', $date);
  return $d && $d->format('Y-m-d') === $date;
}

function validateFile($file, $allowedExtensions, $maxFileSize) {
  if (empty($file["name"])) {
      return "File diperlukan";
  } else {
      $fileExtension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

      // Validasi ekstensi file
      if (!in_array($fileExtension, $allowedExtensions)) {
          return "Format file tidak valid (hanya " . implode(", ", $allowedExtensions) . ")";
      }

      // Validasi ukuran file
      if ($file["size"] > $maxFileSize) {
          return "Ukuran file melebihi batas maksimal (" . ($maxFileSize / (1024 * 1024)) . " MB)";
      }
  }

  // Jika lolos semua validasi
  return "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fullname"])) {
    $fullNameErr = "Name is required";
  } else {
    $fullName = test_input($_POST["fullname"]);
    if (!preg_match("/^[a-zA-Z' ]*$/", $fullName)) {
      $fullNameErr = "Hanya huruf dan spasi yang diizinkan";
    } 
  }

  if (empty($_POST["nik"])) {
    $nikErr = "NIK diperlukan";
  } else {
    $nik = test_input($_POST["nik"]);
    if (!preg_match("/^[0-9]*$/", $nik)) {
      $nikErr = "Hanya angka yang diizinkan";
    }
  }

  if (empty($_POST["nisn"])) {
    $nisnErr = "NISN diperlukan";
  } else {
    $nisn = test_input($_POST["nisn"]);
    if (!preg_match("/^[0-9]*$/", $nisn)) {
      $nisnErr = "Hanya angka yang diizinkan";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email diperlukan";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format email tidak valid";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Nomor handphone diperlukan";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^[0-9]*$/", $phone)) {
      $phoneErr = "Hanya angka yang diizinkan";
    }
  }

  if (empty($_POST["place_of_birth"])) {
    $place_of_birthErr = "Tempat lahir diperlukan";
  } else {
    $place_of_birth = test_input($_POST["place_of_birth"]);
    if (!preg_match("/^[a-zA-Z' ]*$/", $place_of_birth)) {
      $place_of_birthErr = "Hanya huruf dan spasi yang diizinkan";
    }
  }
  
  if (empty($_POST["date_of_birth"])) {
    $date_of_birthErr = "Tanggal lahir diperlukan";
  } else {
    $date_of_birth = test_input($_POST["date_of_birth"]);
    if (!validate_date($date_of_birth)) {
    $date_of_birthErr = "Format tanggal tidak valid";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Jenis kelamin diperlukan";
  } else {
    $gender = test_input($_POST["gender"]);
    if ($gender !== "laki - laki" && $gender !== "perempuan") {
      $genderErr = "Pilih jenis kelamin yang valid";
    }  
  }

  if (empty($_POST["religion"])) {
    $religionErr = "Agama diperlukan";
  } else {
      $religion = test_input($_POST["religion"]);
      // Daftar opsi agama yang valid
      $validReligions = ["Buddha", "Hindu", "Islam", "Katolik", "Khonghucu", "Kristen"];
      
      // Periksa apakah agama yang dipilih termasuk dalam daftar opsi valid
      if (!in_array($religion, $validReligions)) {
          $religionErr = "Pilih agama yang valid";
      }
  }

  if (empty($_POST["address"])) {
    $addressErr = "Alamat rumah diperlukan";
  } else {
      $address = test_input($_POST["address"]);
      // Validasi panjang maksimal 500 karakter
      if (strlen($address) > 500) {
          $addressErr = "Alamat rumah maksimal 500 karakter";
      }
  }

  if (empty($_POST["postal_code"])) {
    $postal_codeErr = "Kode Pos diperlukan";
  } else {
      $postal_code = test_input($_POST["postal_code"]);
      // Validasi hanya angka yang diizinkan
      if (!preg_match("/^[0-9]*$/", $postal_code)) {
          $postal_codeErr = "Hanya angka yang diizinkan";
      } elseif (strlen($postal_code) !== 5) {
          // Validasi panjang kode pos harus 5 digit
          $postal_codeErr = "Kode Pos harus terdiri dari 5 digit";
      }
  }

  if (empty($_POST["high_school"])) {
    $high_schoolErr = "Asal Sekolah diperlukan";
  } else {
      $high_school = test_input($_POST["high_school"]);
      // Validasi hanya huruf, spasi, dan tanda hubung yang diizinkan
      if (!preg_match("/^[a-zA-Z' -]*$/", $high_school)) {
          $high_schoolErr = "Hanya huruf, spasi, dan tanda hubung yang diizinkan";
      }
  }

  // Penggunaan fungsi validasi untuk pas foto
  $pass_photoErr = validateFile($_FILES["pass_photo"], ["png", "jpg", "jpeg"], 5 * 1024 * 1024);

  // Penggunaan fungsi validasi untuk KTP
  $ktpErr = validateFile($_FILES["ktp"], ["pdf"], 5 * 1024 * 1024);

  // Penggunaan fungsi validasi untuk diploma
  $diplomaErr = validateFile($_FILES["diploma"], ["pdf"], 5 * 1024 * 1024);

  // Penggunaan fungsi validasi untuk transcript
  $transcriptErr = validateFile($_FILES["transcript"], ["pdf"], 5 * 1024 * 1024);

  if (empty($_POST["region"])) {
    $regionErr = "Wilayah Kampus diperlukan";
  } else {
      $region = test_input($_POST["region"]);
      // Tambahkan validasi sesuai kebutuhan
      $allowedRegions = ["depok", "alam sutera", "karawaci", "kalimalang"];
      if (!in_array($region, $allowedRegions)) {
          $regionErr = "Wilayah Kampus tidak valid";
      }
  }

  if (empty($_POST["study_program"])) {
    $study_programErr = "Program Studi diperlukan";
  } else {
      $study_program = test_input($_POST["study_program"]);
      // Tambahkan validasi sesuai kebutuhan
      $allowedStudyPrograms = [
          "sistem komputer s1", "sistem informasi s1", "teknik komputer d3", "manajemen informatika d3",
          "informatika s1", "teknik elektro s1", "teknik mesin s1", "teknik industri s1", "agroteknologi s1",
          "akuntansi s1", "manajemen s1", "ekonomi syariah s1", "akuntansi d3", "manajemen d3",
          "arsitektur s1", "desain interior s1", "teknik sipil s1"
      ];
      if (!in_array($study_program, $allowedStudyPrograms)) {
          $study_programErr = "Program Studi tidak valid";
      }
  }

}
?>