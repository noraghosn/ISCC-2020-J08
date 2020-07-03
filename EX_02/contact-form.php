<?php
   $NomPrénom= $_POST['Nom Prénom'];
   $Email=$_POST ['Email'];
   $Message=$_POST['Message'];

   if (empty ($NomPrénom) and empty ($Email) and empty($Message))
   {
   echo "<p> Aucune données reçues. </p>";
   }

   else
   {
   echo '<p>Nom :' .($_POST['Nom Prénom']). '</p>';
    echo '<p>Email :' .($_POST['Email']). '</p>';
    echo '<p> Message :' .($_POST['Message']). '</p>';
}
?>


