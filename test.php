<?php
$servername = "localhost";//mysql的服务器路径
$username = "root";//mysql名称
$password = "123456";//mysql密码
$dbname = "wish_list";//数据库名称

class User
{
   public $id;
   public $title;
   public $time;
}
$data = array();
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT id, title, time FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
    $user = new User();
        $user->id = $row["id"];
        $user->title = $row["title"];
        $user->time = $row["time"];
        $data[] = $user;

    }
     echo json_encode($data);
} else {
    echo "0 结果";
}
$conn->close();
?>