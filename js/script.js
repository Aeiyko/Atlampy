window.onload = main;

var elements = document.getElementsByClassName('image');
var i=0;

function main() {

  for(i = 0;i < 3;i++){

    elements[i].addEventListener("mouseover",(e)=>{
      return changeon(e.target);
    });

    elements[i].addEventListener("mouseout",(e)=>{
      changeoff(e.target);
    });

  }
}

function changeon(elt){
  elt.className = "imageblur";
  elt.nextElementSibling.className = "image-textblur";
}

function changeoff(elt){
  elt.className = "image";
  elt.nextElementSibling.className = "image-text";
}
