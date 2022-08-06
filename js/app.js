//for sidebar menu
const menuBtn = document.querySelector(".sidebar-menu")
const sidebar = document.querySelector(".sidebar")
const body = document.querySelector(".body")
menuBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open")
    body.classList.toggle("open")
})

// to confirm before delete
const deleteBtn = document.querySelectorAll('.delete_warn')
deleteBtn.forEach((button) => {
    button.addEventListener('click', (e) => {
        if (confirm("Are you sure to delete?")) {
            return true
        }
        else {
            e.preventDefault()
            return false
        }
    })
})