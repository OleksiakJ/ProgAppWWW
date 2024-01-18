<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Jakub Oleksiak" />
    <title>Wszystko o nagrodzie Oscara</title>
    <link rel="stylesheet" href='css/style.css'> 
    <script src="js/kolorujtlo.js" type="text/javascript"></script>
    <script src="js/timedate.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="container">
        <div id="logo">
            <h2>Co to jest nagroda Oscara?</h2>
        </div>
        <div id="nav">
            <a href="?idp=glowna">Oscar</a>
            <a href="?idp=Zwycięzcy">Zwyciezcy 2023</a>
            <a href="?idp=Kontakt">Kontakt</a>
            <a href="?idp=Laboratorium">Laboratorium</a>
            <a href="?idp=Filmy">Filmy</a>
        </div>
        <!-- TUTAJ INCLUDE -->
        <?php
                    include("showpage.php");
                    if($_GET['idp'] == '' || !isset($_GET['idp'])) {
                        echo PokazPodstrone('glowna');
                    }
                    else {
                        $alias = $_GET['idp'];
                        if($_GET['idp'] == 'kontakt'){
                            include("contact.php");
                            echo "<td>";
                            echo '<div class="content" style="text-align: center;">';
                            echo WyslijMailaKontakt();
                        }
                        else {
                            echo(PokazPodstrone($alias));
                        }
                    }
                ?>
        <?php
        $nr_indeksu = '164414';
        $nrGrupy = '3';
        echo ('Autor:  Jakub Oleksiak ' . $nr_indeksu . ' Grupa: ' . $nrGrupy);
        ?>
    </div>
</body>
</html>
