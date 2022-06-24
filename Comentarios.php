<?php
    session_start();
    date_default_timezone_set('america/sao_paulo');
    include('funções.php');
    include ('connection.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios-Blog</title>
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">
</head>

<body>
    <main>
        <header>
            <img class="icon" alt="Icon_site" src="img/images.png">
            <div class="header1">
                <ul>
                    <li>ciência</li>
                    <li>mobile</li>
                    <li>hardware</li>
                    <li>filmes e séries</li>
                </ul>
            </div>
        </header>
        <section>
        <article>    
<?php         

    include_once("connection.php");
    $result = mysqli_query($connection, "SELECT * FROM comentarios WHERE id = '" . $_GET['id'] . "'");
    while($row = $result->fetch_array()){
        $titulo = $row["titulo"];
        $imagem = $row["imagem"];
        $subtitulo = $row["subtitulo"];
        $texto = $row["texto"];
        
        
            echo"
                <div class='Container1'>
                    <img src='arquivos_img/$imagem'> 
                </div>
                <article>
                <h2>$titulo</h2>
                <div class='text'>
                    <p>
                        $texto
                    </p>
                </div>
            ";   
     }                
       
?>         
<?php
if(!(isset($_SESSION['Perfil']))){
    echo "<h2>Comentarios: </h2>";
    echo "<div class='comment-text'>";
    echo "
       <form method='POST' action='".setComments($connection)."'>
         <input type='hidden' name='uid' value='Anonymous'>
         <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."' >
         <textarea name='message''></textarea> <br>
         <button type='submit' name='commentSubmit'>Comentar</button>   
       </form>
    ";
     echo "</div>";
    }else{
       echo "<div class='comment-text'>";
       echo "
       <form method='POST' action='".setComments($connection)."'>
         <input type='hidden' name='uid' value='".$_SESSION['Perfil']."'>
         <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."' >
         <textarea name='message''></textarea> <br>
         <button type='submit' class='Button' name='commentSubmit'>Comentar</button>   
       </form>
    ";
    echo "</div>";

}
    getComments($connection);

?>    
            </article>
        </section>
        <footer>
            <img class="icon" alt="Icon_site" src="img/images.png">
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