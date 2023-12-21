import "./bootstrap";

document.getElementById("toggle").addEventListener("click", function () {
    const dropdownBox = document.getElementById("dropdown-box");
    dropdownBox.classList.add("flex");
    dropdownBox.classList.toggle("hidden");
});
