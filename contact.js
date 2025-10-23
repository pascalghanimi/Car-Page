const accordionHeaders = document.querySelectorAll("[data-header]");
const accordionBodys = document.querySelectorAll("[data-body]");

accordionHeaders.forEach(btn => {
    btn.addEventListener("click", () => {
        accordionBodys.forEach(body => {
            if (btn.dataset.header === body.dataset.body) {
                body.classList.toggle("active");
            }
        })
        
    })
})