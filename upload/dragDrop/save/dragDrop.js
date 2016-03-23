// Drag and drop d'objets à l'intérieur de la page
//

onload = function() {
  for (var i = 1; i <= 3; i++) {
    document.querySelector('#o' + i).ondragstart = function(evt) {
      evt.dataTransfer.setData("id_drg", evt.target.id); // Mémorisation de l'identifiant du draggable
      evt.dataTransfer.effectAllowed = 'link'; // Spécifie les effets possibles au survol d'un dropable
      evt.target.className += " effet"; // Ajout d'un style CSS pendant le drag
    };
    document.querySelector('#o' + i).ondragend = function(evt) {
      evt.target.className = evt.target.className.replace(" effet", ""); // Retrait du style CSS en fin de drag
      evt.target.style.cursor = 'default';
      evt.target.onmouseover = function() {
      	evt.target.style.cursor = 'grab';
      };
      evt.target.onmousedown = function() {
      	evt.target.style.cursor = 'grabbing';
      };
    }
  }

  var drp = document.querySelector('#d1');
  
  drp.ondragover = function(evt) {
    evt.preventDefault(); // Désactive le comportement par défaut du navigateur (indispensable)
    evt.dataTransfer.dropEffect = 'link'; // Spécifie l'effet au survol de ce dropable
  }

  drp.ondrop = function(evt) {
    evt.preventDefault();
    var elt = document.querySelector('#' + evt.dataTransfer.getData("id_drg"));
    evt.target.appendChild(elt); // Déplace le draggable à l'intérieur du dropable
    evt.target.className = evt.target.className.replace(" effet", ""); // Retrait du style CSS en fin de survol par le draggable
  }

  drp.ondragenter = function(evt) {
    evt.target.className += " effet"; // Ajout d'un style CSS au début du survol par le draggable
  }
    
  drp.ondragleave = function(evt) {
      evt.target.className = evt.target.className.replace(" effet", ""); // Retrait du style CSS en fin de survol par le draggable
  }
}
