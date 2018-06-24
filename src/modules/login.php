<?php 

session_start();

if(isset($_POST['email']) === true && isset($_POST['pass']) === true) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['logado'] = true;
}

header('Location: http://localhost/INF221');
exit();
?>