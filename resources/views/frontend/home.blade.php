<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- demo test --}}
@foreach ($product as $pro)
<h1>Product Name: {{ $pro->name }}</h1>
{{-- Add other product information as needed --}}
@endforeach

</body>
</html>