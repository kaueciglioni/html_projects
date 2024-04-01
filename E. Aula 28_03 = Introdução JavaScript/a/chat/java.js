document.addEventListener('DOMContentLoaded', function() {
    var feedbackForm = document.getElementById('feedback-form');
  
    feedbackForm.addEventListener('submit', function(event) {
      event.preventDefault();
  
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'feedback.php'); // Substitua pelo nome do arquivo PHP que processa o formulário
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
        if (xhr.status === 200) {
          alert('Obrigado pelo seu feedback!');
          feedbackForm.reset();
        } else {
          alert
