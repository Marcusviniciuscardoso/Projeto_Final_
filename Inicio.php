<?php
    session_start();
    include("connection.php");
   
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/54d4dd9545.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <header>
            <div class="flex">  
                <img class="icon" alt="Icon_site" src="img/images.png">
<?php
    if(isset($_POST['submetido'])){
        $Nome = $_POST['nome'];
        $Email = $_POST['email'];
        $Perfil = $_POST['perfil'];
        $Senha = $_POST['senha'];

        $pesquisa = mysqli_real_escape_string($connection, $_POST['perfil']);
        $sql = "SELECT * FROM cadastro WHERE Perfil LIKE '$pesquisa%'";
        $result = mysqli_query($connection, $sql); 
        $resultadoquery = mysqli_num_rows($result);
                  
        if($resultadoquery >0){
            echo "Esse perfil ja existe";
        }else{
        $result1 = mysqli_query($connection, "INSERT INTO cadastro(Nome, Perfil, Email, Senha) values('$Nome', '$Perfil', '$Email', '$Senha')");
            echo "Perfil criado";
        }
    }
?>
                <form action="pesquisar.php" method="POST" class="Form1">
                    <input type="text" placeholder="Pesquisar" name="pesquisar">
                    <button type="submit" name="submit-search">Pesquisar</button>
                </form> 
            <div class="flex2">
                <div class="Button">
                    <input class="Button" type="button" value="Cadastrar-se" onclick="location='Cadastro.php'"/>
                </div>
                <div class="Button">
                    <input class="Button" type="button" value="Criar Post" onclick="location='Criar_Post.php'"/>
                </div>
                <div class="Button">
                    <input class="Button" type="button" value="Login" onclick="location='Login.php'"/>
                </div>
                <div class="header1">
<?php         
        if(!(isset($_SESSION['Perfil']))){
            echo "         
                    <div class='user'>
                        <p>Anônimo</p>
                    </div>
          ";      
        }else{  
          echo "         
                    <div class='user'>
                        <p>Perfil: ".$_SESSION['Perfil']."</p>
                    </div>
          ";  
        }          
?>                    
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
          <div class="Container1"> 
<?php
                include_once("connection.php");
                include("funções.php");
                getPosts($connection);     
?>
            </div>        
         </section>   
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
    </main>
</body>

</html>