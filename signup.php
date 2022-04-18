<?php 
    require_once("database.php");

    if (isset($_POST['register'])) {
        $fullname  = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
        $email  = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $username  = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password  = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fullname, email, username, password) VALUES (:fullname, :email, :username, :password)";
        $stmt = $db->prepare($sql);

        $params = array(
            ":fullname" => $fullname,
            ":email" => $email,
            ":username" => $username,
            ":password" => $password
        );

        $saved = $stmt->execute($params);

        if ($saved) header("Location: index.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="assets/gaming.png">

    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="mb-2">
                        <h5>Sign Up</h5>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">FullName</label>
                        <input type="text" class="form-control" name="fullname" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-start">
                                <a class="text-decoration-none" href="forgotpassword.php">Forgot Password?</a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <a class="text-decoration-none" href="index.php">Have a Account?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="register" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="assets/70455-video-game-console.gif" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>