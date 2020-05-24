
    // function nextLayout() {
    // var theImages = [{
    //         src: "http://farm4.staticflickr.com/3691/11268502654_f28f05966c_m.jpg",
    //         width: "240",
    //         height: "160"
    //     }, {
    //         width: "320",
    //         height: "195"
    //     }, {
    //         src: "\assets\images\CV01.png",
    //         width: "500",
    //         height: "343"
    //     }];
        
    //     var preBuffer = [];
    //     for (var i = 0, j = theImages.length; i < j; i++) {
    //         preBuffer[i] = new Image();
    //         preBuffer[i].src = theImages[i].src;
    //         preBuffer[i].width = theImages[i].width;
    //         preBuffer[i].height = theImages[i].height;
    //     }
       
    // // create random image number
    //   function getRandomInt(min,max) 
    //     {
    //       //  return Math.floor(Math.random() * (max - min + 1)) + min;
        
    // imn = Math.floor(Math.random() * (max - min + 1)) + min;
    //     return preBuffer[imn];
    //     }  
    
    // // 0 is first image,   preBuffer.length - 1) is  last image
      
    // var newImage = getRandomInt(0, preBuffer.length - 1);
     
    // // remove the previous images
    // var images = document.getElementsByTagName('img');
    // var l = images.length;
    // for (var p = 0; p < l; p++) {
    //     images[0].parentNode.removeChild(images[0]);
    // }
    // // display the image  
    // document.body.appendChild(newImage);
    // }

    // var image_tracker = 'f';
    // function change(){
    //     var image = document.getElementById('social');
    //     if(image_tracker =='f'){
    //         image.src = '\..\..\assets\imagesCV03.png';
    //         imags_tracker = 'f';
    //         // }else{
    //         //     image.src = '/CV02.png';
    //         //     image_tracker = 'f';
    //         }
    //     }
    
    
 var slides=document.querySelector('.slider-items').children;
 var nextSlide=document.querySelector(".right-slide");
var prevSlide=document.querySelector(".left-slide");
var totalSlides=slides.length;
var index=0;

nextSlide.onclick=function () {
     next("next");
}
prevSlide.onclick=function () {
     next("prev");
}

function next(direction){

   if(direction=="next"){
      index++;
       if(index==totalSlides){
        index=0;
       }
   } 
   else{
           if(index==0){
            index=totalSlides-1;
           }
           else{
            index--;
           }
    }

  for(i=0;i<slides.length;i++){
          slides[i].classList.remove("active");
  }
  slides[index].classList.add("active");     

}