document.addEventListener("DOMContentLoaded", function() {
  var originalColors = document.getElementsByClassName("original-color");
  var hoverColors = document.getElementsByClassName("hover-color");
  
  for (var i = 0; i < originalColors.length; i++) {
    originalColors[i].index = i; // Ajoute une propriété index pour identifier l'élément correspondant
  
    originalColors[i].onmouseover = function() {
      hoverColors[this.index].style.display = "inline";
      this.style.display = "none";
    };
  
    originalColors[i].onmouseout = function() {
      hoverColors[this.index].style.display = "none";
      this.style.display = "inline";
    };
  }
});