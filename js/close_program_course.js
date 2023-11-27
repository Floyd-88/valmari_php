// let close = document.querySelector(".close_program");
let cont = document.querySelector("#cont");


document.addEventListener("click", (event) => {
    console.log(event.target.className)
    if(event.target.className === 'close_program') {
        event.target.classList.toggle('rotate_btn')
        cont.classList.toggle("content_none")
    } else if(event.target.className === 'close_program rotate_btn') {
        event.target.classList.toggle('rotate_btn')
        cont.classList.toggle("content_none")
    } 
})