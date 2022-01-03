//Handler for render Breadcumb components

const Breadcumb = (element, { home, current }) => {
  window.addEventListener("load", () => {
    element.innerHTML = `
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="${home}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">${current}</li>
        </ol>
      </nav>
    `;
  });
}

export default Breadcumb;