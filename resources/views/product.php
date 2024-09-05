<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Product</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <product-index></product-index>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>