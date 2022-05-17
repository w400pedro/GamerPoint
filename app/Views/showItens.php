<!DOCTYPE html>
<html lang="pt-br">
<?php include 'includes/head.php' ?>

<body>
    
    <style>
                body {
            padding: 0;
            margin: 0;
            height: 100vh;
            background-image: linear-gradient(whitesmoke, gray);
        }
        .table{
            margin: 0 auto;
            background-color: whitesmoke;
            width: 80%;
        }
        .table > tr {
            border: 1px dotted gray;
        }
        .center{
            display: block;
            align-items: center;
            text-align: center;
        }
        .userlabel{
            font-size: 18.5px;
        }
    </style>
    <script>
$(document).ready(function(){
  $('.chosen').chosen({ width: "28%", no_results_text: "Nenhum resultado encontrado para "});
  $(".chosen-results").css({'font-size':'20px', 'overflow': 'auto'});
  $(".chosen-container").css({'font-size':'17px'});
  $(".chosen-single").css({'height':'25px', 'border': 'black 1px solid'});
});
    </script>
    <?php include 'includes/navbar.php' ?>
    <?php if(session()->get('msg')){

echo "<div class='alert alert-info' role='alert'>";

echo "<b>".session()->getFlashdata("msg")."</b></div>";

} ?>
   
    <div class="center">
    <h2 class="showgames-h2">Todos Itens do Site</h2>
    <br>

    <form method="GET" action="/busca">
        <input type="text" placeholder="Digite o nome do produto" name="busca">
        <input type="submit" value="Buscar" class="btn btn-primary">
    </form>
<br>
<form action="/carrinho" method="POST">
 <select name="usuario" class="chosen" id="userselect" required>
       <option value="" disabled selected>Selecione o Usuário que fará a compra</option>
    <?php foreach ($result[1] as $usuarios) { 
        echo  "<option value=" . $usuarios['id'] . ">" . $usuarios['email'] . "</option>";
         } ?>
    </select>
    <br><br>
    <button class="btn btn-primary" type="submit">Comprar itens selecionados</button>
    </div>

    <table class="table">
        <tr>
            <th>Selecionar</th>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Genero</th>
            <th>desenvolvedora</th>
        </tr>

        <?php foreach ($result[0] as $itens) { ?>
            <tr>
                <?php echo "<td><input type='checkbox' name='comprar[]' class='form-check-input' value='".$itens['id']."'></td>";?>
                <?php echo "<td> ".$itens['id']." </td>"; ?>
                <?php echo "<td> ".$itens['nome']." </td>"; ?>
                <?php echo "<td> R$".$itens['preco']." </td>"; ?>
                <?php echo "<td> ".$itens['categoria']." </td>"; ?>
                <?php echo "<td> ".$itens['genero']." </td>"; ?>
                <?php echo "<td> ".$itens['desenvolvedora']." </td>"; ?>
            </tr>

        <?php } ?>

        </form>
    </table>

</body>

</html>