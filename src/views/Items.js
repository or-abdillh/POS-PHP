//Handler for Transaction page

import Breadcumb from "../components/Breadcumb.js";
import Modal from "../components/Modal.js";

//Get element
const breadcumbEl = document.querySelector("[data-root=breadcumb]");
const modalEl = document.querySelector("[data-root=modal]");
const modalElUpdate = document.querySelector("[data-root=modal-update]");

//Render
Breadcumb(breadcumbEl, { home: "../../", current: "Items" });

//Modal new item
Modal(modalEl, {
    idModal: "modalNewItem",
    title: "Create new item",
    body: `
    <form id="newItem" action="../../src/server/setter/set_item.php" method="post">
        <div class="mb-3">
            <label for="idItem" class="form-label">ID Item</label>
            <input type="text" placeholder="ex: ITM001" name="idItem" class="form-control form-control-lg" id="idTransaction" aria-describedby="idTransactionHelp" required>
        </div>
        <div class="mb-3">
            <label for="nameItem" class="form-label">Name</label>
            <input type="text" placeholder="ex: Sunsilk for hijab" name="nameItem" class="form-control form-control-lg" id="idTransaction" aria-describedby="idTransactionHelp" required>
        </div>
        <label for="priceItem" class="form-label">Price</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Rp</span>
              <input type="text" placeholder="ex: 45.000" name="priceItem" class="form-control form-control-lg" id="amountOfItem" required>
          </div>
    </form>
    `,
    form: true,
    idForm: "newItem"
})

//Modal update
Modal(modalElUpdate, {
    idModal: "modalUpdate",
    title: "Update item",
    body: `
    <form id="updateItem" action="../../src/server/setter/update_item.php" method="post">
        <input type="hidden" value="" name="item_id" id="item_id" />
        <div class="mb-3">
            <label for="item_id_text" class="form-label">ID Item</label>
            <input value="" type="text" placeholder="ex: ITM001" name="item_id_text" class="form-control form-control-lg" id="idTransaction" aria-describedby="idTransactionHelp" required>
        </div>
        <div class="mb-3">
            <label for="item_name" class="form-label">Name</label>
            <input value="" type="text" placeholder="ex: Sunsilk for hijab" name="item_name" class="form-control form-control-lg" id="idTransaction" aria-describedby="idTransactionHelp" required>
        </div>
        <label for="item_price" class="form-label">Price</label>
          <div class="input-group mb-3">
              <span class="input-group-text">Rp</span>
              <input value="" type="text" placeholder="ex: 45.000" name="item_price" class="form-control form-control-lg" id="amountOfItem" required>
          </div>
    </form>
    `,
    form: true,
    idForm: "updateItem"
})

//Fill form update automatic
const triggers = document.querySelectorAll("[data-role=trigger]");

triggers.forEach( btn => {
    //Event click
    btn.addEventListener("click", e => {
        //Get form 
        const form = {
            itemId: document.querySelector("#updateItem #item_id"),
            itemIdTxt: document.querySelector("#updateItem [name=item_id_text]"),
            itemName: document.querySelector("#updateItem [name=item_name]"),
            itemPrice: document.querySelector("#updateItem [name=item_price]")
        }

        //Current dataset
        const data = btn.dataset;

        //Fill form
        form.itemName.value = data.itemName;
        form.itemPrice.value = data.itemPrice;
        form.itemIdTxt.value = data.itemIdText;
        form.itemId.value = data.itemId;
    })
});