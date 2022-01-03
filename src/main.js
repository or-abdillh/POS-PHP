//Client Side Rendering modules
import Navbar from "./js/Navbar.js";

//Element target
const el = {
  navbar: document.querySelector("[data-root=navbar]")
}

//Rendering
Navbar(el.navbar);