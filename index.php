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
    <form action="tinhTien.php" method="post" class="form1">
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
                        <option value="A">Loại A</option>
                        <option value="B">Loại B</option>
                        <option value="C">Loại C</option>
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
                <td> Giặt là <input type="checkbox" name="check_html" value="HTML"> <br>
                    Ăn sáng <input type="checkbox" name="check_css" value="CSS"> <br>
                    Tắm hơi <input type="checkbox" name="check_css" value="CSS"></td>
                </td>
                </label>
                
            </tr>
        
            <tr>

                <td><input type="submit"></td>
                <td><button>cancle</button>
            </tr>
        </table>
       <br>
        
       
    </form>
    </center>
    
</body>
</html>