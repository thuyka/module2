<?php include_once('../layouts/header.php'); ?>
<?php
//ket noi db
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
}
//viet sql
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM categories";

//thuc thi sql
$query = $connect->prepare($sql);
$query->execute();
$categories = array();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    $categories[] = $result;
}
// echo "<pre>"; 
// print_r($categories);
// echo "</pre>";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center" style="color:blue">Categories List</h1>
            <a href="category-add.php" class="btn btn-success">Add Category</a>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table">
                        <thead>
                            <tr style="background-color:pink">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($categories as $category) :
                            ?>
                                <tr>
                                    <td><?= $category->id ?></td>
                                    <td><?= $category->name ?></td>
                                    <td>
                                        <a href="category-edit.php?id=<?= $category->id ?>" class="btn btn-primary">Edit</a>
                                        <a href="category-delete.php?id=<?= $category->id ?>" class="btn btn-danger" onclick="return confirm('really?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('../layouts/footer.php'); ?>