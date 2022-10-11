<style>
ul {
  list-style-type: none;
  margin: -8;
  padding: 0;
  overflow: hidden;
  background-color: #333;^
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>





<ul>
    <li><a href="?message=Salut&qui=Bonjour à tous">En Français</a></li>
    <li><a href="?message=Hi&qui=Hi world">En Anglais</a></li>
</ul>


<?php 
    $message=$_GET['message']??'';
    $qui=$_GET['qui']??'';
    $color=$_GET['color']??"black";
    $bgcolor=$_GET['bgcolor']??"white";
?>


<br>
<form method="get" action="hello.php">
    <input type="text" name="message" value="<?=$message?>" placeholder="Saisir un titre">
    <input type="text" name="qui" value="<?=$qui?>" placeholder="Saisir un paragraphe"><br><br>
    <fieldset>
        <legend> Styles :</legend>
        <input type="color" name="color" value="<?=$color?>">
        <input type="color" name="bgcolor" value="<?=$bgcolor?>">
    </fieldset><br>
    <button type="submit">Valider</button>
</form>


<h1><b><?=$message?></b></h1>
<p style="color:<?=$color?>; background-color:<?=$bgcolor?>;"><b><?=$qui?></b></p>

