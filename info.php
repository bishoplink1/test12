<p><a href="recupe.php">Retourner</a></p>
<body bgcolor="green">
<?php
echo "salut votre nom est : ".$_POST['nom']  .'<br>';
echo " votre prenom est : ".$_POST['prenom']  .'<br>';
echo " votre age est : ".$_POST['age']  .'ans <br>';
 extract($_POST);
if(is_numeric($age))
    {
        echo "l' age est de type numérique <br>";
    }
else {
        echo "l'age  n'est pas de type numérique <br>";
     }


        if ($age<=18)
        {
            echo ' vous étes mineur  <br>' ;
        }
        else
        {
            echo 'vous étes majeur <br> ' ;
        }
        if($age>100)
        {
            echo "l'age ne doit pas passer 100";
        }
        if($age<0)
        {
            echo "l'age ne doit pas etre négatif";
        }



?>
</body>