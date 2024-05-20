const form = document.getElementById("form");
const result = document.getElementById("result");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Get the user input
  const salary = parseFloat(document.getElementById("salary").value);
  const addOns = parseFloat(document.getElementById("add-ons").value);
  const internetBill = parseFloat(document.getElementById("internet-bill").value);
  const electricBill = parseFloat(document.getElementById("electric-bill").value);

  // Calculate the money left
  const moneyLeft = salary + addOns - internetBill - electricBill;

  // Display the result
  result.innerHTML = `Money Left: ${moneyLeft}`;
});