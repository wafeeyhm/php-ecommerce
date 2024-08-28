<section class="category-listing">
    <h2>Shop by Category</h2>
    <ul>
    <?php

        $query = "SELECT * FROM categories";
        $send_query = mysqli_query($connection, $query);

        if(!$send_query){
            die("Query failed" . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_array($send_query)) {
            # code...
            echo "<li><a href='category.php'>{$row['category_name']}</a></li>";
        }

    ?>
    </ul>
</section>