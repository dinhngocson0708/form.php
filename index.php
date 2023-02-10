<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php
    ini_set('display_errors',0);
    $giatla = $_POST["check_giatla"];
    $ansang = $_POST["check_ansang"];
    $tamhoi = $_POST["check_tamhoi"];
    $meal_money = $_POST["eatmoney"];
    $type = $_POST["phong"];
    $check_in = strtotime( $_POST["check_in"]);
    $check_out = strtotime($_POST["check_out"]); 
    $date = abs($checkout- $checkin)  ;
    $ngaytra = floor($date / (60*60*24)) * $type;
    $service = $giatla + $ansang + $tamhoi;
    $tatol = $meal + $service + $type + $ngaytra

?>
    <center>
    <form action="index.php" method="post" class="form1">
        <table class="table">
            <tr class="tt">
                <td colspan="3"><span align="center">TÍNH TIỀN</span></td>
            </tr>
            <tr>
                <td><span>Loại phòng: </span></td>
                <label for="">
                <td>
                <select name="phong">
                        <option value="">Chọn phòng</option>
                        <option value="1000">Loại A</option>
                        <option value="800">Loại B</option>
                        <option value="500">Loại C</option>
                    </select> 
                </td>
                </label>
                 
            </tr>
            <tr> 
                <td><span>Check-in:</span></td>
                <label for="">
                 <td><input type="date" name="check_in" ></td>
                </label>
            </tr>
            
            <tr>
                <td><span>Check-out:</span></td>
                <label for="">
                 <td><input type="date" name="check_out" ></td>
                </label>
            </tr>

            <tr>
                <td><span>Tiền ăn:</span></td>
                <label for="">
                    <td><input type="number" name="eatmoney" ></td>
                </label>
            </tr>
            <tr>
                <td><span>Dịch vụ:</span></td>
                <label for="">
                <td> Giặt là <input type="checkbox" name="check_giatla" value="30000"> <br>
                    Ăn sáng <input type="checkbox" name="check_ansang" value="500"> <br>
                    Tắm hơi <input type="checkbox" name="check_tamhoi" value="300"></td>
                </td>
                </label>
                
            </tr>
        
            <tr>

                <td><button type="submit">Tính</button></td>
                <td><button type="cancle">cancle</button>
            </tr>
        </table>
       <br>

    </form>
    </center>
 
    <h2 class="bill">BILL</h2>
    <form class="input-bill" action="index.php" style="margin-left: 300px;" method="post">
        TypeRoom: <input type="text" value="<?php echo $type ?>"> <br> <br>
        Rental hours: <input type="text" value="<?php echo $ngaytra?>"> <br> <br>
        Money for meals: <input type="text" value="<?php echo $meal_money ?>"> <br> <br>
        Money for service: <input type="text" value="<?php echo $service ?>"> <br> <br>
        Total: <input type="text" value="<?php echo $tatol?>"> <br> <br>
    </form
    
</body>
</html>