<!DOCTYPE html>
<meta charset="utf-8" />
<?php  
    if ( !isset($_COOKIE['user_id']) || !isset($_COOKIE['user_pw']) ) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
    }

    $user_id = $_COOKIE['user_id'];
    $user_pw = $_COOKIE['user_pw'];

    echo "<p>안녕하세요, $user_id 님</p>";
    echo "<p>당신의 비밀번호는 ";
    echo strlen($user_pw);
    echo "자리 입니다</p>";

    echo "<p><a href='logout.php'>로그아웃</a></p>";
?>