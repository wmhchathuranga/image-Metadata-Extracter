const form = document.querySelector('#my-form');
const urlInput = document.querySelector('#url');
const fileInput = document.querySelector('#file');
const submitButton = document.querySelector('#submit-btn');

submitButton.addEventListener('click', (event) => {
  event.preventDefault(); // prevent default form submission
  
  // check if either url input or file input is filled out
  if (urlInput.value.trim() === '' && fileInput.files.length === 0) {
    alert('Please enter either a URL or select a file.');
  } else if (urlInput.value.trim() !== '' && fileInput.files.length !== 0) {
    alert('Please only enter a URL or select a file, not both.');
  } else {
    // submit form
    form.submit();
  }
});
