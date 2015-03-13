<?php
include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_GET, "price", FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_GET, "color", FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_GET, "size", FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_GET, "price", FILTER_SANITIZE_SPECIAL_CHARS);
$amount = filter_input(INPUT_GET, "amount", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();

foreach ($products as $product) {
    $name = $product["name"];
    $id = $product["id"];
    $color = $product["color"];
    $size = $product["size"];
    $price = $product["price"];
    $quantity = $product["quantity"];

    if ($quantity > 0) {
        echo "<tr>";
        echo "<form method='GET' action='addToCart.php'>";
        echo "<p>" . $name . " " . $price . "£" . "</p>";
        echo "<td>";
        echo "<input type='hidden' name='id' value='$id'";
        echo "</td>";
        echo "<td>";
        echo "<input type='hidden' name='name' value='$name'";
        echo "</td>";
        echo "<td>";
        echo "<input type='hidden' name='price' value='$price'";
        echo "</td>";
        $colors = explode(",", $color);

        echo "<select class='productsizebutton productbuttondesignPHP' type='text' name='color'>";
        foreach ($colors as $color) {
            echo "<option value='$color'>$color</option>";
        }
        echo "</select>";
        echo "<td>";
        $sizes = explode(",", $size);

        echo "<select class='productsizebutton productbuttondesignPHP' type='text' name='size'>";
        foreach ($sizes as $size) {
            echo "<option value='$size'>$size</option>";
        }
        echo "</select>";
        
        echo "<td>";
        echo "<input type='hidden' name='amount' value='1'>";
        echo "<td>";
        echo "<button class='addprodukt' type='submit' name='action' value='add'><p>Add to Cart</p></button>";
        echo "</form>";
        echo "</tr>";
    } else {
        $availability = "Out of stock";
        echo "<tr>";
        echo "<form method='GET' action='addToCart.php'>";
        echo "<p>" . $name . " " . $price . "£" . "</p>";
        echo "<td>";
        echo "<input type='hidden' name='id' value='$id'";
        echo "</td>";
        echo "<td>";
        echo "<input type='hidden' name='name' value='$name'";
        echo "<td>";
        $colors = explode(",", $color);

        echo "<select type='text' name='color'>";
        foreach ($colors as $color) {
            echo "<option value='$color'>$color</option>";
        }
        echo "</select>";

        echo "<td>";
        $sizes = explode(",", $size);

        echo "<select type='text' name='size'>";
        foreach ($sizes as $size) {
            echo "<option value='$size'>$size</option>";
        }
        echo "</select>";
        echo "<td>";
        echo "<input type='hidden' name='amount' value='1'>";
        echo "<td>";
        echo $availability;
        echo "</form>";
        echo "</tr>";
    }
}
?>