<!-- 
        // session_start();
        // // conncetion de mon base de données
        // $bdd = new PDO('mysql:host=localhost;dbname=mymusic', 'root', '');
        // if (isset($_POST['send'])) {
        //     // on fait un condition si le dex champs est vide on afficher le echo='complete the entring'
        //     if (!empty($_POST['email']) and !empty($_POST['password'])) {
        //         // on securise notre mail
        //         $email = htmlspecialchars($_POST['email']);
        //         // on dcrypter notre mots de pass
        //         $password = sha1($_POST['password']);
        //         // on selection et recoupurer toute le utilisateur dans mon base de données
        //         $getuser = $bdd->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
        //         // on fait un request execute
        //         $getuser->execute(array($email, $password));
        //         if ($getuser->rowCount() > 0) {
        //             $_SESSION['email'] = 'email';
        //             $_SESSION['password'] = 'password';
        //             $_SESSION['id'] = $getuser->fetch()['id'];
        //             echo $_SESSION['id'];
        //         } else {
        //             echo 'complete all the entrings please';
        //         }
        //     } else {
        //         echo 'complete the entring';
        //     }
        // }
        // 
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta>
    <title>connection</title>
</head>

<body>
    <div class="login main-page center" align="center">
        <form class="login-form" method="POST" action="">
            <label for=""></label>
            <input type="text" name="email" placeholder="off">
            <br>
            <input type="password" name="password" placeholder="off">
            <br>
            <input type="submit" name="send">
        </form>
    </div>
</body>

</html> -->