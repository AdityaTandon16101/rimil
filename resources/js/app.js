require('./bootstrap');

const HEADER = document.getElementById("header");

const scrollFunction = () => {
  let st = document.documentElement.scrollTop;

  if (st > 100) 
    HEADER.classList.add("scrolled");
  else
    HEADER.classList.remove("scrolled");
  // lastScrollTop = st <= 0 ? 0 : st;
}

window.addEventListener("scroll", scrollFunction, false);