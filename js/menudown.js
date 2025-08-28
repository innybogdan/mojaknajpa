 // menu mobile and humburger
    const hamburger = document.querySelector(".hamburger");
    const mobileClose = document.querySelector(".close");
    const mobileMenuX = document.querySelector(".menu");

    hamburger.addEventListener("click", function () {
        hamburger.classList.add("deactive");
        mobileClose.classList.remove("deactive");
        mobileMenuX.classList.add("activeMenu");
    })

    mobileClose.addEventListener("click", function () {
        mobileClose.classList.add("deactive");
        hamburger.classList.remove("deactive");
        mobileMenuX.classList.remove("activeMenu");
    })