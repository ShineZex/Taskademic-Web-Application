<!DOCTYPE html>
<?php
session_start();
include 'connection.php';
?>
    <html>

    <head>
        <title>Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>

    <body background="img/task2.jpg">
        <header style="margin-top: 15px;">
            <img alt="logo" src="img/taskademic.png" style="width: 230px; height: 95px; ">
            <nav class="topnav">
                <a href="tarefas.php">Tarefas</a>
                <a href="cursos.php">Cursos</a>
                <a href="disciplinas.php">Disciplinas</a>
                <div style="display: inline; float: right;">

                    <a href="home.php"><img src="img/logout.png" alt="logOut" style="width: 20px; display: inline; margin-top: 0px; vertical-align: top;">&nbsp;&nbsp;&nbsp;Logout</a>
                </div>
                <a style="float: right;" href="perfil.php">
                <img src='img/user.png' alt="user" style="width: 22px; display: inline; margin-top: 0px; vertical-align: top;">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['nome'];?>
            </a>
            </nav>
        </header>


        <?php
        $message = "Deseja mesmo eliminar o utilizador?";
       echo "<script type='text/javascript'>var r = confirm('$message'); "
                            . "if (r==true){"
                            ."window.location.href='eliminar_conta02.php';} else{window.location.href='perfil.php';}</script>";  
        ?>

    </body>

    </html>
