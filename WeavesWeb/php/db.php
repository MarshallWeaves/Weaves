<?php
include('encryption.php');
$servername = "localhost";
$username = "root";
$password = "";
$db = "Weaves";
//$key = e1816d056393933f9c38a618e0be0b960f7ec2e96e36f13d253555ebac656877;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(count($_POST) == 4){
    $pass = encrypt($_POST['password']);
    mysqli_query($conn, "INSERT INTO Users (fname, lname, email, password, iv) VALUES ('" . $_POST['fname'] . "', '" . $_POST['lname'] . "', '" . $_POST['email'] . "', '" . $pass['encrypted'] . "', '" . $pass['iv'] . "')");
}

if(count($_POST) == 2){
    $query = mysqli_query($conn, "SELECT * FROM Users WHERE email='". $_POST['email'] ."'");
    $user = mysqli_fetch_array($query);
    
    setcookie("fname", $user['fname']);
    
    header("Location: /php/home.php");
}

/*$key = "�mc��?�8���~��n6�=%5U�ehw";
$encryption_key = hex2bin(strToHex($key));
        
$iv_size = 16; // 128 bits
$iv = openssl_random_pseudo_bytes($iv_size, $strong);
        
$enc_pass = openssl_encrypt(
    pkcs7_pad("evan", $iv_size),
    'AES-256-CBC',
    $encryption_key,
    0,
    $iv
);
echo $enc_pass;
echo "<br>";

$decrypted = pkcs7_unpad(openssl_decrypt(
    $enc_pass,
    'AES-256-CBC',
    $encryption_key,
    0,
    $iv
));
echo $decrypted;*/

mysqli_close($conn);

?>