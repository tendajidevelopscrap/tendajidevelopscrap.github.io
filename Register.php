<?php
  session_start();
  include("db.php");

  $email = $_POST['Email'];
  $Username = $_POST['Username'];
  $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

  $stmt = $con->prepare("INSERT INTO form (Email, Username, `Password`) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $email, $Username, $password);
  if($stmt->execute()) {
    echo "Account Created";
    $_SESSION['username'] = $Username;
  }else{
    echo "Sorry, Account could not be created.<br>" . $stmt->error;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" con tent="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style login.css">
</head>
<body>
<div class="wrapper">
        <form action="Register.php" method="POST">
            <h1>Make a Free Account and Get a Free Game!</h1>

            <div class="input-box"> 
                <input type="text" placeholder="Email" name="Email"
                required>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box"> 
                <input type="text" placeholder="Username you Want!" name="Username"
                required>
                <box-icon type='solid' name='user-circle'></box-icon>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="Password"
                required>
                <box-icon name='key' type='solid'></box-icon>
            </div>
            <a href="indexloggedin.html"
            <button type="submit" class="btn">Make Your Free Account!</button>
            </a>
                 </form>
            </div>

        


        </form>
    </div>


</body>


</body>
</html> 
