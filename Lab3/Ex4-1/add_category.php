<?php
require_once('database.php');

// Get the category data
$category_name = filter_input(INPUT_POST, 'category_name');

// Validate input
if ($category_name == null || $category_name == false) {
    $error = "Invalid category name. Check the field and try again.";
    include('error.php');
} else {
    // Add the category to the database
    $query = 'INSERT INTO categories (categoryName)
              VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $category_name);
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('category_list.php');
}
?>