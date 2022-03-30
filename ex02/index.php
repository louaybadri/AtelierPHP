<?php

if (isset($_COOKIE["voted"]) && isset($_POST["submit"])) {
    $msg_error = "Vous avez déjà voté " . ucfirst($_COOKIE["voted"]);
    ?><div class="alert alert-danger" role="alert"><?=$msg_error?>
    </div>
    <?php
} elseif (isset($_POST["option"])) {
    setcookie("voted", $_POST["option"], time()+5);
}

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sondage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <form action="" method="post">
        <h4 class="fw-bold text-center mt-3">Comment evaluez-vous le cours de PHP jusqu'à maintenant?</h4>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="option" id="bon" value="bon" />
            <label class="form-check-label" for="bon">
                Bon
            </label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="option" id="moyen" value="moyen" />
            <label class="form-check-label" for="moyen">
                Moyen
            </label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="option" id="mauvais" value="mauvais" />
            <label class="form-check-label" for="mauvais">
                Mauvais
            </label>
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit">
    </form>
</div>

</body>

</html>