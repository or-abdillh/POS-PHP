//Client Side Rendering modules
import Navbar from "./components/Navbar.js";
import Jumbotron from "./components/Jumbotron.js";
import Footer from "./components/Footer.js";

//Element target
const el = {
  navbar: document.querySelector("[data-root=navbar]"),
  jumbotron: document.querySelector("[data-root=jumbotron]"),
  footer: document.querySelector("[data-root=footer]")
}

//Rendering
Navbar(el.navbar);

Jumbotron({
  element: el.jumbotron,
  title: 'Point Of Sale',
  sub: 'Website-based purchase transaction recording application using vanila JavaScript, native PHP 7, Bootstrap 5 and MySQL',
  btnText: 'Github',
  icon: 'fab fa-github',
  href: 'https://github.com/or-abdillh/POS-PHP'
});

Footer(el.footer);