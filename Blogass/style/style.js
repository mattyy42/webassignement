var image= [];
var i =0;
var time = 3000;	
image[0]="banner.jpeg";
image[1]="image.jpg";
image[2]="mic.jpg";

function slide (){
    document.slide.src= image[i];
    if(i<image.length-1) 
    {
        i=i+1;
    }
    else
    {
        i=0;
    }
    setTimeout(slide(),time);
    window.onload=slide;
}
