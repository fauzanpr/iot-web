const currentRoute = location.pathname;
const modalAddValueHorizontal = document.getElementById(
    "modal-add-value-horizontal"
);

if (currentRoute === "/app/setup") {
    document.getElementById("page").innerHTML = "Setup Page";
    document.getElementById("nav-setup").style.backgroundColor = "black";
    document.getElementById("nav-setup").style.color = "white";
} else if (currentRoute === "/app/history") {
    document.getElementById("nav-history").style.backgroundColor = "black";
    document.getElementById("nav-history").style.color = "white";
    document.getElementById("page").innerHTML = "History Page";
}

function handleClickHorizontalButton() {
    if (modalAddValueHorizontal.classList.contains("hidden")) {
        modalAddValueHorizontal.classList.remove("hidden");
    } else {
        modalAddValueHorizontal.classList.add("hidden");
    }
}
