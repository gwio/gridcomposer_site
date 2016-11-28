//screenshots slideshow

var slideIndexGallery = 1;
var slideIndexFeature = 1;
showDivs(slideIndexGallery,1);
showDivs(slideIndexGallery,2);

function plusDivs(n,g) {
  if(g==1){
      showDivs(slideIndexGallery += n,1);
  } else if(g==2){
    showDivs(slideIndexFeature += n,2);
  }

}

function showDivs(n,g) {
var cName;
  if(g ==1){
     cName ="screenSlide";
  } else if(g ==2){
     cName ="featureSlide";
  }
  var i;
  var x = document.getElementsByClassName(cName);

  if (n > x.length) {resetSlide(g)}

  if (n < 1) {setIndex(x.length,g)}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[getIndex(g)-1].style.display = "block";
}

function getIndex(a){
  if(a == 1){
    return slideIndexGallery;
  } else if(a == 2){
    return slideIndexFeature;
  }
}
function resetSlide(a){
  if(a == 1){
    slideIndexGallery = 1;
  } else if(a == 2){
    slideIndexFeature = 1;
  }
}

function setIndex(a,b){
  if(b == 1){
    slideIndexGallery = a;
  } else if(b == 2){
    slideIndexFeature = a;
  }
}
