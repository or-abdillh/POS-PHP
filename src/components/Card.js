//Render card components

const Card = ( element, { title, subTitle, additionalText, bgHeader, icon, href, badge = false, count = 0 }) => {
  
  //Generate badge element
  let badgeEl = '';
  if ( badge ) {
    badgeEl = `
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
        ${count}
        <span class="visually-hidden">Count</span>
      </span>
    `;
  }
  
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
              <a href="${href}" class="btn btn-outline-secondary position-relative">
                  <i class="fas fa-arrow-right"></i>
                  Next
                  ${badgeEl}
              </a>
          </div>
      </div>
    `;
  });
}

export default Card;