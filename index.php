<?php
// dichiaro le variabili utilizzando $
$username = 'Giada';

$names = ['Giovanni', 'Marco', 'Luigi'];
var_dump($names);
echo $username;
// uso per stampare, nel php devo per forza mettere il punto e virgola alla fine
echo "Ciao";
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
    <h1>Hello World from PHP</h1>
    <!-- utilizzo echo per poter stampare le variabili che io ho definito all'inizio e posso utilizzare in tutta la pagina per poter stampare e visualizzare devo anche per forza inserire <?php ?> -->
    <h2>Ciao <?php echo $username ?></h2>
</body>
</html>