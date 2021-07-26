<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php

$giornata = [
        [
            'casa' =>'Olimpia Milano',
            'ospite' =>'Virtus Bologna',
            'esito' => [15, 60]
        ],
        [
            'casa' =>'Varese',
            'ospite' =>'Pall. Cantù',
            'esito' => [20, 60]
        ],
        [
            'casa' =>'V.L. Pesaro',
            'ospite' =>'Reyer Venezia',
            'esito' => [45, 50]
        ],
        [
            'casa' =>'Fortitudo Bologna',
            'ospite' =>'Virtus Roma',
            'esito' => [20, 35]
        ],
        [
            'casa' =>'Mens Sana Siena',
            'ospite' =>' Treviso',
            'esito' => [16, 50]
        ],
        [
            'casa' =>'Treviso',
            'ospite' =>'Reggiana',
            'esito' => [20, 40]
        ],
    ]
    
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
    <div>
        <?php for ($i = 0; $i < count($giornata); $i++ ) {?> 
        
            <h3><?php echo $giornata[$i]['casa'] ?> - <?php echo $giornata[$i]['ospite']?> | <?php echo $giornata[$i]['esito'][0] ?> - <?php echo $giornata[$i]['esito'][1] ?></h3>
        
        
        <?php } ?> 
        <a href="http://localhost:8888/php-snacks-b1/">indietro</a>
    </div>
</body>
</html>