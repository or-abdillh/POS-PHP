//Handler for Transaction page

import Breadcumb from "../components/Breadcumb.js";

//Get element
const breadcumbEl = document.querySelector("[data-root=breadcumb]");

//Render
Breadcumb(breadcumbEl, { home: "../../", current: "Transaction" });

//Autofill form
const selectItemsEl = document.querySelector("[data-role=select-items]");

//Get input element
const itemIdEl = document.querySelector("[name=itemId]");
const pricePerUnitEl = document.querySelector("[name=pricePerUnit]");
const amountOfItemEl = document.querySelector("[name=amountOfItem]");
const totalEl = document.querySelector("[name=total]");
const cashEl = document.querySelector("[name=cash]");
const moneyChangesEl = document.querySelector("[name=moneyChanges]");

//Event handler if selectItems has change
selectItemsEl.addEventListener("change", e => {
//Parsing data value
  const value = e.target.value.split("@");
  const itemId = value[0];
  const itemName = value[1];
  const pricePerUnit = value[2];
  
  //Autofill action
  itemIdEl.value = itemId;
  pricePerUnitEl.value = pricePerUnit;
  amountOfItemEl.value = 1;
  totalEl.value = pricePerUnit;
  cashEl.value = 0;
  moneyChangesEl.value = 0;
});

//event handler if amountOfItemEl has change
amountOfItemEl.addEventListener("change", e => {
  //Get current pricePerUnit
  const pricePerUnit = parseInt(pricePerUnitEl.value.replace(".", ""));
  
  //Get current amount
  const currentInput = parseInt(e.target.value);
  
  //Autofill total
  totalEl.value = ( pricePerUnit * currentInput ).toLocaleString("id");
  
  //Reset
  cashEl.value = 0;
  moneyChangesEl.value = 0;
});

//Event handler if cash
cashEl.addEventListener("change", e => {
  //Get current input
  const currentInput = parseInt(e.target.value.replace(".", ""));
  
  //Auto fill moneyChangesEl
  moneyChangesEl.value = ( currentInput - parseInt(totalEl.value.replace(".", "")) ).toLocaleString("id");
  
});
