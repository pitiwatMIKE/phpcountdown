<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 align="center">Codvid-19</h1>
        <h1 align="center">Time CountDown</h1>
        <h2 align="center" id="demo"></h2>
        <h2 align="center" id="demo2"></h2>

        <div align="center" class="mt-5">
            <form action="insert.php" method="post" onsubmit="clickeven()">
                Name : <input type="text" name="username" required>
                เวลาฉีด : <input type="time" name="timestart" id="timestart" step="1" required>
                เวลาสังเกต : <input type="number" name="setminutes" id="setminutes" max="59" min="0" value="0" style="width: 2.5em;"> นาที
                <input type="hidden" name="timenow" id="timenow" value="0">
                <input type="hidden" name="timeend" id="timeend" value="0:0:0">
                <input type="hidden" name="timecount" id="timecount" value="0">
                <button type="submit" name="submit">บันทึกข้อมูล</button>
            </form>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                    <th scope="col">เวลาฉีด</th>
                    <th scope="col">สังเกต/นาที</th>
                    <th scope="col">เวลาครบกำหนด</th>
                    <th scope="col">เวลาคงเหลือ/นาที</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'showtable.php'; ?>
            </tbody>
        </table>
    </div>
    <script src="./setTime.js"></script>
    <script src="./condownTime.js"></script>
</body>

</html>