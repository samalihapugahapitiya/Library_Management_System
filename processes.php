<?php
    include ('./db_connection.php');

    if(isset($_POST['b_name']) && isset($_POST['b_price']) && isset($_POST['b_author']) && isset($_POST['b_qty']) && isset($_POST['branch'])){
        $name = $_POST['b_name'];
        $price = $_POST['b_price'];
        $author = $_POST['b_author'];
        $qty = $_POST['b_qty'];
        $branch = $_POST['branch'];
    
        $query = "INSERT INTO book_details(b_name,b_price,b_author,b_image,b_branch,b_qyt) VALUES('$name',$price,'$author','./img/logo.jpg','$branch',$qty)";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "success";
        }else{
            echo "Can not insert data";
        }
    }
?>