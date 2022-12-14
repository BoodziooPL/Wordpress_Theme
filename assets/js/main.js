window.onload= function(){
  const hamburgerBtn = document.querySelector('.toggle-button');
const navMenu = document.querySelector('.collapse');

const toggeNav = () => {
  navMenu.classList.toggle('collapseOpen')
  console.log('dziala')
}


hamburgerBtn.addEventListener('click', toggeNav);
}
