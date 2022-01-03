//Script for render Navbar component

const Navbar = element => {
  //Get root directory
  const img = "https://dl.dropbox.com/s/63nt24eo180dn8k/logo.png?dl=2";
  
  window.addEventListener("load", () => {
    element.innerHTML = `
      <nav class="navbar navbar-light bg-primary">
          <div class="container-fluid d-flex justify-content-center">
              <img src="${img}" alt="${img}" width="150" class="d-inline-block align-text-top">
          </div>
      </nav>
    `;
  });
}

export default Navbar;