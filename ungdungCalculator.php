
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <style>
    input[name="number1"] {
        width: 84px;
        font-size: 13px;
        border: 3px solid #000000;
        border-radius: 50px;
        padding: 10px 10px 10px 10px;
    }
    input[name="number2"]{
        width: 84px;
        font-size: 13px;
        border: 3px solid #000000;
        border-radius: 50px;
        padding: 10px 10px 10px 10px;
    }
    </style>
</head>
<body>

<h1> Simple Calculator </h1>

<form  action="" method="POST">
    Số thứ nhất:
    <input type="text" name="number1" placeholder="Nhập giá trị"> <br> <br>
    Phép tính : 
    <select  name="operator">
        <option>cộng</option>
        <option>trừ</option>
        <option>nhân</option>
        <option>chia</option>
    </select> <br> <br>
    Số thứ hai: 
    <input type="text" name="number2" placeholder="Nhập giá trị"> <br>
    <button type="submit" name="submit" value="submit"> Calculate</button> <br> <br>
kết quả: <input type="text" name="Kết quả">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $result1 = $_POST['number1'];
        $result2 = $_POST['number2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case "cộng":
                echo $result1 + $result2;
                break;
            case "trừ":
                echo $result1 - $result2;
                break;
            case "nhân":
                echo $result1 * $result2;
                break;
            case "chia":
                echo $result1 / $result2;
                break;
                default:
                echo "sai cú pháp";
        }
    }
?>   


</body>
</html>