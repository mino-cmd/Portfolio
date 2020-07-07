<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!--Bootstrap Framwork-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Body of portfolio-->
    <link href="{{asset('css/portfolioBody.css')}}" rel="stylesheet">
</head>

<body>
@include('blade-scafolding.partials.headOsteo')

<a href="/Osteopage" target="_blank" rel="noopener noreferrer">
    <button type="button" class="btn btn-default movetoOsteo">
        <!--GO TO THE WEBSITE OSTEOAI.COM-->
        <h1>Go to Osteo</h1>
        <!--GO TO THE WEBSITE OSTEOAI.COM-->
    </button>
</a>
</body>

</html>