<?php 
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\STMP;
    // use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';
    require_once("database.php");

    // $mail = new PHPMailer(true);

    if(isset($_POST['forgot'])){
        $password = $_POST["resetPassword"];
        $confirmPassword = $_POST["confirmPassword"];

        if($password == $confirmPassword){
            $id = $db->id;
            $sql = "UPDATE users SET password='$confirmPassword' WHERE id='$id'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $row = mysqli_fetch_array($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                echo "<script>alert('successfully reset password!')</script>";
                header("Location: index.php");
            }else{
                echo "<script>alert('failed reset password!')</script>";
            }
        }else{
            echo "<script>alert('Not Same')</script>";
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

    <title>Forgot Password</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="assets/gaming2.gif" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <h5>Forgot Password</h5>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Reset Password</label>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="password" class="form-control" name="resetPassword" placeholder="Reset Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <!-- <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-start">
                                <a class="text-decoration-none" href="index.php">Back To Login?</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="mb-3 ">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="forgot" type="submit">Forgot Password</button>
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