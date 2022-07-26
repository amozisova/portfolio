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
const tabButton = document.querySelectorAll('.tab-button');
const contents = document.querySelectorAll('.tab-content');

// on click
tabs.addEventListener('click', e => {

  const id = e.target.dataset.id;
  if (id) {
    // active tab
    tabButton.forEach(btn => {
      btn.classList.remove("active");
    });
    e.target.classList.add("active");
    // active content
    contents.forEach(content => {
      content.classList.remove("active");
    });
    const element = document.getElementById(id);
    element.classList.add("active");
  }
})


/*
*** validate form data ***
*/

// selectElementsbyId
let id = (id) => document.getElementById(id);
let contactName = id("name"),
  email = id("email"),
  subject = id("subject"),
  message = id("message"),
  form = id("contact-form");

// select elements to display validation status
let errorMsg = document.querySelectorAll('.errorMessage');
let success = document.querySelectorAll('.passed');
let fail = document.querySelectorAll('.failed');

// on submit
form.addEventListener("submit", (e) => {

  let validator = (id, errorType, errorMessage) => {

    //check for empty values
    if ((id.value.trim() === "")) {

      // display error border around input
      errorMsg[errorType].innerHTML = errorMessage;
      id.style.border = "2px solid red";

      // display failure icon
      fail[errorType].style.display = "inline";
      success[errorType].style.display = "none";

      // prevent form from submitting
      e.preventDefault();

      //validate email
      validateEmail(email);

    } else {

      // display success border around input
      errorMsg[errorType].innerHTML = "";
      id.style.border = "2px solid green";

      // display success icon
      fail[errorType].style.display = "none";
      success[errorType].style.display = "inline";

    }
  }

  // error messages for different form inputs
  validator(contactName, 0, "Zadejte své jméno.");
  validator(email, 1, "Zadejte svůj email.");
  validator(subject, 2, "Zadejte předmět Vaší zprávy.");
  validator(message, 3, "Zadejte svou zprávu.");

});

//validate email
function validateEmail(email) {

  const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (!email.value.match(mailformat)) {

    errorMsg[1].innerHTML = "Zadejte validní email.";
    email.style.border = "2px solid red";

    // display failure icon
    fail[1].style.display = "inline";
    success[1].style.display = "none";

    validateEmail(email);
  }
}