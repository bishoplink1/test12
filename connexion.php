<html>
<head>
<title>Formulaire d'identification</title>
<style>
body{
    background-color:blue;
}
#ol{
    display:flex;
    border:solid 5px;
    border-radius:2px;
}
#ol input{
    display:flex;
    border:solid 5px;
}

</style>
</head>
<body>
<marquee><h1>BIENVENUE SUR MON SITE</h1></marquee>
<div id="ol">
Votre login : <input type="login" name="login">
<br />
Votre mot de passé : <input type="password" name="pwd"><br />
<select id="bol">
<option value="">Profil</option>
<option value="">User</option>
<option value="">Admin</option>
</select>
<input type="submit" value="Connexion">
</form>
</div>
</body>
</html>
<?php
if (isset($_POST["connexion"])){
    extract($_POST);
    if($id=="user"){
        if($login=="user" && $password=="user"){
            $_SESSION["$id"]==header("location:recupe.php");
            $_SESSION["$id"];
        }elseif ($login=="admin" && $password=="admin") {
            echo" vous n'etes pas éligible";
        }else{
            echo"login ou password incorrect veuillez ressayer";
        }
    }
    elseif ($id=="admin") {
        if($login=="admin" && $password=="admin"){
            $_SESSION["$id"]==header("location:anale.php");
            $_SESSION["$id"];
        }elseif($login=="user" && $password=="user"){
            echo"vous n'etes pas éligible";
        }else{
            echo"login ou password incorrect veuillez ressayer";
        }
    }
}