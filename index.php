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


    function alumno_random(){
        $alumnos_random = shuffle($nombres);
        foreach ($alumnos_random as $alumno) {
        echo('<p>'.$alumnos_random[0].'va con'.$alumnos_random[-1].'</p>');
        array_shift($alumno_random);
        array_pop($alumno_random);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
</head>
<body>
    <h1>SIMPLEMENTE RANDOM</h1>
    <?php
    alumno_random();
    ?>
</body>
</html>