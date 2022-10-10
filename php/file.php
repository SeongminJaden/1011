<?php
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
 
 
    $dstName= './excel/'.date('md').$srcName;
    
    move_uploaded_file($tmpName, $dstName);

?>
