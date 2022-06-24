<?php
    session_start();
    date_default_timezone_set('america/sao_paulo');

    require"connection.php";
               if(  isset($_FILES['imagem']) )  {
                    $imagem = $_FILES['imagem']['name'];

                    $extensão = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));

                    $novo_nome = md5(time()).".".$extensão;
                    $diretorio = "arquivos_img/";

                    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome);


                    
                }              
                if( isset($_POST['botao']))  {
                    $nome = $_POST['nome'];
                    $subtitulo = $_POST['subtitulo'];
                    $texto = $_POST['texto'];
                    $perfil = $_POST['perfil'];
                    $data = $_POST['date'];

                    include_once("connection.php");
                    
                    $result = mysqli_query($connection, "INSERT INTO comentarios(titulo, imagem, subtitulo, texto, autor, datas) values('$nome','$novo_nome', '$subtitulo', '$texto', '$perfil', '$data') ");
                }

?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar_Post</title>
    <link rel="stylesheet" href="style4.css?v=<?php echo time(); ?>">
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
<?php       
      if(!(isset($_SESSION['Perfil']))){
        echo"      
        <div class='Container1'>
            <form  action='#' method='post' enctype='multipart/form-data'>
              <h1>Criar postagem </h1>
                <div class='card'>
                        <label for='Título'><b>Título:</b></label>
                        <input type='text' id='nome' name='nome' placeholder='Seu nome' required=''>
                        <label for='Imagem'><b>Imagem:</b></label>
                        <input type='file' id='imagem' name='imagem' placeholder='oi' required=' accept='.jpg, .jpeg'>
                        <label for='Subtitulo'><b>Subtítulo:</b></label>
                        <input type='text' id='perfil' name='subtitulo' placeholder='Subtítulo' required=''>
                        <label for='Texto'><b>Texto:</b></label>
                        <textarea id='area_texto' rows='10' cols='40' name='texto' placeholder='texto' required=''></textarea>
                        <h3>É necessário logar primeiro !</h3>
                </div>    
            </form>
        "; 
      }else{  
            echo"      
                <div class='Container1'>
                    <form  action='#' method='post' enctype='multipart/form-data'>
                      <h1>Criar postagem </h1>
                        <div class='card'>
                                <label for='Título'><b>Título:</b></label>
                                <input type='text' id='nome' name='nome' placeholder='Seu nome' required=''>
                                <label for='Imagem'><b>Imagem:</b></label>
                                <input type='file' id='imagem' name='imagem' placeholder='oi' required=' accept='.jpg, .jpeg'>
                                <label for='Subtitulo'><b>Subtítulo:</b></label>
                                <input type='text' id='perfil' name='subtitulo' placeholder='Subtítulo' required=''>
                                <label for='Texto'><b>Texto:</b></label>
                                <textarea id='area_texto' rows='10' cols='40' name='texto' placeholder='texto' required=''></textarea>
                                <input type='hidden' id='perfil'  name='perfil' value='".$_SESSION['Perfil']."' >
                                <input type='hidden' id='perfil' name='date' value='".date('Y-m-d H:i:s')."' >
                                <div class='Button'>
                                  <button id='botaoprincipal' name='botao' class='Button'>Enviar</button>
                                </div>   
                        </div>    
                    </form>
                </div>
            "; 
      }       
?>            
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

</main></body></html>