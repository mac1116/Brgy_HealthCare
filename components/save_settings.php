<!-- WALA GIGAMIT SA ADMINSIDE -->

<?php
session_start();
include("../db_connect/db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usr_id = $_POST['usr_id'];
    $usr_name = $_POST['usr_name'];
    $usr_mname = $_POST['usr_mname'];
    $usr_lname = $_POST['usr_lname'];
    $usr_fname = $_POST['usr_fname'];

    if (!empty($_FILES['usr_profile']['name'])) {
        $target_dir = "../admin/assets/images/profiles/";
        $file_name = basename($_FILES["usr_profile"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (in_array($imageFileType, ["jpg", "jpeg", "png"])) {
            if (move_uploaded_file($_FILES['usr_profile']["tmp_name"], $target_file)) {
                $profile_image = $file_name;

            } else {
                $_SESSION['notification'] = [
                    'type' => 'danger',
                    'message' => 'Error uploading image'
                ];

                header('location:../admin/settings.php');
                exit();

            }

        } else {

            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Error Invalid Format'
            ];

            header('location:../admin/settings.php');
            exit();
        }
    }else{

        $profile_image = $user['usr_profile'];

    }


    $query = "UPDATE users SET usr_name = ?, usr_fname = ?,
  usr_lname = ?, usr_mname =?,  usr_profile = ? WHERE  usr_id = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssssi', $usr_name, $usr_fname, $usr_lname, $usr_mname, $profile_image, $usr_id);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['username'] = $usr_name;
    
        $_SESSION['notification'] = [
            'type' => 'success',
            'message' => 'User Updated Successfully!'
        ];

    } else {

        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Error!'
        ];
    }

    mysqli_stmt_close($stmt);

    header('location: ../admin/settings.php');
    exit();

}

$conn->close();
?>