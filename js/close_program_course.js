let close = document.querySelector(".close_program");
let cont = document.querySelector("#cont");


document.addEventListener("click", (event) => {
    if(event.target.className === 'close_program') {
    cont.classList.toggle("content_none")
    }
})