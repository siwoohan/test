<?php
foreach ($categories as $category) {
    echo "<a href='index.php?r=site/category&id=$category->id'>$category->name</a><br>";
}
