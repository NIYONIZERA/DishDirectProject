// Get form elements
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const reasonInput = document.getElementById('reason');
const messageInput = document.getElementById('message');

// Function to validate email format
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to validate phone number format
function isValidPhone(phone) {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phone);
}

// Function to handle form submission
function handleSubmit(event) {
  event.preventDefault();

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const phone = phoneInput.value.trim();
  const reason = reasonInput.value;
  const message = messageInput.value.trim();

  // Basic form validation
  if (name === '' || email === '' || phone === '' || reason === '' || message === '') {
    alert('Please fill out all fields.');
    return;
  }

  if (!isValidEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!isValidPhone(phone)) {
    alert('Please enter a valid 10-digit phone number.');
    return;
  }

  // Form data is valid, you can send it to the server or perform other actions here
  console.log('Name:', name);
  console.log('Email:', email);
  console.log('Phone:', phone);
  console.log('Reason:', reason);
  console.log('Message:', message);

  // Optionally, you can reset the form after submission
  form.reset();
}

// Attach form submission event listener
form.addEventListener('submit', handleSubmit);


// Get form elements
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const reasonInput = document.getElementById('reason');
const messageInput = document.getElementById('message');

// Function to validate email format
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to validate phone number format
function isValidPhone(phone) {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phone);
}

// Function to handle form submission
function handleSubmit(event) {
  event.preventDefault();

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const phone = phoneInput.value.trim();
  const reason = reasonInput.value;
  const message = messageInput.value.trim();

  // Basic form validation
  if (name === '' || email === '' || phone === '' || reason === '' || message === '') {
    alert('Please fill out all fields.');
    return;
  }

  if (!isValidEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!isValidPhone(phone)) {
    alert('Please enter a valid 10-digit phone number.');
    return;
  }

  // Form data is valid, you can send it to the server or perform other actions here
  console.log('Name:', name);
  console.log('Email:', email);
  console.log('Phone:', phone);
  console.log('Reason:', reason);
  console.log('Message:', message);

  // Optionally, you can reset the form after submission
  form.reset();
}

// Attach form submission event listener
form.addEventListener('submit', handleSubmit);


// Get form elements
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const reasonInput = document.getElementById('reason');
const messageInput = document.getElementById('message');

// Function to validate email format
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to validate phone number format
function isValidPhone(phone) {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phone);
}

// Function to handle form submission
function handleSubmit(event) {
  event.preventDefault();

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const phone = phoneInput.value.trim();
  const reason = reasonInput.value;
  const message = messageInput.value.trim();

  // Basic form validation
  if (name === '' || email === '' || phone === '' || reason === '' || message === '') {
    alert('Please fill out all fields.');
    return;
  }

  if (!isValidEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!isValidPhone(phone)) {
    alert('Please enter a valid 10-digit phone number.');
    return;
  }

  // Form data is valid, you can send it to the server or perform other actions here
  console.log('Name:', name);
  console.log('Email:', email);
  console.log('Phone:', phone);
  console.log('Reason:', reason);
  console.log('Message:', message);

  // Optionally, you can reset the form after submission
  form.reset();
}

// Attach form submission event listener
form.addEventListener('submit', handleSubmit);


// Get form elements
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const reasonInput = document.getElementById('reason');
const messageInput = document.getElementById('message');

// Function to validate email format
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to validate phone number format
function isValidPhone(phone) {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phone);
}

// Function to handle form submission
function handleSubmit(event) {
  event.preventDefault();

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const phone = phoneInput.value.trim();
  const reason = reasonInput.value;
  const message = messageInput.value.trim();

  // Basic form validation
  if (name === '' || email === '' || phone === '' || reason === '' || message === '') {
    alert('Please fill out all fields.');
    return;
  }

  if (!isValidEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!isValidPhone(phone)) {
    alert('Please enter a valid 10-digit phone number.');
    return;
  }

  // Form data is valid, you can send it to the server or perform other actions here
  console.log('Name:', name);
  console.log('Email:', email);
  console.log('Phone:', phone);
  console.log('Reason:', reason);
  console.log('Message:', message);

  // Optionally, you can reset the form after submission
  form.reset();
}

// Attach form submission event listener
form.addEventListener('submit', handleSubmit);
