<?php

if (isset($_GET["submit"])) {
    echo 'You are welcome, ' . $_GET["username"] .
        '! Your password is ' . $_GET["userpass"] . '<br/>';
} else {
    echo 'No data were received!<br/>';
}
