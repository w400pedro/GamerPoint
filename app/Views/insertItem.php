<!DOCTYPE html>
<html lang="pt-br">
<?php include 'includes/head.php' ?>
<body>
<style>
    body{
    padding: 0;
    margin: 0;
    height: 100vh;
    background-image: linear-gradient(whitesmoke, gray);
}
.showgames-h2{
    text-align: center; 
    font-family: 'Times New Roman', Times, serif !important;
    text-shadow: black 1px 1px 1px;
}

.div{
    text-align: center;
    border: 1px black solid;
    margin: 0 auto;
    padding: 1.5%;
    background-color: whitesmoke;
    height: 70vh;
    width: 50%;
    border-radius: 5%;
}
.register-form{
    margin-top: 10%;
}
</style>
<body>
<?php include 'includes/navbar.php' ?>

<?php if(session()->get('msg')){

    echo "<div class='alert alert-info' role='alert'>";

    echo "<b>".session()->getFlashdata("msg")."</b></div>";
    
} ?>
<br>
<h2 class="showgames-h2">Cadastrar Item</h2>
<div class="div">

    <form action="/cadastraitem" method="POST" class="register-form">
    <input placeholder="Digite o nome do item" name="nome" type="text" class="form-control" required>  
    <br>
    <input placeholder="Digite o valor do item" name="preco" type="text" class="form-control" required>
    <br>
   <label for='categoria'>Selecione a categoria: </label> <select id='categoria' name="categoria">
    <option value=""></option>
    </select>
    <br><br>

    <input type="submit" value="Cadastrar Item" class="btn btn-primary mb-2">
</form>
</div>    

</body>
</html>