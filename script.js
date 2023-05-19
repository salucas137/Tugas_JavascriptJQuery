const form = document.getElementById("form");
const first_name = document.getElementById("first_name");
const last_name = document.getElementById("last_name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const address = document.getElementById("address");

form.addEventListener("submit", (e) => {
  if(validateInputs()===false){
    e.preventDefault();
  }
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
};

const setSuccess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
};

const isValidEmail = (email) => {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
  const first_nameValue = first_name.value.trim();
  const last_nameValue = last_name.value.trim();
  const emailValue = email.value.trim();
  const phoneValue = phone.value.trim();
  const addressValue = address.value.trim();

  let res = true;
  if (first_nameValue === "") {
    setError(first_name, "First Name is required");
    res = false;
  } else {
    setSuccess(first_name);
  }
  if (last_nameValue === "") {
    setError(last_name, "Last Name is required");
    res = false;
  } else {
    setSuccess(last_name);
  }

  if (emailValue === "") {
    setError(email, "Email is required");
    res = false;
  } else if (!isValidEmail(emailValue)) {
    setError(email, "Provide a valid email address");
    res = false;
  } else {
    setSuccess(email);
  }

  if (phoneValue === "") {
    setError(phone, "Phone is required");
    res = false;
  } else {
    setSuccess(phone);
  }

  if (addressValue === "") {
    setError(address, "Address is required");
    res = false;
  } else {
    setSuccess(address);
  }

  return res;
};
