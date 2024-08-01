const scriptURL = 'https://script.google.com/macros/s/AKfycbwGQRGZxIG5uAid0LtUs5jMGQ9UrayBKDr9Omtl84owZon99DS6pt9VY7Lmpm32-XdJJQ/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})