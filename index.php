<?php
session_start();

$user = $pass = '';
$userErr = $passErr = '';
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location: home.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["user"])) {
        $userErr = "username is required";
      } else {
        $user = test_input($_POST["user"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
            $userErr = "Only letters and white space allowed";
        }
      }
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
      }    
      if(empty($userErr) && empty($passErr)){
        $_SESSION["loggedin"]=true;
        $_SESSION["username"]=$user;
        header("location: home.php");
    }
}




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($userErr)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="user" class="form-control" value="<?php echo $user; ?>">
                <span class="help-block"><?php echo $userErr; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($passErr)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="pass" class="form-control">
                <span class="help-block"><?php echo $passErr; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>