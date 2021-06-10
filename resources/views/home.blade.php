<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>VACANZA</h1>
    @foreach ($travels as $travel)
        <ul>
            <li>Luogo: {{$travel->luogo}}</li>
            <li>durata: {{$travel->durata}} giorni</li>
            <li>numero persone: {{$travel->numero_persone}}</li>
            <li>prezzo: {{$travel->prezzo}}</li>
            <li>data inizio: {{$travel->data_inizio}}</li>
            <li>data fine: {{$travel->fine}}</li>
        </ul>
    @endforeach
    
</body>
</html>