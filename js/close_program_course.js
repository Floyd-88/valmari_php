document.addEventListener("click", (event) => {
    let elem = event.target.parentElement.nextElementSibling

    if(event.target.className === 'close_program') {
        event.target.classList.toggle('rotate_btn')
        elem.classList.toggle("content_none")
    } else if(event.target.className === 'close_program rotate_btn') {
        event.target.classList.toggle('rotate_btn')
        elem.classList.toggle("content_none")
    } 
})

console.log(222)