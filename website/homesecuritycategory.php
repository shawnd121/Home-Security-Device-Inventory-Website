<?php
/*  Shawn Daniel
    11/22/24
    IT202-003
    Phase 2 Assignment: CRUD Categories and Products
    sd2257@njit.edu
*/
require_once('database.php');

class HomeSecurityCategory
{
    public $categoryID;
    public $categoryCode;
    public $categoryName;
    public $aisleNumber;

    function __construct($categoryID, $categoryCode, $categoryName, $aisleNumber)
    {
        $this->categoryID = $categoryID;
        $this->categoryCode = $categoryCode;
        $this->categoryName = $categoryName;
        $this->aisleNumber = $aisleNumber;
    }

    function __toString()
    {
        $output = "<h2>Category ID: $this->categoryID</h2>\n" .
            "<h2>Code: $this->categoryCode, Name: $this->categoryName</h2>\n" .
            "<p>Aisle Number: $this->aisleNumber</p>\n";
        return $output;
    }

    function saveCategory()
    {
        $db = getDB();
        $query = "INSERT INTO HomeSecurityCategories (HomeSecurityCategoryID, HomeSecurityCategoryCode, HomeSecurityCategoryName, AisleNumber, DateCreated) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issi",
            $this->categoryID,
            $this->categoryCode,
            $this->categoryName,
            $this->aisleNumber
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getCategories()
    {
        $db = getDB();
        $query = "SELECT * FROM HomeSecurityCategories";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $categories = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $category = new HomeSecurityCategory(
                    $row['HomeSecurityCategoryID'],
                    $row['HomeSecurityCategoryCode'],
                    $row['HomeSecurityCategoryName'],
                    $row['AisleNumber']
                );
                array_push($categories, $category);
                unset($category);
            }
            $db->close();
            return $categories;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findCategory($categoryID)
    {
        $db = getDB();
        $query = "SELECT * FROM HomeSecurityCategories WHERE HomeSecurityCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $categoryID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $category = new HomeSecurityCategory(
                $row['HomeSecurityCategoryID'],
                $row['HomeSecurityCategoryCode'],
                $row['HomeSecurityCategoryName'],
                $row['AisleNumber']
            );
            $db->close();
            return $category;
        } else {
            $db->close();
            return NULL;
        }
    }

    function updateCategory()
    {
        $db = getDB();
        $query = "UPDATE HomeSecurityCategories SET HomeSecurityCategoryCode = ?, HomeSecurityCategoryName = ?, AisleNumber = ? WHERE HomeSecurityCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssii",
            $this->categoryCode,
            $this->categoryName,
            $this->aisleNumber,
            $this->categoryID
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    function removeCategory()
    {
        $db = getDB();
        $query = "DELETE FROM HomeSecurityCategories WHERE HomeSecurityCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->categoryID);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}
?>
