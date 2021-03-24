<?php
$email = "rahmanraynkunta@gmail.com";
$pass = "PHYSICs24";
include 'db_conn.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
    if (($_POST['email']) === $email && ($_POST['password']) === $pass) {
        session_start();
        $_SESSION['admin'] = $email;
        header('Location:http://localhost/epitech/KAMARA_ABDULRAHMAN-ECF202012_1/index.php');
    } else {

        header('Location:./views/login.php');
    }
} 






























//     function validate($data)
//     {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }

//     $email = validate($_POST['email']);
//     $password = validate($_POST['password']);

//     if (empty($email)) {
//         header('Location: form.php?error= email is required');
//         exit();
//     } else if (empty($password)) {
//         header('Location: index.php?error= password is required');
//         exit();
//     } else {
//         $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
//         $result = mysqli_query($conn, $sql);

//         if (mysqli_num_rows($result)) {
//             $row = mysqli_fetch_array($result);
//             if ($row['email'] === $email && $row['password'] === $password) {
//                 $_SESSION['email'] = $row['email'];
//                 $_SESSION['password'] = $row['password'];
//                 header('Location: index.php');
//                 exit();
//             } else {
//                 header('Location: form.php?error=incorrect email or password');
//             }
//         } else {
//             header('Location: form.php');
//             exit();
//         }
//     }
// }
