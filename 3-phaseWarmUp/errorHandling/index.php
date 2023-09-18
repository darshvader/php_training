<?php
class InvalidInputException extends Exception {}

function calculateDiscount($purchaseAmount, $discountPercentage) {
    if ($purchaseAmount < 0) {
        throw new InvalidInputException("Purchase amount cannot be negative.");
    }

    if ($discountPercentage < 0 || $discountPercentage > 100) {
        throw new InvalidInputException("Discount percentage must be between 0 and 100.");
    }

    $discountAmount = $purchaseAmount * ($discountPercentage / 100);
    return $discountAmount;
}

try {
    $purchaseAmount = 100;
    $discountPercentage = 20;
    $discount = calculateDiscount($purchaseAmount, $discountPercentage);
    echo "Purchase Amount: $" . $purchaseAmount . "<br>";
    echo "Discount Percentage: " . $discountPercentage . "%<br>";
    echo "Discount Amount: $" . $discount . "<br>";
} catch (InvalidInputException $e) {
    echo "Error: " . $e->getMessage();
}
?>
