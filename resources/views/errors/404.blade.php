@include('blade-scafolding.partials.head')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page not found - 404</title>
</head>

<body>
<div class="text-center" style="font-family: 'Raleway', sans-serif;color: red;">
    <h1>
        @php
            echo "Sorry 🦧 The page you called is not there!";
        @endphp
    </h1>
</div>
</body>

</html>