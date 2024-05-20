// Get the form element
const form = document.querySelector('form');

// Add an event listener for the form submission
form.addEventListener('submit', (event) => {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the value of the input element
  const numberInput = document.getElementById('number');
  const number = parseInt(numberInput.value); // Parse the input value to an integer

  // Convert the number to different representations
  const binary = convertIntToBinary(number);
  const romanNumeral = convertIntToRoman(number);
  const celcious = convertToCelcius(number);
  const kg = convertToKG(number);

  // Display the results
  const resultElement = document.getElementById('result');
  resultElement.innerHTML = `
    <p>Binary representation: ${binary}</p>
    <p>Roman numeral representation: ${romanNumeral}</p>
    <p>Celcius convertion of: ${number}' F is  ${celcious}' C</p>
    <p>The pound to killogram is: ${kg} KG</p>
  `;

  // Add a class to the result element to apply CSS styling
  resultElement.classList.add('result');
});

// Function to convert an integer to its binary representation
function convertIntToBinary(number) {
  let binary = "";
  while (number > 0) {
    binary = (number % 2) + binary;
    number = Math.floor(number / 2);
  }
  return binary;
}

// Function to convert an integer to its Roman numeral representation
function convertIntToRoman(number) {
  const romanNumerals = {
    M: 1000,
    CM: 900,
    D: 500,
    CD: 400,
    C: 100,
    XC: 90,
    L: 50,
    XL: 40,
    X: 10,
    IX: 9,
    V: 5,
    IV: 4,
    I: 1
  };

  let romanNumber = "";
  for (let key in romanNumerals) {
    while (number >= romanNumerals[key]) {
      romanNumber += key;
      number -= romanNumerals[key];
    }
  }
  return romanNumber;
}

// Function to convert Fahrenheit to Celsius
function convertToCelcius(fahrenheit) {
  const celsius = (fahrenheit - 32) * 5 / 9;
  return celsius.toFixed(2); // Round the result to two decimal places
}

// Function to convert pounds to kilograms
function convertToKG(pounds) {
  const kilograms = pounds * 0.453592;
  return kilograms.toFixed(2); // Round the result to two decimal places
}