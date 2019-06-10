<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $persona=[];
        $persona=[
            "Nombre" => "Jon",
            "Apellido" => "Snow",
            "Edad" => "27",
            "Hobbies" => ["Netflix","Fútbol","Programar"]
        ];

        $persona["Edad"]="25";
        
        $persona["Dirección"]="Winterfell";
        
        $persona["Hobbies"][]=["llorar"];
        
        var_dump($persona);

    ?>
</body>
</html>