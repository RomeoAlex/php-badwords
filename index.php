<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$testo = 'sono un paragrafo php'
?>
<h1>Stampo il mio paragrafo in php</h1>
<p><?php echo $testo ?> </p>
<h1> Lalunghezza di questo paragrafo è di <?php $textmeasure = strlen($testo); echo $textmeasure ?></h1>

<h1>Inserisci parola da censurare nel links come params</h1>

<?php $word = $_GET['parola']; 

$censored = str_replace($word, '***', $testo );
?>
<h1> La parola non censurata è <?php echo $word ?></h1>
<h1> La parola censurata diventa : <?php echo $censored ?></h1>

</body>
</html>