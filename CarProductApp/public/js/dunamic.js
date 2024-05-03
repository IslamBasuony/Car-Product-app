// dropdown
// const dropdownBtn = document.querySelector('.services')
// const dropdown = document.querySelector('.dropdown')


// dropdownBtn.addEventListener('click' , ()=>{
//   console.log(dropdownBtn);
//   dropdown.classList.toggle('block')
// })

 // carosel

const slider = document.querySelector('.gallary');
let isDown = false;
let startX;
let scrollLeft;


if (slider) {
    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const SCROLL_SPEED = 3;
      const walk = (x - startX) * SCROLL_SPEED;
      slider.scrollLeft = scrollLeft - walk;
    });
}

// Dark Mood
// const btnSwitch = document.querySelector("#switch");

// const currentTheme = getTheme() || 'light';
// // 
// // console.log(currentTheme);

// setMode(currentTheme)

// function setTheme(theme) {
//   window.localStorage.setItem('theme' , theme)
// }
// setTheme();

// function setMode(theme) {
//   const bodyEle = window.document.body;
  
//   bodyEle.setAttribute('data-theme', theme);
//   // console.log(bodyEle);
//   if (theme === 'dark') {
//     btnSwitch.checked = true;
//     console.log(true);
//     btnSwitch.classList.add('active')
//     const numberOfStars = 75000;

//         const createStar = () => {
//             const star = document.createElement("div");
//             star.className = "stars";
//             const duration = Math.random() * 5 + 1;
//             star.style.left = `${Math.random() * window.innerWidth}rem`;
//             star.style.top = `${Math.random() * window.innerHeight}rem`;
//             star.style.animationDuration = `${duration}s, ${duration}s`;
//             star.style.animationDelay = `-${Math.random() * duration}s`;
//             return star;
//         };

//         const starsContainer = document.querySelector(".stars-container");

//         for (let i = 0; i < numberOfStars; i++) {
//             starsContainer.appendChild(createStar());
//         }
//   } else{
//     btnSwitch.checked = false;
//     btnSwitch.classList.remove('active')
//     // console.log(false);
//     theme === 'light'
//   }
  
  
// }

// function getTheme() {
//   return window.localStorage.getItem('theme')
// }



// btnSwitch.addEventListener('click' , ()=>{
//   const theme = btnSwitch.checked ? 'light' :'dark' ;
//   setTheme(theme);
//   setMode(theme);
//   console.log(theme);
//   btnSwitch.classList.toggle('active')
// })






// tabs 
function showTab(tabName) {
  var tabs = document.querySelectorAll('.logos ul li');
  tabs.forEach(function(tab) {
      tab.classList.remove('show');
  });

  var show = document.getElementById(tabName);
  toggleClass(show, "tab-content", "show");

  var otherTabs = document.querySelectorAll('.tab-content:not(#' + tabName + ')');
  otherTabs.forEach(function(otherTab) {
      otherTab.classList.remove('show');
  });
}

function toggleClass(element, classToAdd, classToRemove) {
  if (element.classList.contains(classToRemove)) {
      element.classList.remove(classToRemove);
  }
  element.classList.toggle(classToAdd);
}
console.log("eslam");

document.addEventListener('DOMContentLoaded', function() {
  var buttons = document.querySelectorAll('.open-modal');
  buttons.forEach(function(button) {
      button.addEventListener('click', function(event) {
          event.preventDefault();
          var carId = this.getAttribute('data-car-id');
          var modal = document.getElementById(carId);
          modal.classList.remove('hidden');
      });
  });
});
const modalClose = window.document.querySelectorAll('[data-target-remove]');
if (modalClose) {
  modalClose.forEach((ele) => {
      ele.addEventListener('click', () => {
          const modalRemove = ele.closest('.modal');
          modalRemove.classList.add('hidden');
      });
  });
}
// esarch data

