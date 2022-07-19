<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Importation des icôns sur google fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
     <link rel="stylesheet" type="text/css" href="{{asset('styles/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('icomoon/style.css')}}">
    <link rel="shortcut icon" href="{{asset('images/elvin.PNG')}}" type="image/x-icon">
    <title>Mon Youtube Perso</title>
</head>

<body>

@yield('content')

        <script src="{{asset('main.js')}}"></script>
</body>

</html>