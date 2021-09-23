const menubtn = document.querySelector('#MenuBtn');
const menuopen = document.querySelector('#js-menu_open');
const isOpen = document.querySelectorAll('.js-menu');
// function addClass() {
  menubtn.addEventListener('click',function(){
    for(i of isOpen){
      i.classList.toggle('js-is_open');
    }
  });
// };

  menuopen.addEventListener('click',function(){
    for(i of isOpen){
      i.classList.toggle('js-is_open');
    }
  });


// addClass();
// addClassOpen();