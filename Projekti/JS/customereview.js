 let slidesi = document.querySelectorAll('.slide-container');
 let index = 0;

 function next() {
     slidesi[index].classList.remove('active');
     index = (index + 1) % slidesi.length;
     slidesi[index].classList.add('active');
 }
 function prev() {
     slidesi[index].classList.remove('active');
     index = (index - 1 + slidesi.length) % slidesi.length;
     slidesi[index].classList.add('active');
 }