
<?php
include "./main_DB.php";
ini_set('display_errors', '0');

$check = $_GET['userid'];

$sql = "SELECT * FROM s_sign where s_name = '$check'";
$result2 = mysqli_query($db_server, $sql);


while ($member = $result2->fetch_array()) {
    $m_id = $member['s_name'];
}


if ($m_id == $check) {

    echo "<script>alert('아이디 중복');
    self.close();</script>";

} else {

    echo "<script>alert('사용 가능합니다');
    self.close();</script>";

}
