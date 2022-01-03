//Render card components

const Card = ( element, { title, subTitle, additionalText, bgHeader, icon, href }) => {
  window.addEventListener("load", () => {
    element.innerHTML = `
      <div class="card mb-5">
            <div class="card-header ${bgHeader} text-light">
                <i class="${icon}"></i>
                ${title}
            </div>
            <div class="card-body">
                <h5 class="card-title">${subTitle}</h5>
                <p class="card-text">${additionalText}</p>
                <a href="${href}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-right"></i>
                    Next
                </a>
            </div>
        </div>
    `;
  });
}

export default Card;