// Preloader Functionality
window.onload = function () {
    const preloader = document.getElementById('preloader');
    const mainContent = document.getElementById('main-content');
    setTimeout(() => {
      preloader.style.display = 'none';
      mainContent.style.display = 'block';
    }, 2000); // 2-second delay for preloader
  };
  
  // Menu Movement Animation
  function moveMenu(menu) {
    menu.style.transform = 'translateX(10px)';
    menu.style.transition = 'transform 0.3s ease';
  
    setTimeout(() => {
      menu.style.transform = 'translateX(-10px)';
      setTimeout(() => {
        menu.style.transform = 'translateX(0)';
      }, 300);
    }, 300);
  }
  