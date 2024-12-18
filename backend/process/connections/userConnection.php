<?php
include_once("../../dataBase/connectionDataBase.php");

// recupe des datas
$email = $_POST['email'];
$password = $_POST['password'];

// QUERY
$stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
$stmt->execute([
    ':email'=> $email,
]);

// RESULT QUERY
$user = $stmt->fetch(PDO::FETCH_ASSOC);



// if user exist is not empty
if(empty($user)){
    header('location: ../../../frontend/pages/connexion.php');
};

// if password enter and the password(hashed) stock in DB are equal
if(!password_verify($password, $user['password'])) {
    header('location: ../../../frontend/pages/connexion.php');
};

session_start();

// envoye en backend par session
$_SESSION['user'] = [
    "name"=>$user["name"],
    "email"=>$user["email"],
];

// redirect to home page if user exist
// MODIF LE LINK
header('home page');
?>