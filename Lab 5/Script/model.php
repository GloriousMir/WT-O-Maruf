<?php require("connect.php"); ?>

<?php 
function showAllProduct(){
	$conn = dbConnect();
    $selectQuery = 'SELECT * FROM `product` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function addProduct($data){
	$conn = dbConnect();
    $selectQuery = "INSERT INTO `product` VALUES (:sl, :name, :buying_price, :selling_price);";
    
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':sl' => $data['sl'],
        	':name' => $data['name'],
        	':buying_price' => $data['pd_buying_price'],
        	':selling_price' => $data['pd_selling_price']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = dbConnect();
    $selectQuery = "DELETE FROM `product` WHERE `SL` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function showProduct($id){
	$conn = dbConnect();
    $selectQuery = 'SELECT * FROM `product` WHERE `SL` = ?';
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function updateProduct($id, $data){
	$conn = dbConnect();
    $selectQuery = 'UPDATE `product` SET `Name`=:name,`buying_price`=:buying_price,`selling_price`=:selling_price WHERE `SL`= :sl';
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':sl' => $id,
        	':name' => $data['name'],
        	':buying_price' => $data['pd_buying_price'],
        	':selling_price' => $data['pd_selling_price']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function searchProduct($name){
    $conn = dbConnect();
    $selectQuery = "SELECT * FROM `product` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


?>