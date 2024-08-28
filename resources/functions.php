<?php

//helper function

function redirect($location){
    header("Location: " . $location);
}

function query($sql){

    global $connection;

    return mysqli_query($connection, $sql);

}

function confirm($result){

    global $connection;

    if(!$result){
        die("QUERY FAILED " . mysqli_error($connection));
    }

}

function escape_string($string){

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    
    return mysqli_fetch_array($result);
}

// get products

function get_products(){

    $query = query("SELECT * FROM products");

    confirm($query);

    while ($row = fetch_array($query)) {
        # code...
        $product = <<<DELIMETER

        <div class="product">
            <img src="{$row['image_url']}" alt="{$row['name']}">
            <h3>{$row['name']}</h3>
            <p>{$row['price']}</p>
            <a href="product-detail.php" class="btn">View Details</a>
            <a href="product-detail.php" class="btn">Add to cart</a>
        </div>

        DELIMETER;

        echo $product;
    }
}

?>