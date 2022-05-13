<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="/public/style.css">
    </head>
<?php include 'includes/head.php' ?>

<style>
    body{
    padding: 1.5%;
    margin: 1%;
}
.showgames-h2{
    text-align: center; 
    font-family: 'Times New Roman', Times, serif !important;
    text-shadow: black 1px 1px 1px;
}

.register-form{
    text-align: center;
    border: 1px black solid;
    margin: 0 auto;
    background-color: whitesmoke;
    border-radius: 5%;
}
</style>
<body>

<h2 class="showgames-h2">Cadastrar Usuário</h2>
    <form action="register" method="POST" class="register-form">
    <input placeholder="Digite o email do usuário" type="email">
    <input type="submit" value="Cadastrar Usuário">
    </form>
</body>
</html>