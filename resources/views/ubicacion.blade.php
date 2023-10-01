<!DOCTYPE html>
<html>
<head>
    <title>Ubicación Actual</title>
</head>
<body>
    <h1>Ubicación Actual</h1>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Ubicación Actual</title>
        @if(isset($data['country_name']))
            <p>País: {{ $data['country_name'] }}</p>
        @endif
    
        @if(isset($data['region_name']))
            <p>Región: {{ $data['region_name'] }}</p>
        @endif
    
        @if(isset($data['city']))
            <p>Ciudad: {{ $data['city'] }}</p>
        @endif
        <!-- Agrega más detalles según lo que proporciona la API de ipstack -->

    
</body>
</html>
