<?php include 'connectDB.php'; ?>

<?php

function diff2time($time_a, $time_b)
{
    $now_time1 = strtotime(date("Y-m-d " . $time_a));
    $now_time2 = strtotime(date("Y-m-d " . $time_b));
    $time_diff = abs($now_time2 - $now_time1);
    $time_diff_h = floor($time_diff / 3600); // จำนวนชั่วโมงที่ต่างกัน
    $time_diff_m = floor(($time_diff % 3600) / 60); // จำวนวนนาทีที่ต่างกัน
    $time_diff_s = ($time_diff % 3600) % 60; // จำนวนวินาทีที่ต่างกัน
    return $time_diff_h . ":" . $time_diff_m . ":" . $time_diff_s;
}

$userName =  $_POST['username'];
$setmMinutes = $_POST['setminutes'];
$timeNow = $_POST['timenow'];
$timeStart = $_POST['timestart'];
$timeEnd = $_POST['timeend'];
$timeCount = $_POST['timecount'];

// if(strtotime(date("Y-m-d " . $timeEnd)) - strtotime(date("Y-m-d " . $timeNow)) <= 0 ){
//     $timeSub = "00:00:00";
// }else{
//     $timeSub = diff2time($timeEnd,$timeNow);
// }

echo $timeEnd;


if (isset($userName)) {
    $sql = "INSERT INTO `user` (`id`, `name`, `time`, `time_add`, `time_final`, `time_countdown`) VALUES (NULL, '$userName', '$timeStart', '$setmMinutes', '$timeEnd', '$timeCount');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();


header("location: /phpcountdown/index.php");
exit(0);
?>

