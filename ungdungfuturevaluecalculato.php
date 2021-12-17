<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>
<body>
    <form action="" method="POST">
        Inventment Amount:<br> <input type="text" name="amount" value=""> <br>
        Yearly Interest Rate:<br> <input type="text" name="rate" value=""> <br>
        Number of Years:<br> <input type="text" name="year" value=""><br>
        <input type="submit" value="submit">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $rate = $_POST["rate"];
        $year = $_POST["year"];
    }
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    //Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
    $result=( $amount + ($amount * $rate)) * $year;
    echo "Giá trị tương lai là: ".$result;
    ?>
</body>
</html>


