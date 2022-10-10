<?php
$servername = "localhost";
$username = "safework";
$password = "com47982@@";
$dbname = "safework";

// 접속 생성
$conn = new mysqli($servername, $username, $password, $dbname);
// 접속 체크
    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>"; }
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
    
    /* SELECT 예제 */
    INSERT INTO list (date, name, cat, title, accept) values (1, 2, 3, 4, 5);
    
    mysqli_close($conn);
?>
