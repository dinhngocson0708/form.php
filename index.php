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

    
    
</body>
</html>