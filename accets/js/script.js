const buttonMenu = document.querySelector("#buttonMenu");
const navbar = document.querySelector("#navbar");
const close = document.querySelector("#close");
const navigation = document.querySelector("#navigation");

console.log(navigation);

const openMenu = (e) => {
    e.preventDefault();
    navbar.classList.add("open");
    navigation.classList.add("open");
    close.classList.add("closes");
}

document.addEventListener("click", (e) => {
    const clickNavbar = e.composedPath().includes(navbar);
    const closes = e.composedPath().includes(close);
    if(clickNavbar ||  closes) {
        navbar.classList.remove("open");
        navigation.classList.remove("open");
        close.classList.remove("closes");
    }
})

buttonMenu.addEventListener("click", openMenu);