<?php
    
    session_start();
    $_SESSION["limite_question"] = 0;           //Initialisation de la session
    $_SESSION["resultat"] = 0;

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <title>Bienvenue</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="projetWeb.css">
    </head>

    <body>

        <div class="wrapper"> 
            

            <div class=header></br>
                    <img src="cesi.png" width="130"% alt="logo" />
            </div>

            <div class=formulaire><br><br>
                <center>
                    <h1>Bonjour nouvel Utilisateur !</h1><br>
                    <h2>Avant de pouvoir t'inscrire tu dois répondre à un petit questionnaire.</h2><br>
                    <br><br>
                    <a href="Questionnaire.php">
                    <input type="submit" value="Commencer"></a>
                </center>
            </div>
        </div>


        <?php
        // put your code here
        ?>


    </body>
</html>
