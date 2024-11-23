<?php
require_once('database.php');
class HomeSecurityProduct
{
    public $productID;
    public $productCode;
    public $productName;
    public $description;
    public $model;
    public $categoryID;
    public $wholesalePrice;
    public $listPrice;

    function __construct(
        $productID,
        $productCode,
        $productName,
        $description,
        $model,
        $categoryID,
        $wholesalePrice,
        $listPrice
    ) {
        $this->productID = $productID;
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->description = $description;
        $this->model = $model;
        $this->categoryID = $categoryID;
        $this->wholesalePrice = $wholesalePrice;
        $this->listPrice = $listPrice;
    }

    function __toString()
    {
        $output = "<h2>Product ID: $this->productID</h2>" .
                  "<h2>Code: $this->productCode</h2>" .
                  "<h2>Name: $this->productName</h2>" .
                  "<p>Description: $this->description</p>" .
                  "<p>Model: $this->model</p>" .
                  "<p>Category ID: $this->categoryID</p>" .
                  "<p>Wholesale Price: $this->wholesalePrice</p>" .
                  "<p>List Price: $this->listPrice</p>";
        return $output;
    }

    function saveProduct()
    {
        $db = getDB();
        $query = "INSERT INTO HomeSecurityProducts 
                  (HomeSecurityProductID, HomeSecurityProductCode, HomeSecurityProductName, HomeSecurityProductDescription, Model, HomeSecurityCategoryID, WholesalePrice, ListPrice, DateCreated) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issssidd",
            $this->productID,
            $this->productCode,
            $this->productName,
            $this->description,
            $this->model,
            $this->categoryID,
            $this->wholesalePrice,
            $this->listPrice
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getProducts()
    {
        $db = getDB();
        $query = "SELECT * FROM HomeSecurityProducts";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $products = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new HomeSecurityProduct(
                    $row['HomeSecurityProductID'],
                    $row['HomeSecurityProductCode'],
                    $row['HomeSecurityProductName'],
                    $row['HomeSecurityDescription'],
                    $row['HomeSecurityModel'],
                    $row['HomeSecurityCategoryID'],
                    $row['WholesalePrice'],
                    $row['ListPrice']
                );
                array_push($products, $product);
            }
            $db->close();
            return $products;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findProduct($productID)
    {
        $db = getDB();
        $query = "SELECT * FROM HomeSecurityProducts WHERE HomeSecurityProductID = $productID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $product = new HomeSecurityProduct(
                $row['HomeSecurityProductID'],
                $row['HomeSecurityProductCode'],
                $row['HomeSecurityProductName'],
                $row['HomeSecurityProductDescription'],
                $row['Model'],
                $row['HomeSecurityCategoryID'],
                $row['WholesalePrice'],
                $row['ListPrice']
            );
            $db->close();
            return $product;
        } else {
            $db->close();
            return NULL;
        }
    }

    function updateProduct()
    {
        $db = getDB();
        $query = "UPDATE HomeSecurityProducts SET 
                  HomeSecurityProductCode = ?, HomeSecurityProductName = ?, HomeSecurityProductDescription = ?, 
                  Model = ?, HomeSecurityCategoryID = ?, WholesalePrice = ?, ListPrice = ? 
                  WHERE HomeSecurityProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssssiddi",
            $this->productCode,
            $this->productName,
            $this->description,
            $this->model,
            $this->categoryID,
            $this->wholesalePrice,
            $this->listPrice,
            $this->productID
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    function removeProduct()
    {
        $db = getDB();
        $query = "DELETE FROM HomeSecurityProducts WHERE HomeSecurityProductID = $this->productID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
?>
