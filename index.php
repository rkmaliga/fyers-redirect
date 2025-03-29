<?php
if (isset($_GET['code']) && isset($_GET['state'])) {
    $code = $_GET['code'];
    $state = $_GET['state'];

    echo "Code: $code<br>";
    echo "State: $state<br>";
} else {
    echo "Invalid Request";
}
?>
