<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style3.css?v=<?php echo time(); ?>">

</head>
<body>

    <div class="container-1">
        <form action="Inicio.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="card">
                <h3>Informações para cadastro</h3>
                    <label for="nome"><b>Nome:</b></label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                    <label for="email"><b>Email:</b></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <label for="perfil"><b>Perfil de usuário:</b></label>
                    <input type="text" id="perfil" name="perfil" placeholder="Perfil" required>
                    <label for="senha"><b>Senha:</b></label>
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                    <input type="checkbox" onclick="checkBox()">
                    <button id="botaoprincipal" name="submetido" class="botao">Enviar</button>
            </div>
        </form>
    </div>

<script>
function checkBox(){
    var x = document.getElementById("senha");
    if(x.type == "password"){
        x.type = "text";
    }else{
        x.type = "password";
    }
} 
</script>

</body>
</html>