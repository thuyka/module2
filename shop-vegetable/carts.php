<?php
class db{
    public function connect()
    {
        $host_name = "localhost";
        $db_name = "vegetable";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$host_name;dbname=$db_name";
        
        try {
            $connect = new PDO($dsn,$username,$password);
            $connect->setAttribute(attribute:PDO::ATTR_ERRMODE, value:PDO::ERRMODE_EXCEPTION);
           // echo "ket noi thanh cong";
            return $connect;
    
        } catch (PDOException $e) {
            echo "ket noi that bai: " . $e->getMessage();
        }           
    }
}session_start();
//lấy session code
$code = $_SESSION['code'];
// echo $code;

$db = new db();
$connect = $db->connect();
//tính toán giá tiền nhân với số lượng
$sql = "SELECT cart.*,image , name ,(carts.price*carts.quantity) as total FROM `carts` JOIN products ON carts.product_id = products.id WHERE code = $code ";
// echo $sql;
// chữ as có nghĩa là quy định cột đó là cái gì!

$query = $connect->prepare($sql);
$query->execute();

// carts là một mảng trổng
$carts = array();

while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($carts, $result); //push vô mảng với nhiều đối tượng

}
// echo '<pre>';
// print_r($carts);
// die();
?>
<?php include '../layout/header.php' ?>
<br> <br> <br>
<!-- <h2 class="text-center">Hướng dẫn thiết giao diện trang giỏ hàng bằng Bootstrap</h2> -->
<h1 class="text-center">Giỏ hàng</h1>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:30%">Ảnh sản phẩm</th>
                <th style="width:20%">Tên sản phẩm</th>
                <th style="width:10%">Giá</th>
                <th style="width:8%">Số lượng</th>
                <th style="width:22%" class="text-center">Thành tiền</th>
                <th style="width:10%"> </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($carts as $key => $cart):
            ?>
                <tr>

                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img  src="../images/<?= $cart->image ?>" alt="Sản phẩm 1" class="img-responsive" width="100">
                            </div>
                            </td>
                            <td>
                            <div class="col-sm-10">
                                <h4 class="nomargin"><?= $cart->name ?></h4>
                                <!-- <p>Mô tả của sản phẩm 1</p> -->
                            </div>
                        </div>
                        </td>
                    <td data-th="Price"><?= number_format($cart->price ) ?></td>
                    <form action="update.php" method="POST">
                    <td data-th="Quantity"><input name="product_id[]" type="hidden" class="hidden" value="<?= $cart->product_id ?>">
                        <input name="quantity[]" class="form-control text-center" value="<?= $cart->quantity?>" type="number">
                    </td>
                    <td data-th="Subtotal" class="text-center"><?= number_format($cart->total ) ?></td>
                    <td class="actions" data-th="">
                        <!-- <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i> -->
                        </button>
                        <a href="delete.php?id=<?= $cart->id ?>"><i class="fa fa-trash-o btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"></i></a>
                       
                    </td>

                </tr>
            <?php endforeach; ?>
            <tr>

        </tbody>

        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Tổng 200.000 đ</strong>
                </td>
            </tr>
            <tr>
                <td><a href="../home/home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                <button  class="btn btn-danger" type="submit" >Cập Nhật</button>
                </td>
            </form>

                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
                </td>
                <td><a href="#" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<?php include '../layout/footer.php' ?>