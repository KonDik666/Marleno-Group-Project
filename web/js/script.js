function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
       change.target.classList.add('show');
      }
    });
  }
  
  let options = {
    threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.anim');
  
  for (let elm of elements) {
    observer.observe(elm);
  }


  function OpenFunc(id){
               
    current= document.getElementById(id);
    curId=id.slice(-1);
     
    if(id.charAt(0)=="f"){
      currentDescription=document.getElementById("desc"+curId);
      currentImage=document.getElementById("img"+curId);
      isDisplay= window.getComputedStyle(currentDescription).display;

    if(isDisplay=="block"){
     currentDescription.style.display="none";
     currentImage.src="../../img/Plus_circle_white.svg";
    }
    else{
     currentDescription.style.display="block";
     currentImage.src="../../img/Minus_circle_white.svg";
    }
    }
    else if(id.charAt(0)=="a"){
      currentDescription=document.getElementById("descr"+curId);
      currentImage=document.getElementById("image"+curId);
      isDisplay= window.getComputedStyle(currentDescription).display;

    if(isDisplay=="block"){
     currentDescription.style.display="none";
     currentImage.src="../../img/Plus_circle.svg";
    }
    else{
     currentDescription.style.display="block";
     currentImage.src="../../img/Minus_circle.svg";
    }
    }   
 }


 function ShowFunc(id){
  if(id==="elem10"){
      ident=id.slice(-2);
  }
  else{
       ident=id.slice(-1);
  }
  
  
  activeStage= document.getElementById("stage"+ident);
  backg=document.getElementById("backgroundId");
  // alert(ident);
  suka="url('../../img/"+activeStage.id+".png')";
  backg.style.background="url('../../img/"+activeStage.id+".png')";
  backg.style.backgroundRepeat="no-repeat";
  var blocks = document.getElementsByClassName("stages-description-text");

  for (var i = 0; i <= blocks.length; i++) {
  if (blocks[i].id == activeStage.id) {
      
      blocks[i].style.display = "block";
      
     
  } else {
      blocks[i].style.display = "none";
    
  }
  
}



}
