<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>SIMPLEMENTE RANDOM</h1>

    <?php
    $nombres = [
        'Jorge', 'Jaume',
        'Jose', 'Petro',
        'Julia', 'Alejandro',
        'Fran', 'Adri',
        'Lolo', 'Cristian',
        'David', 'Jordi',
        'Alexis', 'Luis',
        'Mateo', 'Toni'
    ];

   foreach($nombres AS $valor)
   {
       echo ' ' . $valor;
   };

   echo '<br>';

   $random1 = array_rand($nombres, 2);
   $random2 = array_rand($nombres, 2);

   echo $nombres[$random[1]] . ' con ' . $clase[$random2[2]];
?>
</body>
</html>