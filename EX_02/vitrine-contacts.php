<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style/vitrine.css" type="text/css">
    <meta charset= "utf-8">
<body>
    <main>
        <h2>Contact</h2>
        <form method= "post" action="http://localhost/iscc/ISCC-2020-J08/Exo_02/index.php?page=contact-form">
           <p> 
              <label for="Nom Prénom"> Nom/Prénom:</label> 
              <input type="text" name= "Nom Prénom" id="Nom Prénom" placeholder="Katy Perry" style="width: 250px;" style="height: 30px;"/>
            </p>
           <p> 
                <label for="Email"> Email:</label> 
               <input type="text" name= "Email" id="Email" placeholder="jijo.got@gmail.com" style="width: 250px;" style="height: 30px;"/>
            </p>
           <p>
            <label for="Message"> Votre message:</label>   
            <input type="text" name= "Message" id="Message" placeholder="Je vous remercie..." style="width: 250px;"/>
        </p>
            <input type="submit" value="Envoyer">
        </form>
        ?>
    </main>
</body>
</html>