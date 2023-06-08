// Json Vanilla JS

let request = new XMLHttpRequest();
request.open('GET', 'js/podcast.json', true);

request.onload = function() {
  if (request.status >= 200 && request.status < 400) {
   // Success!
   var data = JSON.parse(request.responseText);
   console.log(data);
   
   let table = document.getElementById("leyendas-tabla");
   let row, cell;

   for (let i = 0; i < data.length; i++) {
      row = table.insertRow();
      cell = row.insertCell();
      cell.textContent = data[i].id;
      cell = row.insertCell();
      cell.textContent = data[i].nombre;
      cell = row.insertCell();
      cell.textContent = data[i].fecha;
      cell = row.insertCell();
      cell.innerHTML = '<a href="'+data[i].enlace+'"><img src="img/download-arrow.gif" /></a>'
   }

   } else {
   // We reached our target server, but it returned an error

   }
};

request.onerror = function() {
  // There was a connection error of some sort
};

request.send();


