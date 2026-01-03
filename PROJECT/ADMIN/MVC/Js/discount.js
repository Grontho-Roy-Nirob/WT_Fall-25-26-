const discountCard = document.getElementById("discount-card");

function goToDiscountPage() {
    window.location.href = "../php/discount.php";
}

discountCard.addEventListener("click", goToDiscountPage);
