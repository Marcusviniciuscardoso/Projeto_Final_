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
          <div class="Container1">
<?php
  include_once("connection.php");

  if(isset($_POST["submit-search"])){
    $pesquisa = mysqli_real_escape_string($connection, $_POST['pesquisar']);
    $sql = "SELECT * FROM comentarios WHERE titulo LIKE '$pesquisa%' OR
     imagem LIKE '$pesquisa%' OR subtitulo LIKE '$pesquisa%' OR texto LIKE '$pesquisa%'";
    $result = mysqli_query($connection, $sql); 
    $resultadoquery = mysqli_num_rows($result); 

    echo "
           <div class='Result-box'>
            <h3>Há ".$resultadoquery." resultado(s)</h3>
           </div>          
          ";

    if($resultadoquery >0){
        while($row = mysqli_fetch_assoc($result)){
            $titulo = $row["titulo"];
            $imagem = $row["imagem"];
            $subtitulo =  $row["subtitulo"];
            $autor = $row["autor"];
            $data = $row["datas"];
            echo "
            
                  <div class='Ca1'>
                    <div class='Ca2'>
                      <div class='Ca3'>
                        <img src='arquivos_img/$imagem' alt='Imagem'>
                        <div class='Titulo'><h3><a href='Comentarios.php?id=".$row['id']."''>$titulo</a></h3></div>
                        <div class='Subtitulo'>$subtitulo</div>
                        <div class='Ca4'>
                            <i class='fa-solid fa-person'><h4>Autor(a):$autor</h4></i>
                            <i class='fa-solid fa-clock'><h4>$data</h4></i> 
                        </div>
                      </div>
                    </div>
                  </div>
                ";    
        }
    }
 }
?>
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