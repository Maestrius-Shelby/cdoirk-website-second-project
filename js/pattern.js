document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.querySelector('input[name="senderName1"]');
    const surnameInput = document.querySelector('input[name="senderSurname1"]');
    const emailInput = document.querySelector('input[name="senderEmail1"]');
    const phoneInput = document.querySelector('input[name="senderPhone1"]');
    const submitButton = document.querySelector('.submit-button');
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="brands[]"]');
  
    function setCharacterLimit(input, maxLength) {
      input.addEventListener('input', () => {
        const value = input.value.trim();
        if (value.length > maxLength) {
          input.value = value.slice(0, maxLength);
        }
      });
    }
  
    function validateCheckboxes() {
      const areAnyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
      const areAnyUnchecked = Array.from(checkboxes).some(checkbox => !checkbox.checked);
  
      if ((areAnyChecked || areAnyUnchecked) && checkAllFields()) {
        enableSubmitButton();
      } else {
        disableSubmitButton();
      }
    }
  
    function checkAllFields() {
      const nameValue = nameInput.value.trim();
      const surnameValue = surnameInput.value.trim();
      const emailValue = emailInput.value.trim();
      const phoneValue = phoneInput.value.trim();
  
      const namePattern = /^[а-яёА-ЯЁ]{2,20}$/iu;
      const emailPattern = /^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,4}$/i;
      const phonePattern = /^(\+7|\+8|8)\s?\(\d{3}\)\s?\d{3}-\d{2}-\d{2}$/;
  
      const isNameValid = namePattern.test(nameValue);
      const isSurnameValid = namePattern.test(surnameValue);
      const isEmailValid = emailPattern.test(emailValue);
      const isPhoneValid = phonePattern.test(phoneValue);
  
      const areAllUnchecked = Array.from(checkboxes).every(checkbox => !checkbox.checked);
  
      return isNameValid && isSurnameValid && isEmailValid && isPhoneValid && !areAllUnchecked;
    }
  
    function showError(input, message) {
      if (!input.classList.contains('error')) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.innerText = message;
  
        input.parentNode.appendChild(errorElement);
        input.classList.add('error');
      }
    }
  
    function removeError(input) {
      const errorElement = input.parentNode.querySelector('.error-message');
      if (errorElement) {
        errorElement.remove();
        input.classList.remove('error');
      }
    }
  
    function disableSubmitButton() {
      submitButton.disabled = true;
      submitButton.classList.add('no-animation');
    }
  
    function enableSubmitButton() {
      submitButton.disabled = false;
      submitButton.classList.remove('no-animation');
    }
  
    setCharacterLimit(nameInput, 20);
    setCharacterLimit(surnameInput, 20);
    setCharacterLimit(emailInput, 50);
    setCharacterLimit(phoneInput, 18);
  
    nameInput.addEventListener('input', validateName);
    surnameInput.addEventListener('input', validateSurname);
    emailInput.addEventListener('input', validateEmail);
    phoneInput.addEventListener('input', validatePhone);
  
    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', validateCheckboxes);
    });
  
    function validateName() {
      const value = nameInput.value.trim();
      const pattern = /^[а-яёА-ЯЁ]{2,20}$/iu;
  
      if (value && !pattern.test(value)) {
        showError(nameInput, "Имя должно содержать от 2 до 20 символов на русском без цифр.");
        disableSubmitButton();
      } else {
        removeError(nameInput);
        validateCheckboxes();
      }
    }
  
    function validateSurname() {
      const value = surnameInput.value.trim();
      const pattern = /^[а-яёА-ЯЁ]{2,20}$/iu;
  
      if (value && !pattern.test(value)) {
        showError(surnameInput, "Фамилия должна содержать от 2 до 20 символов на русском без цифр.");
        disableSubmitButton();
      } else {
        removeError(surnameInput);
        validateCheckboxes();
      }
    }
  
    function validateEmail() {
      const value = emailInput.value.trim();
      const pattern = /^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,4}$/i;
  
      if (value && !pattern.test(value)) {
        showError(emailInput, "Email должен иметь формат: user@somehost.com.");
        disableSubmitButton();
      } else {
        removeError(emailInput);
        validateCheckboxes();
      }
    }
  
    function formatPhoneNumber(input) {
      const cleaned = input.replace(/\D/g, '');
  
      if (cleaned.length === 11 && (cleaned[0] === '7' || cleaned[0] === '8')) {
        const formatted = '+' + cleaned[0] + ' (' + cleaned.substring(1, 4) + ') ' + cleaned.substring(4, 7) + '-' + cleaned.substring(7, 9) + '-' + cleaned.substring(9, 11);
        return formatted;
      } else {
        return input;
      }
    }
  
    function validatePhone() {
      const value = phoneInput.value;
      const formattedValue = formatPhoneNumber(value);
      phoneInput.value = formattedValue;
  
      const pattern = /^(\+7|\+8|8)\s?\(\d{3}\)\s?\d{3}-\d{2}-\d{2}$/;
  
      if (value && !pattern.test(formattedValue)) {
        showError(phoneInput, "Телефон должен начинаться с '+7/+8' и соответствовать формату: +7/8 (999) 999-99-99.");
        disableSubmitButton();
      } else {
        removeError(phoneInput);
        validateCheckboxes();
      }
    }
  
    validateCheckboxes();
    validateName();
    validateSurname();
    validateEmail();
    validatePhone();
  });
  
  const submitButton = document.getElementById('open-modal');
  submitButton.addEventListener('click', function (e) {
    if (submitButton.disabled) {
      e.preventDefault();
      return false;
    }
    showModal();
  });
  
  function showModal() {
    const modalContainer = document.getElementById('modal-container');
    modalContainer.classList.add('show-modal');
  }
  
  function closeModalAndReload() {
    const modalContainer = document.getElementById('modal-container');
    modalContainer.classList.remove('show-modal');
    location.reload();
  }
  
  const closeButtons = document.querySelectorAll('.close-modal');
  closeButtons.forEach((button) => {
    button.addEventListener('click', closeModalAndReload);
  });
  