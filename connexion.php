<?php

include ('info.php');


if (!isset($_POST['user'])){
    ?>

    <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">
                <style>
                    body {
                        background-image: url(img/fondhead.jpg);
                        text-align: center;
                    } 
                    h1 {
                        color: white;
                        font-family: "Lato";
                    }
                </style>
                <title> Connexion </title>
            </head>
            <body>
                <form method="POST">
                <h1>Connexion</h1>
                <input type="text" name="user" placeholder="User" >
                <input type="password" name="psw" placeholder="Mot de passe">
                <input type="submit" value="Connexion">
                </form>
            </body> 
        </html>
<?php 
}
else
{
    if (empty($_POST['user']) || empty($_POST['psw']) ) 
    {
        header('Location: connexion.php');
    }
    else 
    {
        $query=$bdd->prepare('SELECT *
        FROM admin WHERE user=:user');
        $query->bindValue(':user',$_POST['user'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
    
        if ($data['psw'] == md5($_POST['psw'])) // Acces OK !
        { 
            session_start();
            $_SESSION['user'] = $data['user'];
            header('Location: admin.php');
            exit();
        }
        else 
        {
            header('Location: connexion.php');
        }
        $query->CloseCursor();
    }

}
?>


