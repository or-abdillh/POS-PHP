//Handler for render Jumbotron

const Jumbotron = ({  element, title, sub, btnText, icon, href }) => {
  window.addEventListener("load", () => {
    element.innerHTML = `
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bg-gradient">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">${title}</h1>
            <p class="lead fw-normal">${sub}</p>
            <a class="btn btn-outline-secondary" target="blank" href="${href}">
                <i class="${icon}"></i>
                ${btnText}
            </a>
        </div>
    </div>
    `;
  });
}

export default Jumbotron;