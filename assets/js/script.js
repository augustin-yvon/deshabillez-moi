'use strict';

// modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
//modalCloseOverlay.addEventListener('click', modalCloseFunc);
//modalCloseBtn.addEventListener('click', modalCloseFunc);





// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

// notification toast eventListener
//toastCloseBtn.addEventListener('click', function () {
// notificationToast.classList.add('closed');
//});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}






// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}




//AFFICHER LES ELEMENTS
const HEADERMAIN = document.querySelector('.header-main');
const PRODUCTCONTAINER = document.querySelector('.product-container');
const CONTAINERPROFIL = document.querySelector('.container-profil');
const PROFILDRESSING = document.querySelector('.profil-main');
const ACTIONBTN = document.querySelectorAll('.mobile-bottom-navigation .action-btn');

for (let i = 0; i < ACTIONBTN.length; i++) {
  ACTIONBTN[i].addEventListener('click', function () {


    // Afficher les éléments en fonction de la position du bouton cliqué
    if (i == 0) {
      HEADERMAIN.style.display = 'block';
      PRODUCTCONTAINER.style.display = 'block';
      CONTAINERPROFIL.style.display = 'none';
      PROFILDRESSING.style.display = 'none';
    }

    if (i == 1) {
      HEADERMAIN.style.display = 'block';
      PRODUCTCONTAINER.style.display = 'none';
      CONTAINERPROFIL.style.display = 'none';
      PROFILDRESSING.style.display = 'none';
      console.log('rechercher')

    }
    if (i == 2) {
      HEADERMAIN.style.display = 'none';
      PRODUCTCONTAINER.style.display = 'none';
      CONTAINERPROFIL.style.display = 'none';
      PROFILDRESSING.style.display = 'none';
    }

    if (i == 3) {
      HEADERMAIN.style.display = 'none';
      PRODUCTCONTAINER.style.display = 'none';
      CONTAINERPROFIL.style.display = 'nonr';
      PROFILDRESSING.style.display = 'none';
    }
    if (i == 4) {
      HEADERMAIN.style.display = 'none';
      PRODUCTCONTAINER.style.display = 'none';
      CONTAINERPROFIL.style.display = 'block';
      PROFILDRESSING.style.display = 'block';





    }


    console.log('Button clicked at position:', i + 1);
  });
}