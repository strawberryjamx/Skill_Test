<?php
function calculateDiscount($price, $discount) {
    // Check if the provided values are valid
    if (!is_numeric($price) || !is_numeric($discount)) {
        return "Both price and discount must be numeric values."; // Invalid values
    }

    if ($price < 0) {
        return "Price cannot be negative."; // Invalid values
    }

    if ($discount < 0 || $discount > 100) {
        return "Discount percentage must be between 0 and 100."; // Invalid values
    }

    // Calculate the discounted price
    $discountAmount = ($price * $discount) / 100;
    $finalPrice = $price - $discountAmount;

    return $finalPrice;
}

$originalPrice = 100; // Original price of the product
$discountPercentage = 20; // Discount percentage

$discountedPrice = calculateDiscount($originalPrice, $discountPercentage);

echo "Original Price: $" . $originalPrice . "\n";
echo "Discount Percentage: " . $discountPercentage . "%\n";
echo "Discounted Price: $" . $discountedPrice . "\n";
?>