const currentPage = window.location.pathname + window.location.hash;

const navLinks = document.querySelectorAll(".navbar-collapse a");

if (currentPage != "/") {
    navLinks.forEach((link) => {
        if (link.href.includes(`${currentPage}`)) {
            link.classList.add("fw-bold");
        }
    });
}
