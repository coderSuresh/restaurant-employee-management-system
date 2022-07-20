//for sidebar menu
let menuBtn = document.querySelector(".sidebar-menu")
let sidebar = document.querySelector(".sidebar")
let body = document.querySelector(".body")
menuBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open")
    body.classList.toggle("open")
})
