//for sidebar menu
const menuBtn = document.querySelector(".sidebar-menu")
const sidebar = document.querySelector(".sidebar")
const body = document.querySelector(".body")
menuBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open")
    body.classList.toggle("open")
})

// to confirm before delete
const deleteBtn = document.querySelector(".delete_warn")
deleteBtn.addEventListener("click", (e) => {
    if (!confirm("Are you sure to delete?")) {
        e.preventDefault()
        return false
    }
    else return true
})