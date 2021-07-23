
<?php $paragrafo="E Brava Giulia e Brava Giulia!
    Prenditi la vita che Vuoi!
    Brava Giulia e Brava Giulia!
    Sceglitela! certo che Puoi!
    Brava Giulia e Brava Giulia!";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>

    <h5> <?php echo $paragrafo ?> </h5>
    
    <p> <?php echo "Lunghezza paragrafo incensurato: " . strlen($paragrafo); ?> </p>

    
    <?php $censurato = str_replace( $_GET['cancella'], '***', $paragrafo); ?>

    <h5> <?php echo $censurato ?> </h5>  
    
    <p> <?php echo "Lunghezza paragrafo censurato: " . strlen($censurato); ?> </p>


</body>
</html>





