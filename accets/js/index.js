const buttonMenu = document.querySelector("#buttonMenu");
const navbar = document.querySelector("#navbar");
const close = document.querySelector("#close");
const navigation = document.querySelector("#navigation");
const login = document.querySelector("#login");
const wraper = document.querySelector("#wraper");
const formLogin = document.querySelector("#form-login");
const Search = document.querySelector("#Search");
const formSearch = document.querySelector("#search-input");
const logo = document.querySelector("#header-logo");

console.log(logo);

const openMenu = (e) => {
    e.preventDefault();
    navbar.classList.add("open");
    navigation.classList.add("open");
    close.classList.add("closes");
}

const openSearch = (e) => {
    e.preventDefault();
    if(Search.classList.toggle("openSearch")) {
        formSearch.classList.add("openSearch");
        logo.style.display = 'none';
    }
    else {
        formSearch.classList.remove("openSearch");
        logo.style.display = '';
    }
}

const openLogin = (e) => {
    e.preventDefault();
    formLogin.classList.add("login");
    wraper.classList.add("login");
}

document.addEventListener("click", (e) => {
    const clickNavbar = e.composedPath().includes(navbar);
    const closes = e.composedPath().includes(close);
    const isWraper = e.composedPath().includes(wraper);
    
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
login.addEventListener("click", openLogin);
Search.addEventListener("click", openSearch);