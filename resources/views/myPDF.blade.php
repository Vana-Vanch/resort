<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $resortName }}</title>
    <style>
        .container{
            max-width: 500px;
            height: 600px;
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
        <div class="container">
            <h1> {{ $resortName }} </h1>
            <h4>Name : {{ $name }}</h4>
            <h4>Date: {{ $date }}</h4>
            <p>Amount: &#8377 {{ $price }}</p>
        </div>
</body>
</html>