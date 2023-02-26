const forms = document.querySelector("form[name='contact-form1']");
const namesInput = document.querySelector("input[name='name1']");
const lnamesInput = document.querySelector("input[name='lastname1']");
const emailiInput = document.querySelector("input[name='email1']");


namesInput.isValid = () => !!nameInput.value;
lnamesInput.isValid = () => !!lnameInput.value;
emailiInput.isValid = () => isValidEmail(emailiInput.value);


const inputFields = [namesInput, emailiInput,lnamesInput, ];

const isValidEmail = (emaili) => {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(emaili).toLowerCase());
};



let shouldValidate = false;
let isFormValid = false;

const validateInputs = () => {
  console.log("we are here");
  if (!shouldValidate) return;

  isFormValid = true;
  inputFields.forEach((input) => {
    input.classList.remove("invalid");
    input.nextElementSibling.classList.add("hide");

    if (!input.isValid()) {
      input.classList.add("invalid");
      isFormValid = false;
      input.nextElementSibling.classList.remove("hide");
    }
  });
};

form.addEventListener("submit", (e) => {
  e.preventDefault();
  shouldValidate = true;
  validateInputs();
  if (isFormValid) {
    // TODO: DO AJAX REQUEST
  }
});

inputFields.forEach((input) => input.addEventListener("input", validateInputs));