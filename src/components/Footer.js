//Handler for render footer

const Footer = element => {
  window.addEventListener("load", () => {
    element.innerHTML = `
      <footer class="container-lg mt-5 text-center">
        <p class="fw-bold">Developed by 
            <a class="text-decoration-none" href="https://github.com/or-abdillh">Oka R. Abdillah</a>    
             - made with <i class="fas fa-heart text-danger"></i> and a cup of <i class="fas fa-mug-hot"></i></p>
      </footer>
    `;
  });
}

export default Footer;