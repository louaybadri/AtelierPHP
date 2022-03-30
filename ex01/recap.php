
<?php
$_POST["nom"] = htmlentities($_POST["nom"]);
$_POST["prenom"] = htmlentities($_POST["prenom"]);
$_POST["mail"] = htmlentities($_POST["mail"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Bonjour <?php echo $_POST["nom"].' '.$_POST["prenom"] ; ?></p>
<p> le prix d'un sandwitch est 4dt </p>
<p> vous avez recommendé <?php echo $_POST["number"] ?> sandwitchs de type <?php echo $_POST["typeSandwitch"] ?> et avec <?php echo $_POST["harissa"].' '.$_POST["salade"].' '.$_POST["mayo"] ?></p>
<?php
if ($_POST["number"]>10) {
    # code...
    ?> <p>vous avez 10% remise,le prix est <?php echo $_POST["number"]*0.9*4?> </p><?php
}else{
    ?> <p>Le prix est <?php echo $_POST["number"]*4 ?> dt </p><?php
}


?>


</body>
<?php
print_r($_FILES['cin']);
$target_dir = "imgs";
$name = uniqid(rand(), true) . '.png';
move_uploaded_file($_FILES["cin"]["tmp_name"], "$target_dir/$name");
//


?>

</html>


















