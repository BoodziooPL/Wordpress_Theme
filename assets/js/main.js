const hamburgerBtn = document.querySelector('.toggle-button')
const navMenu = document.querySelector('.collapse')

const toggeNav = () => {
  navMenu.classList.toggle('collapseOpen')
}


hamburgerBtn.addEventListener('click', toggeNav)