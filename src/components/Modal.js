//Handler for render modal component

const Modal = (element, { idModal, title, body, form = false, idForm = false }) => {

    window.addEventListener("load", () => {
        //Render
        element.innerHTML = `
        <div class="modal fade" id="${ idModal }" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="${ idModal }Label">${ title }</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ${ body }
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                ${
                  !form ? `<button type="button" class="btn btn-primary">Understood</button>` : `<input type="submit" class="btn btn-primary" form="${ idForm }" value="Submit" />`
                }
              </div>
            </div>
          </div>
        </div>
        `;
    })
}

export default Modal;