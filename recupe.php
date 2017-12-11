<h1><font color="black">BIENVENUE  admin </h1>
<body style="background-image:url(niass.JPG);height="300" width="420"";>
<?php
echo '<a href="./connexion.php">Déconnection</a>';
if (isset($_POST['mot_de_passe'])) { $mot_de_passe = $_POST['mot_de_passe']; }
else { $mot_de_passe = ""; }
if ($mot_de_passe == "admin"&& $login=="admin") { header ('location:recupe.php.php/');

$date = date("d/m/Y");
$heure = date("H:i");
Print("Nous sommes le $date et il est $heure");
?>
    </body>
</html> 
<?php
        if ($bErreur) {
            header("Location: connexion.php");
            exit();}
}
else
{
?>
<?php
}
?>
    <?php
$date = date("d/m/Y");
$heure = date("H:i");
Print("Nous sommes le $date et il est $heure");
?>
<!DOCTYPE html>
<html>

<head>
    <title>formulaire en php </title>
    <style>
    body{
        background-color:blue;
    }
    
    </style>
</head>
<body bgcolor="green">
    <bgcolor="black">
 <h2>bienvenue sur la page informelle</h2>
 <MARQUEE BEHAVIOR="down"> <h1> FORMULAIRE de Sene Abdoulaye apprenant Sonatel Academy</h1> </MARQUEE>
    <form method="post" action="info.php">
        <table border WIDTH="100 " HEIGHT="250" style="background-position: center;" bgcolor="gray">
            <tr>
                <br/>
                <td>
                    <input type=button value=nom onclick="alert(document.monformulaire.nom.value);">
                    <input type=text name=nom size 20>
                </td>
                <br/>
            </tr>
            <tr>
            <td>
                    <input type=button value=prenom onclick="alert(document.monformulaire.prenom.value);">
                    <input type=text name=prenom size 20>
                </td>
            </tr>
            <tr>
                <br/>
                <td>
                    <input type=button value=age onclick="alert(document.monformulaire.age.value);">
                    <input type=numeric name=age size 20>
                </td>
            </tr>
        <tr>
            <br/>
              <td><input type=submit value=valider><input type=reset value=annuler></td>
                </table>
        </tr>
    </form>
</body>

</html>
    </body>
</html>