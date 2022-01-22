const logo = document.querySelector(".enlace_nav");


logo.addEventListener("click", (e) => {
    e.preventDefault();
    logo.classList.add("rotacion_logo");
});

logo.addEventListener("animationend", (e) => {
    logo.classList.remove("rotacion_logo");
    window.location = "http://localhost:82/Proyectos/EjerciciosPHP/CRUD_PHP/main/index.php";
});