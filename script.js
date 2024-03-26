let value = document.getElementById("variable").value;

function openPopUp() {
    document.getElementById("PopUp" + value).style.display = "block";
}

function closePopUp() {
    document.getElementById("PopUp" + value).style.display = "none";
}