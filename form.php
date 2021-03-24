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
    <!-- me logo et le nome de la site -->
    <div class="logo">
        <strong>MY MUSIC</strong>
    </div>
    <!-- le banner que est le puch line LES ARTISTES -->
    <div class="banner">
        <strong>LOGIN INTO MY MUSIC APP</strong>
    </div>
    <form action="./database/login.php" method="POST">
        <label for="exampleInputEmail1"><strong>Email Address</strong></label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">

        <label for="exampleInputPassword1"><strong>Password</strong></label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>

        <button type="submit" class="btn btn-primary">LOGIN</button>
        <?php require "./views/footer.php"; ?>
    </form>
</body>

</html>