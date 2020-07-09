@include('blade-scafolding.partials.PHPArraysStyle')
<html>
<body>
<div class="toEdit">
    <?php
    $myArray = array();
    $myArray[] = "Creation is a sign of Existence";
    echo $myArray[0];
    ?>
</div>
</body>
</html>

