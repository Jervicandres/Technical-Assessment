const hamburger = document.querySelector(".hamburger");

hamburger.onclick = () => {
    const navBar = document.querySelector(".nav-bar");
    navBar.classList.toggle('active');
}

