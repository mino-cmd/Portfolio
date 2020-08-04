@include('blade-scafolding.partials.PHPArraysStyle')
<html lang="en">
<body>
<div class="toEdit">
    <?php
    $myArray = array();
    $myArray[] = "Creation is a sign of Existence";
    echo $myArray[0];
    ?>
    @include('blade-scafolding.partials.MyArrays.GreetUser')
</div>
</body>
</html>

