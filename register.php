<?php 
session_start(); // Start the session


include 'connect.php';
ob_start(); // Turn on output buffering

if(!isset($_SESSION['username'])) {
    header("Location: Signin.php"); // Redirect to signin.php page
    exit();
}

if(isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to signin.php page
    exit();
}
if(isset($_POST['SignUp'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM userss WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO userss(username, email, password) VALUES ('$username', '$email', '$password')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: index.php"); // Make sure the location is correct
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
 

if(isset($_POST['SignIn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM userss WHERE username='$username' And password='$password'";
    echo $sql;
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
         $_SESSION['username'] = $username;
         header("Location: index.php"); // Make sure the location is correct
         exit();
    } else {
         echo "Not Found, Incorrect Username or Password";
    }
}



ob_end_flush(); // Flush the output buffer
?>
<body>
    <p>i am register.php</p>
</body>