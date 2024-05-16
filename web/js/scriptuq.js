



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
  activePaginationPoint=document.getElementById("pgg");
  rr=activePaginationPoint.childElementCount;
  // pagElements=[];
  // for(i=0;i<rr.length;i++){
  //   elementt=document.getElementById("pag"+i);
  //   alert(elementt);
  //   pagElements.push(elementt);
  //   alert(pagElements[i]);

  // }
  var curPo=0;  //id текущего элемента пагинации
  var prevPo=0; //id предыдущего элемента пагинации
 
 function navigationFunc(id){

  movingSlider=document.getElementById("moving");
  elementStyles=window.getComputedStyle(movingSlider);
  transformValue=elementStyles.transform;
  words=transformValue.split(',');
  var xValue=parseInt(words[4]);
  var prevVariableRight=-340+xValue;
  var prevVariableLeft=340+xValue;
  // var currentPoint;
  // for(j=0;j<pagElements.length;j++){
  //   isActive=window.getComputedStyle(pagElements[i]).background;
  //   if(isActive=="#ecce56"){
  //     currentPoint=pagElements[i];

  //   }
  // }


  pagElements=document.getElementsByClassName("point_circle");

  var t=pagElements.length-1;
  if(id=="prev" && curPo>0 && xValue%10==0){
    curPo--;
    movingSlider.setAttribute('style', 'transform: translate('+prevVariableLeft+'px'+');');
    pagElements[curPo].style.background="#ecce56";
    pagElements[prevPo].style.background="#c7c7c7";
    prevPo--;

    
  }
  else if(id=="next" && curPo<t && xValue%10==0){
    curPo++;
    movingSlider.setAttribute('style', 'transform: translate('+prevVariableRight+'px'+');');
    pagElements[curPo].style.background="#ecce56";
    pagElements[prevPo].style.background="#c7c7c7";
    prevPo++;

    // document.getElementById("pag"+curPo).style.background="#ecce56";
    // document.getElementById("pag"+prevPo).style.background="#c7c7c7";


    // pagElements[curPo].style.background="#ecce56";
    // pagElements[prevPo].style.background="#c7c7c7";

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

function modalFunc(id){
  windob=document.getElementById("modalWindow1");
  
  activeState=document.getElementById(id);
  displayState=window.getComputedStyle(windob);
 
  if(activeState.id=="closeModal"){
    windob.style.display="none";
  }
  else if(activeState.id=="openModal"){
    windob.style.display="flex";
  }
}



