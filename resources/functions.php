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

/***************************** FRONT END FUNCTIONS ********************************/

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
            <p>&#36;{$row['price']}</p>
            <a href="item.php?id={$row['id']}" class="btn">View Details</a>
            <a href="cart.php" class="btn">Add to cart</a>
        </div>

        DELIMETER;

        echo $product;
    }
}

// get categories

function get_categories(){

    $query = query("SELECT * FROM categories");

    confirm($query);

    while ($row = fetch_array($query)) {
        # code...
        $categories = <<<DELIMETER

        <a href="category.php?id={$row['id']}"><li>{$row['name']}</li></a>

        DELIMETER;

        echo $categories;
    }

}

/***************************** FRONT END FUNCTIONS ********************************/

/***************************** BACK END FUNCTIONS ********************************/

/***************************** BACK END FUNCTIONS ********************************/

?>