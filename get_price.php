<?php
// 데이터베이스 연결 설정
$servername = "database-1.c3ieyo8m4v9o.ap-northeast-2.rds.amazonaws.com";
$username = "eda_team";
$password = "123456";
$dbname = "eda_project";

// 사용자로부터 역 이름 받기
$station = $_GET['station'];

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

// 데이터 조회 쿼리
$sql = "SELECT price FROM subway_price WHERE station = '$station'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 데이터가 존재하는 경우 JSON 형식으로 반환
    $row = $result->fetch_assoc();
    $price = $row["price"];
    
    // JSON 형식으로 출력
    header('Content-Type: application/json');
    echo json_encode(array('price' => $price));
} else {
    // 데이터가 존재하지 않는 경우 에러 메시지 반환
    echo json_encode(array('error' => 'No data found for the given station'));
}

// 데이터베이스 연결 종료
$conn->close();
?>
