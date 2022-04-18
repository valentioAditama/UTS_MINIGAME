<?php 
    require_once("database.php");
    if (isset($_POST['login'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM users WHERE username=:username or email=:email";
        $stmt = $db->prepare($sql);

        $params = array(
            ":username"=>$username,
            ":email"=>$username
        );

        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            if (password_verify($password, $user["password"])) {
                echo "<script>alert('berhasil login!')</script>";
                session_start();
                $_SESSION["user"] = $user;
                header("Location: home.php");
            }else{
                echo "<script>alert('Username atau password salah!')</script>";
            }
        }else{
            echo "<script>alert('Username atau password salah!')</script>";
        }
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
        <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="assets/95657-playing-games.gif" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <h5>Login</h5>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Input Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Input Password" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-start">
                                <a class="text-decoration-none" href="forgotpassword.php">Forgot Password?</a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <a class="text-decoration-none" href="signup.php">Not Have a Account?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="login" type="submit">Login</button>
                        </div>
                    </div>
                </form>
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