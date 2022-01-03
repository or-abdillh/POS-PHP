//Client Side Rendering modules
import Navbar from "./components/Navbar.js";

//Element target
const el = {
  navbar: document.querySelector("[data-root=navbar]")
}

//Rendering
Navbar(el.navbar);