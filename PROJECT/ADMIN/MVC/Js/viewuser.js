const userCard = document.getElementById("user-card");

function goToUsersPage() {
    window.location.href = '../php/viewuser.php';
}

userCard.addEventListener('click', goToUsersPage);
