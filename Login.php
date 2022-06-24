<?php
     session_start();
     include('funções.php');
     include ('connection.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Área de login</title>
    <link rel="stylesheet" href="style5.css?v=<?php echo time(); ?>">

</head>
<body>
    <main>
        <header>
            <div class="flex">  
                <img class="icon" alt="Icon_site" src="img/images.png">
            </div>    
                <div class="header1">
                    <ul>
                        <li>ciência</li>
                        <li>mobile</li>
                        <li>hardware</li>
                        <li>filmes e séries</li>
                    </ul>
                </div> 
            </div> 
        </header> 
       <section>
        <div class="Container-1">
            <div class="card">
<?php            
        echo "   
                    <form action='".getLogin($connection)."' method='POST' autocomplete='off'>
                    <h1>Informações para cadastro</h1>
                        <div class='card'>
                            <label for='perfil'><b>Perfil</b></label> 
                            <input type='text' id='nome' name='perfil' placeholder='Perfil' required=''>
                            <label for='senha'><b>Senha</b></label> 
                            <input type='password' id='senha' name='senha' placeholder='Senha' required=''>
                            <input type='checkbox' onclick='checkBox()'>
                            <button class='Button' type='submit'  name='botao'>Logar</button>
                        </div>
                    </form>
                <form action='".userLogout($connection)."' method='POST'>
                    <div class='card'>
                        <button class='Button' type='submit' name='logoutSubmit'>Deslogar</button>
                    </div>
                </form>
      ";

?>
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
         </div>
        </div>
      </section>  
    </main>
    <footer>
            <div>
              <img class="icon" alt="Icon_site" src="img/images.png">
            </div>
            <div class="Container2">
                <ul>
                    <li>ciência</li>
                    <li>mobile</li>
                    <li>hardware</li>
                    <li>filmes e séries</li>
                </ul>
            </div>
        </footer>