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

    echo "<script>alert('重複です。');
    self.close();</script>";

} else {

    echo "<script>alert('ご利用可能です。');
    self.close();</script>";

}
