<div style="color: white;" class="text-left">
    <?php
    date_default_timezone_set("Europe/Berlin");
    $_Datetime = date("H");
    if ($_Datetime < 5 || $_Datetime > 20) {
        $_greet = "Good Night 🌑";
    } elseif ($_Datetime < 12) {
        $_greet = "Good Morning 🌞";
    } elseif ($_Datetime < 16) {
        $_greet = "Good Afternoon 🌆";
    } elseif ($_Datetime < 19) {
        $_greet = "Good Evening 🌅";
    } else {
        $_greet = "Good Night 🌃";
    }
    ?>
    <?php
    echo $_greet;
    ?>
</div>