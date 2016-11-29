//screenshots slideshow

var slideIndexGallery = 1;
var slideIndexFeature = 1;
showDivs(slideIndexGallery,1);
showDivs(slideIndexGallery,2);

function currentDiv(n,g) {
  if(g ==1){
     showDivs(slideIndexGallery = n,g);
  } else if(g ==2){
     showDivs(slideIndexFeature = n,g);
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
  var dots = document.getElementsByClassName(cName+"marker");

  if (n > x.length) {resetSlide(g)}

  if (n < 1) {setIndex(x.length,g)}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
     if(g ==1){
        dots[i].style.backgroundColor = "#252525";
     } else if(g ==2){
        dots[i].style.backgroundColor = "#D6D6D6";
     }
  }
   x[getIndex(g)-1].style.display = "block";
   if(g ==1){
      dots[getIndex(g)-1].style.backgroundColor = "#E6E6E6";
   } else if(g ==2){
    dots[getIndex(g)-1].style.backgroundColor = "#272727";
   }

}

function plusDivs(n,g) {
  if(g==1){
      showDivs(slideIndexGallery += n,1);
  } else if(g==2){
    showDivs(slideIndexFeature += n,2);
  }
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
