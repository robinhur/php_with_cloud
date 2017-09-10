<?php
    if (isset($_POST['user_id']) && isset($_POST['user_pw'])) {
        echo 'ID : ';
        echo $_POST['user_id'];
        echo '</br>PW : ';
        echo $_POST['user_pw'];
    }