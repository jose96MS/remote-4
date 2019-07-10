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

    $alumnos2 = [];

    function alumno_random($nombres){

        shuffle($nombres);

        foreach ($nombres as $alumno) {
       echo( $alumno .' va con ' );

       array_push($alumnos2 , $alumno);
        
        }

        foreach ($alumnos2 as $alumno) {
            echo( $alumno );
     
             
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
    alumno_random($nombres);
    ?>
</body>
</html>