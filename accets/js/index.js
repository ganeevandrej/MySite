const buttonMenu = document.querySelector("#buttonMenu");
const navbar = document.querySelector("#navbar");
const close = document.querySelector("#close");
const navigation = document.querySelector("#navigation");
const login = document.querySelector("#login");
const wraper = document.querySelector("#wraper");
const formLogin = document.querySelector("#form-login");

const openMenu = (e) => {
    e.preventDefault();
    navbar.classList.add("open");
    navigation.classList.add("open");
    close.classList.add("closes");
}

const openlogin = (e) => {
    console.log(formLogin);
    e.preventDefault();
    formLogin.classList.add("login");
    wraper.classList.add("login");
}

document.addEventListener("click", (e) => {
    const clickNavbar = e.composedPath().includes(navbar);
    const closes = e.composedPath().includes(close);
    const isWraper = e.composedPath().includes(wraper);
    console.log(isWraper);
    
    if(clickNavbar ||  closes) {
        navbar.classList.remove("open");
        navigation.classList.remove("open");
        close.classList.remove("closes");
    }
    if(isWraper) {
        formLogin.classList.remove("login");
        wraper.classList.remove("login");
    }
})

buttonMenu.addEventListener("click", openMenu);
login.addEventListener("click", openlogin);