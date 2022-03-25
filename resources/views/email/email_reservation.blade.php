<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Reserva de hotel de mascotas</h2>
    <div>
        Nombre cliente: {{ $name_customer }}
    </div>
    <div>
        Nombre de la mascota: {{ $name_pet }}
    </div>
    <div>
        Fecha entrada: {{ $entry_date }}
    </div>
    <div>
        Fecha salida: {{ $release_date }}
    </div>
    <div>
        Movilidad: {{ $mobility }}
    </div>
</body>
</html>