<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=simple_ecommerce','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once('vendor/autoload.php');
// DAtabase connection
$id = $_GET['id'] ?? null;
if(!$id){
    header('location: deashBoard.php');
}

$statement = $pdo->prepare('SELECT * FROM deash_board WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);

foreach ($products as $i => $product)

$product_cate_name_id = $products ['category_name_id'];
$con = mysqli_connect('localhost','root','','simple_ecommerce');
if ($result = mysqli_query($con, "SELECT * FROM category WHERE id = '$product_cate_name_id'")) {
  while ($row = mysqli_fetch_assoc($result)) {
    $barName = $row['category_name'];
        $barId = $products['id'];
  }
}

// $age = "56";
$barcode = "ID=".$barId.", ".$barName;

$bar = new Picqer\Barcode\BarcodeGeneratorPNG();
// $code = $bar->getBarcode("Hello World", $bar::TYPE_CODE_128);
$code_01 = '<img src="data:image/png;base64,' . base64_encode($bar->getBarcode($barcode, $bar::TYPE_CODE_128)) . '">';


// echo $code;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTP-8">
        <title>Generate Bar Codes</title>
        <!-- CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    body
</style>
    </head>
    <body class="bg">
        <div class="container" >
            <br><br><br>
            <div>
                <div class="col-md-6 offset-md-3" style="background-color: white; padding:20px; box-shadow: 10px 10px 5px #888888;">
                    <div class="">
                        <h3>Generate Bar Codes In PHP</h3>
                    </div>
                    <hr>
                    <div style="color: red;">
                        <?php echo $code_01 ?>
                    </div>
                    <hr>
                    <div>
                        <a href="deashBoard.php">Back Deshboard</style=>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>