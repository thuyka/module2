<?php
//ktra người dùng dã nhập vào hay chưa

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // ktra dữ liệu đã gửi lên đúng hay chưa.
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    //tạm dừng để chạy ktra.

    //khai báo biến
    $description = $_REQUEST["description"];
    $price       = $_REQUEST["price"];
    $percent     = $_REQUEST["percent"];

    //xử lý
    $disconunt_amount = $price * $percent * 0.01;
    switch ($description) {
        case "+":
            echo $description + $price;
            
        case "-" :
            echo $description - $price;
        case "*" :
            echo $description * $price;
            
        case "/" :
            echo $description / $price;
            
        default :
    }

    //xuất
    echo $discount_amount;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductDiscriptCalculator</title>
</head>
<body>
    <form action="display_discount.php" method="post">
        Product Description: Mô tả sản phẩm <br>
        <input type="text" name="description" value=""> <br>
        List Price: Giá niêm yết của sản phầm <br>
        <input type="number" name="price" value=""> <br>
        Discount Percent: Tỷ lệ chiết khấu (%) <br>
        <input type="text" name="percent" value=""> <br> <br>
        <input type="submit" name="submit" value="Calculator">

    </form>
</body>
</html>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input[name="number1"] {
        width: 300px;
        font-size: 16px;
        border: 10px solid #000000;
        border-radius: 5px;
        padding: 10px 10px 20px 10px;
    }
    input[name="number2"]{
        width: 300px;
        font-size: 16px;
        border: 10px solid #000000;
        border-radius: 5px;
        padding: 10px 10px 20px 10px;
    }
    </style>
</head>
<body>
    <h1> Simple Calculator </h1>
    <form  action="" method="POST">
      Số thứ nhất:  <input type="text" name="number1" placeholder="Nhập giá trị"> <br>
       Phép tính : <select  name="operator">
           <option>cộng</option>
            <option>trừ</option>
            <option>nhân</option>
            <option>chia</option>
        </select> <br>
      Số thứ hai: <input type="text" name="number2" placeholder="Nhập giá trị"> <br>
        <button type="submit" name="submit" value="submit"> Calculate</button>
    </form>
</body>
</html>

