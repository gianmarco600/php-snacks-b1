<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
$nome = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$access = [0,0,0];

if ( strlen($nome) > 3 ){
    $access[0]= 1;
}

if ( strpos($mail , '@') && strpos($mail , '.')){
    $access[1]= 1;
}

if ( is_numeric($age)){
    $access[2]= 1;
}

if ($access[0]= 1 && $access[1]= 1 && $access[2]= 1){
    $access = 'accesso riuscito';
}else{
    $access = 'accesso negato';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1><?php echo $access ?></h1>
    <h5>Ciao <?php echo $nome ?></h5>
    <a href="http://localhost:8888/php-snacks-b1/">indietro</a>
</head>
<body>
    
</body>
</html>