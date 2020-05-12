  var today = new Date();
  var date = today.getDate();
  var month = today.toLocaleString('default', {
      month: 'long'
  });
  var year = today.getFullYear();
  document.getElementById('date_of_attempt').innerText = date + " " + month + ',' + " " + year;