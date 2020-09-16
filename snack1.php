<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $data = [
        [
            'squadra' => 'Chicago Bulls',
            'squadraOspite' => 'Boston Celtics',
            'puntiSquadra' => '90',
            'puntiSquadraOspite' => '88'
        ],
        [
            'squadra' => 'Los Angeles Lakers',
            'squadraOspite' => 'Phoenix',
            'puntiSquadra' => '98',
            'puntiSquadraOspite' => '68'
        ],
        [
            'squadra' => 'Toronto Raptors',
            'squadraOspite' => 'Utah Jazz',
            'puntiSquadra' => '60',
            'puntiSquadraOspite' => '83'
        ],
        [
            'squadra' => 'Los Angeles Clippers',
            'squadraOspite' => 'Nets',
            'puntiSquadra' => '60',
            'puntiSquadraOspite' => '61'
        ]
    ];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Snack1</title>
     </head>
     <body>
        <?php
            for ($i = 0; $i < count($data); $i++) { ?>
                <p> <?php echo $data[$i]['squadra']. ' - '.$data[$i]['squadraOspite'].' | '.$data[$i]['puntiSquadra'].'-'.$data[$i]['puntiSquadraOspite']; ?></p>
        <?php } ?>

     </body>
 </html>
