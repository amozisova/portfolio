/*
*** toggle navigation menu *** 
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
*** tabs *** 
*/

const tabs = document.querySelector('.tab-wrapper');
const tabButtons = document.querySelectorAll('.tab-button');
const contents = document.querySelectorAll('.tab-content');

// on click
tabs.addEventListener('click', (e) => {
  const button = e.target.closest('.tab-button');
  if (!button) return;

  const id = button.dataset.id;
  if (!id) return;

  tabButtons.forEach((btn) => btn.classList.remove('active'));
  contents.forEach((content) => content.classList.remove('active'));

  button.classList.add('active');
  document.getElementById(id)?.classList.add('active');
});