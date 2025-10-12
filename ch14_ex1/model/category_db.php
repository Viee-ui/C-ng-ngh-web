<?php
class CategoryDB {
    public function getCategories() {
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  ORDER BY categoryID';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        $categories = [];
        foreach ($rows as $row) {
            $category = new Category(
                $row['categoryID'],
                $row['categoryName']
            );
            $categories[] = $category;
        }

        return $categories;
    }

    public function getCategory($category_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  WHERE categoryID = :category_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    

        if ($row) {
            $category = new Category(
                $row['categoryID'],
                $row['categoryName']
            );
            return $category;
        } else {
            return null;
        }
    }
}
?>
