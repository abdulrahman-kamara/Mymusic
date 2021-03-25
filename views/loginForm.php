<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>LOGIN INTO MY MUSIC APP</title>
</head>

<body>

    <?php require "./component/header.php"; ?>
    <div class="banner">
        <strong>LOGIN INTO MY MUSIC APP</strong>
    </div>
    <form action="/views/form.php" method="POST">
        <?php
        if ($error) {
            echo $error;
        }
        ?>
        <label for="exampleInputEmail1"><strong>Email Address</strong></label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">

        <label for="exampleInputPassword1"><strong>Password</strong></label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>

        <button type="submit" class="btn btn-primary">LOGIN</button>

    </form>
    <?php require "./components/footer.php"; ?>
</body>

</html>