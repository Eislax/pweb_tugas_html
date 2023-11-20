<?php
    include "crud.php";

    $result = select_all_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <a href="index.php">Home</a>
    <table border="1" style="text-align: center">
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>NIK</th>
            <th>NISN</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Birth</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Address</th>
            <th>Postal Code</th>
            <th>High School</th>
            <th>Pass Photo</th>
            <th>KTP</th>
            <th>Diploma</th>
            <th>Transcript</th>
            <th>Region</th>
            <th>Study Program</th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                $number = 0;
                while ($row = $result->fetch_assoc()) {
                    $number += 1;
        ?>
        <tr>
            <td><?php echo $number; ?></td>
            <td><?php echo $row["fullname"]; ?></td>
            <td><?php echo $row["nik"]; ?></td>
            <td><?php echo $row["nisn"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["place_of_birth"] . ", " . $row["date_of_birth"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["religion"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["postal_code"]; ?></td>
            <td><?php echo $row["high_school"]; ?></td>
            <td><img src="<?php echo "uploads/" . $row['pass_photo']; ?>" width="50" height="50"></td>
            <td><a href="uploads/<?php echo $row['ktp']; ?>">View</a></td>
            <td><a href="uploads/<?php echo $row['diploma']; ?>">View</a></td>
            <td><a href="uploads/<?php echo $row['transcript']; ?>">View</a></td>
            <td><?php echo $row["region"]; ?></td>
            <td><?php echo $row["study_program"]; ?></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>
