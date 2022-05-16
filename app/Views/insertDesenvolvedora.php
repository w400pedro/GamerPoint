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

        .showgames-h2 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif !important;
            text-shadow: black 1px 1px 1px;
        }

        .div {
            text-align: center;
            border: 1px black solid;
            margin: 0 auto;
            padding: 1.5%;
            background-color: whitesmoke;
            height: 30vh;
            width: 30%;
            border-radius: 5%;
        }

        .register-form {
            margin-top: 10%;
        }
    </style>

    <body>
    <?php include 'includes/navbar.php' ?>
    <?php if (session()->get('msg')) {
            echo "<div class='alert alert-info' role='alert'>";

            echo "<b>" . session()->getFlashdata("msg") . "</b></div>";
        } ?>
    <h2 class="showgames-h2">Cadastrar Desenvolvedora</h2>
<div class="div">

    <form action="/cadastradesenvolvedora" method="POST" class="register-form">
    <input placeholder="Digite o nome da Desenvolvedora" name="nome" type="text" id="btn-name" class="form-control" required>  
    <br><br>
    <input type="submit" value="Cadastrar Desenvolvedora" class="btn btn-primary mb-2">
</form>
</div>    


    </body>
    </html>