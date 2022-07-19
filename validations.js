// Elements

const fullName = document.querySelector("#full-name");
const email = document.querySelector("#email");

// Functions

const renderError = (input) => {
  const messageContainer = input.nextElementSibling;

  if (!input.checkValidity()) messageContainer.style.display = "inline-block";
  else messageContainer.style.display = "";
};

// Event Listeners

fullName.addEventListener("input", () => renderError(fullName));
email.addEventListener("input", () => renderError(email));
