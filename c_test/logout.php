<?php
    setcookie('user_id', '', time() - 3600, '/');
    setcookie('user_pw', '', time() - 3600, '/');
?>
<meta http-equiv='refresh' content='0;url=main.php'>