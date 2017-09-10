<meta charset="utf-8" />
<?php
$member = array(
                'user1' => array('pw' => 'ppp1', 'name' => 'NO1'),
                'user2' => array('pw' => 'ppp2', 'name' => 'NO2'),
                'user3' => array('pw' => 'ppp3', 'name' => 'NO3')
            );

$user_id = $_GET['user_id'];
$user_pw = $_GET['user_pw'];


if (!isset($member[$_GET['user_id']])) {
    echo "<script>
            alert('아이디가 존재하지 않습니다');
            history.back();
            </script>
            ";
    exit;
}

if ($member[$user_id]['pw'] != $user_pw) {
    echo "<script>
            alert('비밀번호가 일치하지 않습니다');
            history.back();
            </script>
            ";
    exit;
}

setcookie('user_id', $user_id, time() + 600 , '/');
setcookie('user_pw', $user_pw, time() + 600 , '/' );

echo '쿠키 생성 완료';

?>