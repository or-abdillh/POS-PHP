//Handler for render content just for Home 
import Card from "../components/Card.js";

//Get elements
const cardsEl = document.querySelectorAll("[data-root=card]");

//Render
Card(cardsEl[0], {
    title: "New transaction",
    subTitle: "Create new transaction from order",
    additionalText: "You can create new transaction here",
    bgHeader: "bg-primary bg-gradient",
    icon: "fas fa-cart-plus",
    href: "./src/pages/transaction"
});

Card(cardsEl[1], {
    title: "History",
    subTitle: "See all history transaction",
    additionalText: "You can see all history transaction here",
    bgHeader: "bg-success bg-gradient",
    icon: "fas fa-history",
    href: ""
});

Card(cardsEl[2], {
    title: "Manage items",
    subTitle: "Manage all your items",
    additionalText: "You can manage your items here",
    bgHeader: "bg-dark bg-gradient",
    icon: "fa fa-tasks",
    href: ""
});