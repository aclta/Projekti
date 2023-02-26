const form = document.querySelector("form[name='contact-form']");
const nameInput = document.querySelector("input[name='name']");
const lnameInput = document.querySelector("input[name='lastname']");

const emailInput = document.querySelector("input[name='email']");
const messageInput = document.querySelector("textarea[name='message']");

nameInput.isValid = () => !!nameInput.value;
lnameInput.isValid = () => !!lnameInput.value;
emailInput.isValid = () => isValidEmail(emailInput.value);
messageInput.isValid = () => !!messageInput.value;

const inputFields = [nameInput, emailInput,lnameInput, messageInput];

const isValidEmail = (email) => {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
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
























// function validoMeRegex() {

//     var emri = document.getElementById('er2').value;
//     var mbiemri = document.getElementById('mb2').value;
//     var email = document.getElementById('em2').value;
//     var msg = document.getElementById('msg2').value;


//     var regexEMRI = /^[A-Z][a-z]{4,14}$/; // min 5 max 15
//     var regexMBIEMRI = /^[A-Z][a-z]{4,14}$/; // min 5 max 15
//     var regexEMAIL = /^[a-zA-Z][a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.(com|net)$/; //email duhet te startoj me shkronje dhe ka @ dhe ends.com.net
//     var regexMESSAGE = /^[A-Z][a-z]{10,40}$/;


//     var emri = document.getElementById('er2').value;
//     if (regexEMRI.test(emri)) {
//         console.log("First name is acceptable")
//     } else {
//         alert("First name is wrong!!!")
//     }

//     if (regexEMAIL.test(email)) {
//         console.log("Email name is acceptable")
//     } else {
//         alert("Email is wrong!!!")
//     }

//     if (regexMBIEMRI.test(mbiemri)) {
//         console.log("Last name is acceptable")
//     } else {
//         alert("Last name is wrong!!!")
//     }
//     if (regexMESSAGE.test(msg)) {
//         console.log("Message is acceptable")
//     } else {
//         alert("Message is wrong!!!")
//     }

//     console.log(emri);
//     console.log(mbiemri);
//     console.log(email);
//     console.log(msg);

// }