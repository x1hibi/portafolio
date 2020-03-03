
//global constants

const d = document;

//constants to access to a css varibles

const root =d.querySelector(":root");
const rootStyle = getComputedStyle(root);

function navbarSticky(){
    let windowPosition = window.scrollY;
    let navbar = d.querySelector("#navbar");
    let banner = d.querySelector(".banner");
    let main = d.querySelector("main");
    let bannerBgColor=rootStyle.getPropertyValue("--bannerBackground");
    let bannerHeight= banner.offsetHeight;
    let navbarHeight= rootStyle.getPropertyValue("--navbarHeight");

    if (windowPosition > bannerHeight){
        main.style.marginTop=navbarHeight;
        navbar.style.position="fixed";
        navbar.style.top="0px";
        navbar.style.backgroundColor="darkblue";
    } else if (windowPosition <= bannerHeight){
        main.style.marginTop="";
        navbar.style.background="";
        navbar.style.position="";
        navbar.style.backgroundColor=bannerBgColor;
    }

}

//call the event 
window.addEventListener('scroll', navbarSticky);



