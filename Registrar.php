<?php
$user = $_POST["user"];
$email = $_POST["email"];
$date = $_POST["date"];
$password = $_POST["password"]
$c_password = $_POST["c_password"];

if (empty($user)) {
    print "<html> <body> Por favor, insira um usuário válido </body> </html>"
    exit;
}

if (empty($email)) {
    print "<html> <body> Por favor, insira um e-mail válido </body> </html>"
    exit;
}

if (empty($date)) {
    print "<html> <body> Por favor, insira uma data válida </body> </html>"
    exit;
}

if (empty($password)) {
    print "<html> <body> Por favor, insira uma senha válida </body> </html>"
    exit;
}

if (empty($c_password)) {
    print "<html> <body> As senhas não coincidem </body> </html>"
    exit;
}

if (empty($user && $email && $date && $password && $c_password)) {
    print "<html> <body> É um prazer te conhecer, $user </body> </html>"
    exit;
}

?>