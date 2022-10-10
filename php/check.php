<?php

$servername = "localhost";
$username = "safework";
$password = "com47982@@";
$dbname = "safework";
$file=$_FILES['aaa'];
    // 대입된 $file은 파일의 여러정보를 가지기 위해 배열로 된 변수임
 
    // $file 배열 변수에서 원하는 값들 얻어오기
    $srcName= $file['name']; //원본의 파일명.확장자
    $fileTypr= $file['type']; //전송된 파일의 확장자 [MIME타입: image/png]
    $fileSize= $file['size']; //전송된 파일의 파일사이즈
    //업로드된 파일이 잠시 보관되는 임시저장소의 경로
    $tmpName= $file['tmp_name'];
 
    echo "$srcNme <br>";
    echo "$fileTypr <br>";
    echo "$fileSize <br>";
    echo "$tmpName <br>";
 
    Console_log('파일을 업로드 합니다.');
    $dstName= '../file/'.date('Ymd').$srcName;
    move_uploaded_file($tmpName, $dstName);
    Console_log('업로드 완료');
    Console_log($tmpName);  
    Console_log($dstName);   
    if ( $error > 0 ) {
        Console_log("Error: ");
        Console_log($error);
    }
// 접속 생성
$conn = new mysqli($servername, $username, $password, $dbname);
// 접속 체크
    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>"; }
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

    $date = $_POST["date"];
    $name = $_POST["name"];
    $Main_Category = $_POST["Main_Category"];
    $category=$_POST["category"];
    $writer = $_POST["writer"];
    $filepath = '../file/'.date('Ymd').$srcName;
    echo "추가할 파일 리스트는 {$date},{$name},{$category},{$writer}";
    mysqli_query($conn, "set session character_set_connection=utf8;");
    mysqli_query($conn, "set session character_set_results=utf8;");
    mysqli_query($conn, "set session character_set_client=utf8;");
    if($Main_Category == 'a'){
        $sql = "INSERT INTO A (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";        
    }
    else if($Main_Category == 'b'){
        $sql = "INSERT INTO B (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";          
    }
    else if($Main_Category == 'c'){
        $sql = "INSERT INTO C (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";         
    }
    else if($Main_Category == 'd'){
        $sql = "INSERT INTO D (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";     
    }
    else if($Main_Category == 'e'){
        $sql = "INSERT INTO E (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";         
    }
    else if($Main_Category == 'f'){
        $sql = "INSERT INTO F (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";         
    }
    else if($Main_Category == 'g'){
        $sql = "INSERT INTO G (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";         
    }
    else if($Main_Category == 'h'){
        $sql = "INSERT INTO H (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";         
    }
    else if($Main_Category == 'i'){
        $sql = "INSERT INTO I (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";          
    }
    else if($Main_Category == 'j'){
        $sql = "INSERT INTO J (date, name, category, writer, filepath) VALUES ('$date','$name','$category','$writer','$filepath')";        
    }
    if($conn->query($sql))echo"문서등록 성공";
    else echo "문서등록 실패";
    function Console_log($data){
        echo "<script>console.log( 'PHP_Console: " . $data . "' );
        </script>";
    }
    $testVal = "추가할 파일 리스트는 {$date},{$name},{$category},{$writer}";
    Console_log($testVal);
?>
    



<!-- 
     

   $conn = mysqli_connect("127.0.0.1", "root", "1234", "test_db");



   $select_query = "SELECT seq, name FROM test_table WHERE seq >= 3"; -> test_table 테이블 seq의 컬럼이 3인것만 카운트하라는 뜻

   $result_set = mysqli_query($conn, $select_query);



   $count = mysqli_num_rows($result_set);



   echo '$count : '.$count.'<br>';



   mysqli_close($conn);

    테이블 갯수 세는 함수
 -->