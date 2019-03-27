<?php
    // 取得網址列的參數
    $name=$_REQUEST["name"];
    echo $name;
    echo "'s demographics = ";

    if($name=="taipei"){
        echo "300M";    
    }else if ($name=="hsinchu"){
        echo "0.5M";
    }else{
        echo "No data";
    }

/*
提供的服務
http://localhost:8080/city.php?name=城市名稱
e.g.
http://localhost:8080/city.php?name=taipei
http://localhost:8080/city.php?name=hisnchu
http://localhost:8080/city.php?name=tainan
*/
?>

