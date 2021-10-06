// Ambil semuanya
let tombol = document.querySelector("#admin-btn");
let side = document.querySelector(".sidebar");

//
tombol.onclick = function() {
    side.classList.toggle("hide");
}
