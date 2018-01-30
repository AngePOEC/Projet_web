
<?php
session_start();

function connect() {
    try {
        $DB = new PDO("mysql:host=localhost;dbname=projet_web_test", "root", "", array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        // $DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Impossible de se connecter � la base de donn�es, merci de r�essayer plus tard !';
    }
    return $DB;
}

function Question() {
    $DB = connect();
    $sql = 'SELECT id, Question FROM questions ORDER BY RAND()';
    $req = $DB->query($sql);
    while ($d = $req->fetch(PDO::FETCH_OBJ)) {
        // echo '<pre>';
        // echo  $d->libelle;
        // echo '</pre>';
        $tab[] = $d->id;
    }
    return $tab;
}

function Reponse($id) {
    $DB = connect(); //new PDO("mysql:host=localhost;dbname=ProjetWeb", "root", "");
    $sql = 'SELECT reponse FROM reponses, questions WHERE questions.id = reponses.id_question AND questions.id = ' . $id;
    $req = $DB->query($sql);
    while ($d = $req->fetch(PDO::FETCH_OBJ)) {
        // echo '<pre>';
        // echo $d->id;
        // echo '</pre>';
        $tab[] = $d->reponse;
    }
    return $tab;
}

function AfficheQuestion($id) {
    $DB = connect(); //new PDO("mysql:host=localhost;dbname=ProjetWeb", "root", "");
    $sql = 'SELECT id, Question FROM questions WHERE id=' . $id;
    $req = $DB->query($sql);
    while ($d = $req->fetch(PDO::FETCH_OBJ)) {
        echo '<pre>';
        echo $d->Question;
        echo '</pre>';
    }
}

function AfficheReponse($id) {
    $DB = connect(); //new PDO("mysql:host=localhost;dbname=ProjetWeb", "root", "");
    $sql = 'SELECT r.reponse, q.choix_multiple FROM reponses r, questions q  WHERE q.id=r.id_question  AND r.id_question = ' . $id;
    $req = $DB->query($sql);
    while ($d = $req->fetch(PDO::FETCH_OBJ)) {
        $d->choix_multiple == 0 ? $str = 'radio' : $str = 'checkbox';
        echo '<div class="reponse"> <input type="' . $str . '" name="reponse[]" value="' . $id++ . '"> ';
        echo $d->reponse;
        echo '</div></br>';
    }
}

?>

<head>

    <title>Questionnaire</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="projetWeb.css">

</head>

<body>

    <div class="wrapper"> 

        <div class=header></br>
            <img src="cesi.png" width="130%" alt="logo" />
        </div>
        </br><center>
            Resultat: <?php echo $_SESSION["resultat"]; ?>/ 4                   
            <h1> Question <?php echo $_SESSION["limite_question"]; ?>/ 4 </br> </h1>
            <h2> <div id="compteur"></div> </h2> 
        </center>
        <div class=formulaire>

            <div class=question></br></br><?php
                $Q = Question();
                echo AfficheQuestion($Q[0]) 
                ?></div>

            <div class=reponse>


                
                        <a href="Questionnaire.php">
                            <Input type="submit" name="Envoi" value=" Envoyer "></a>

                    <?php echo AfficheReponse($Q[0]); ?>
            </div>
        </div>
    </div>

<?php
$bdd = connect();

$reponse = $bdd->query('SELECT reponse FROM reponses WHERE Reponse_vraie = 1 AND id_question = 1');



while ($donnees = $reponse->fetch()) {
    if (isset($_POST['Envoi'])) {           //verifie si appui sur le bouton envoi 

        if ($_SESSION["limite_question"] < 3) {              //si c'est le cas et que le nombre de question est > 3 alors on recommence
            if ($donnees['reponse'] == $_POST['rep']) {    
                ++$_SESSION["limite_question"];            //une fois que l'on reponde on incremente le compteur de question et de resultat
                ++$_SESSION['resultat'];
                header('Location: Questionnaire.php');        //Puis on recharge la page
            } else {
                ++$_SESSION["limite_question"];                        
                header('Location: Questionnaire.php');
            }
        } else {
            header('Location: resultat.php');          //Si le compteur de question est sup à 4 on envoi vers la page resulat.
            exit();
        }
    }
}
?> 




    <script language="JavaScript">

        function Redir()
        {
            document.location.href = "resultat.php";
        }

        function t()
        {
            var compteur = document.getElementById('compteur');
            s = duree;
            m = 0;
            h = 0;
            if (s < 0)
            {
                compteur.innerHTML = "terminé<br />" + Redir()
            } else
            {
                if (s > 59)
                {
                    m = Math.floor(s / 60);
                    s = s - m * 60
                }
                if (m > 59)
                {
                    h = Math.floor(m / 60);
                    m = m - h * 60
                }
                if (s < 10)
                {
                    s = "0" + s
                }
                if (m < 10)
                {
                    m = "0" + m
                }
                compteur.innerHTML = h + ":" + m + ":" + s
            }
            duree = duree - 1;
            window.setTimeout("t();", 999);

        }

    </script>

    <script language="JavaScript">
        duree = "600";
        t();
    </script>


</body>
