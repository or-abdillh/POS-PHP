//Client Side Rendering modules
import Navbar from "./components/Navbar.js";
import Jumbotron from "./components/Jumbotron.js";

//Element target
const el = {
  navbar: document.querySelector("[data-root=navbar]"),
  jumbotron: document.querySelector("[data-root=jumbotron]")
}

//Rendering
Navbar(el.navbar);

Jumbotron({
  element: el.jumbotron,
  title: 'Point Of Sale',
  sub: 'Website-based purchase transaction recording application using native PHP, Bootstrap 5 and MySQL',
  btnText: 'Contact Developer',
  icon: 'fab fa-github',
  href: 'https://github.com/or-abdillh'
})