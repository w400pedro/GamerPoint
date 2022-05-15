<!DOCTYPE html>
<html lang="pt-br">
<?php include 'includes/head.php' ?>

<body>
    <style>
        .table{
            margin: 0 auto;
            background-color: whitesmoke;
            width: 80%;
        }
        .table > tr {
            border: 1px dotted gray;
        }
    </style>
    <?php include 'includes/navbar.php' ?>
    <br>
    <h2 class="showgames-h2">Todos Itens do Site</h2>
    <br>

    <form method="GET">
        <input type="text" placeholder="Filtro por nome">
        <input type="submit" value="Filtrar" class="btn btn-primary">
    </form>

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Genero</td>
            <td>desenvolvedora</td>
        </tr>

        <?php foreach ($item as $itens) { ?>
            <tr>
                <?php echo "<td> ".$itens['id']." </td>"; ?>
                <?php echo "<td> ".$itens['nome']." </td>"; ?>
                <?php echo "<td> ".$itens['categoria']." </td>"; ?>
                <?php echo "<td> ".$itens['gamegenero']." </td>"; ?>
                <?php echo "<td> ".$itens['desenvolvedora']." </td>"; ?>
            </tr>

        <?php } ?>


    </table>

</body>

</html>