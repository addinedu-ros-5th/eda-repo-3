<?php
// 데이터베이스 연결 설정
$servername = "database-1.c3ieyo8m4v9o.ap-northeast-2.rds.amazonaws.com";
$username = "eda_team";
$password = "123456";
$dbname = "eda_project";

// 사용자로부터 역 이름 받기
$station1 = $_GET['station1'];
$station2 = $_GET['station2'];

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

// 첫 번째 역의 가격 조회
$sql1 = "SELECT price FROM subway_price WHERE station = '$station1'";
$result1 = $conn->query($sql1);
$price1 = 0; // 기본값 0으로 설정
if ($result1->num_rows > 0) {
    $row = $result1->fetch_assoc();
    $price1 = $row["price"];
}

// 두 번째 역의 가격 조회
$sql2 = "SELECT price FROM subway_price WHERE station = '$station2'";
$result2 = $conn->query($sql2);
$price2 = 0; // 기본값 0으로 설정
if ($result2->num_rows > 0) {
    $row = $result2->fetch_assoc();
    $price2 = $row["price"];
}

// JSON 형식으로 출력
header('Content-Type: application/json');
echo json_encode(array('price1' => $price1, 'price2' => $price2));

// 데이터베이스 연결 종료
$conn->close();
?>
