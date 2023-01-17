let buttonNav = document.querySelector(".navbar-toggler");

buttonNav.addEventListener("click", function () {
    let sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("show");
});
