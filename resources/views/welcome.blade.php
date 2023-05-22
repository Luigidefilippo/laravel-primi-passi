<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">




    </head>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background-color: black;
        }

        h1 {
            animation: colorChange 5s infinite;
        }

        @keyframes colorChange {
            0% { color: red; }
            25% { color: blue; }
            50% { color: green; }
            75% { color: purple; }
            100% { color: red; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>HELLO LAVAREL</h1>
    </div>
</body>
</html>
