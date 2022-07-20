/*
toggle navigation menu
 */ 
  // Get toggle button and menu items div
  const toggleBtn = document.getElementById('toggle-icon');
  const menuItems = document.querySelector('.menu-items');
   
  function toggleNav() {
    const responsive_class_name = 'responsive'
    menuItems.classList.toggle(responsive_class_name);
  }

    // When toggle button pressed, run toggleNav function
    toggleBtn.addEventListener('click', toggleNav);


/*
tabs
*/

const tabs = document.querySelector('.tab-wrapper');
const tabButton = document.querySelectorAll('.tab-button');
const contents = document.querySelectorAll('.tab-content');

tabs.addEventListener('click', e => {
 
  
  
  const id = e.target.dataset.id;
  if(id) {
    tabButton.forEach(btn => {
      btn.classList.remove("active");
    });
    e.target.classList.add("active");

    contents.forEach(content => {
      content.classList.remove("active");
    });
    const element = document.getElementById(id);
    element.classList.add("active");
  }
})









/*
const tabs = document.querySelector('.tabs');
const tabButton = document.querySelectorAll('.tab-button');
const tabContent = document.querySelectorAll('.tab-content');

tabs.addEventListener('click', tabToggle);

function tabToggle() {
  const id = e.target.dataset.id;
  if (id) {
    tabButton.forEach(btn => {
      btn.classList.remove('active');
    });
    e.target.classList.add('active');

    tabContent.forEach(content => {
      content.classList.remove('active');
    });
    const element = document.getElementById(id);
    element.classList.add('active');
  }
}
*/

/*
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})


*/

/*



*/