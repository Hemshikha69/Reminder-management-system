const form = document.querySelector('form');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  if (!form['start-date'].value) {
    alert('Please select a start date.');
    return;
  }

  if (!form['end-date'].value) {
    alert('Please select an end date.');
    return;
  }

  if (!form['subject'].value) {
    alert('Please select a subject.');
    return;
  }

  if (!form['reminder-name'].value) {
    alert('Please enter a reminder name.');
    return;
  }

  if (!form['reminder-description'].value) {
    alert('Please enter a reminder description.');
    return;
  }

  // Submit the form
  form.submit();
});
