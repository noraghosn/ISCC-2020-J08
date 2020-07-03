<!DOCTYPE html>
<html>
    <meta charset= "utf-8">
<body>
<header>
    <?php include ("navigation.php"); ?>

        <h1> Summer Code Camp </h1>
</header>

<?php
        if ($_GET['page'] == 'accueil')
        {
            include ("vitrine-accueil.php");
        }
        elseif ($_GET['page']== 'programme')
        {
            include ("vitrine-programme.php");
        }
        elseif ($_GET['page']== 'contacts')
        {
            include ("vitrine-contacts.php");
        }
        else 
        {
            include ("404.php");
        }
    ?>

<footer>
    <div class="logo">
        <a href="http://www.epitech.eu" ><img src="logo_epitech.png"/></a>
    </div>
</footer>
</body>
</html>