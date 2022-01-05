//Handler for Transaction page

import Breadcumb from "../components/Breadcumb.js";
import Modal from "../components/Modal.js";

//Get element
const breadcumbEl = document.querySelector("[data-root=breadcumb]");
const modalEl = document.querySelector("[data-root=modal]");

//console.log(Modal)

//Render
Breadcumb(breadcumbEl, { home: "../../../", current: "Items" });

//Create body form
const body = `
    <form id="newItem" action="../../server/setter/set_item.php" method="post">
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
`;

Modal(modalEl, {
    idModal: "modalNewItem",
    title: "Create new item",
    body,
    form: true,
    idForm: "newItem"
})