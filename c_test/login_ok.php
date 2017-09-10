<?php
    if (isset($_GET['user_id']) && isset($_GET['user_pw'])) {
        echo 'ID : ';
        echo $_GET['user_id'];
        echo '</br>PW : ';
        echo $_GET['user_pw'];
    }