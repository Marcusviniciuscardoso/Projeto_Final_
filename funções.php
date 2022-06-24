<?php

function getPosts($connection){
  $result = mysqli_query($connection, "SELECT * FROM comentarios");
      while($row = $result->fetch_array()){
          $id = $row["id"];
          $titulo = $row["titulo"];
          $imagem = $row["imagem"];
          $subtitulo = $row["subtitulo"];
          $texto = $row["texto"];
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

function setComments($connection){
    if(isset($_POST['commentSubmit'])){
       $uid = $_POST['uid'];
       $date = $_POST['date'];
       $message = $_POST['message'];

       $result = mysqli_query($connection, "INSERT INTO comentarios_sec(uid, date, message) values('$uid', '$date', '$message')");
    }
}
function getComments($connection){
    $result = mysqli_query($connection, "SELECT * FROM comentarios_sec");
    while($row = $result->fetch_assoc()){
       echo "<div class='comment-box'><p>"; 
         echo $row['uid']."<br>";
         echo $row['date']."<br>";
         echo nl2br($row['message']);
       echo "</p>
         <form method='POST' action='editarComentario.php' >
           <input type='hidden' name='cid' value='". $row['cid']."'>
           <input type='hidden' name='uid' value='". $row['uid']."'>
           <input type='hidden' name='date' value='". $row['date']."'>
           <input type='hidden' name='message' value='". $row['message']."'>
         </form>
       </div>"; 
    }
}
function getLogin($connection){
  include "connection.php";
  if(isset($_POST['botao'])){
      $perfil =$_POST['perfil'];
      $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM  cadastro WHERE Perfil='$perfil' AND Senha='$senha'";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
     if($row = $result->fetch_assoc()){
          $_SESSION['Perfil'] = $row['Perfil']; 
          $_SESSION['Senha'] = $row['Senha'];
          header("Location: Inicio.php?loginSucess");
          exit();
     }
    }else{
     header("Location: Inicio.php?loginFailed");
     exit(); 
    }  
  }
}
function userLogout($connection){
  if(isset($_POST['logoutSubmit'])){
        session_start();
        session_destroy();
        header("Location: Inicio.php");
        exit(); 
  }
}
?>
