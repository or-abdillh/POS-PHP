//Handler for Transaction page

import Breadcumb from "../components/Breadcumb.js";

//Get element
const breadcumbEl = document.querySelector("[data-root=breadcumb]");

//Render
Breadcumb(breadcumbEl, { home: "../../", current: "History" });