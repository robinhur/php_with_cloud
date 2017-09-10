<!DOCTYPE html>
<meta charset="utf-8" />

<?php  
    if ( isset($_COOKIE['user_id']) && isset($_COOKIE['user_pw']) ) {
        echo "<meta http-equiv='refresh' content='0;url=main.php'>";
        exit;
    }
?>

<form method='get' action='login_ok.php'>
    <input type='text' name='user_id' />
    <input type='password' name='user_pw' />
    <input type='submit' value='로그인' />
</form>