var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 500,
	speedAsDuration: true
});

let galleryImages = document.querySelectorAll(".gallery-img");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;
let imgnumber;


if(galleryImages){
    galleryImages.forEach(function(image,index){
     image.onclick = function(){
         let getElementCss = window.getComputedStyle(image);
         let getFullImgURl = getElementCss.getPropertyValue("background-image");
         let getImgUrlPos = getFullImgURl.split("/images/img");
         let number = getImgUrlPos[1].replace('.png")','');
         let setNewImgUrl = "images/img"+number+"/img"+number+".png";
         getLatestOpenedImg = index + 1;
         galleryImages = document.querySelectorAll(".img"+number);
         imgnumber = number;

         let container = document.body;
         let newImgWindow = document.createElement("div");
         container.appendChild(newImgWindow);
         newImgWindow.setAttribute("class","img-window");
         newImgWindow.setAttribute("onclick","closeImg()");

         let newImg = document.createElement("img");
         newImgWindow.appendChild(newImg);
         newImg.setAttribute("src",setNewImgUrl);
         newImg.setAttribute("id","curent-img");

         newImg.onload = function(){
         let imgWidth = this.width;
         let calcToEdge = ((windowWidth - imgWidth) / 2) - 130;

         let newPrevBtn = document.createElement("a");
         container.appendChild(newPrevBtn);
         newPrevBtn.setAttribute("class","img-btn-prev");
         newPrevBtn.setAttribute("onclick","changeImg(0)");
         newPrevBtn.style.cssText = "left:" + calcToEdge + "px;";

         let newNextBtn = document.createElement("a");
         container.appendChild(newNextBtn);
         newNextBtn.setAttribute("class","img-btn-next");
         newNextBtn.setAttribute("onclick","changeImg(1)");
         newNextBtn.style.cssText = "right:" + calcToEdge + "px;";
         }
     
        } 
    });
}
    function closeImg(){
        document.querySelector(".img-window").remove();
        document.querySelector(".img-btn-prev").remove();
        document.querySelector(".img-btn-next").remove(); 
    }
    function changeImg(changeDir){
        document.querySelector("#curent-img").remove(); 
        
        let getImgWindow = document.querySelector(".img-window");
        let newImg = document.createElement("img");
        getImgWindow.appendChild(newImg);
        
        let calcNewImg;
        if(changeDir === 1){
            calcNewImg = getLatestOpenedImg + 1; 
            if(calcNewImg > galleryImages.length){
                calcNewImg = 1;
            }
        } else if(changeDir === 0){
            calcNewImg = getLatestOpenedImg - 1;
            if(calcNewImg < 1){
                 calcNewImg = galleryImages.length;
            }
        }
            newImg.setAttribute("src","images/img" + imgnumber + "/img" + calcNewImg + ".png");
            newImg.setAttribute("id","curent-img");

            getLatestOpenedImg = calcNewImg;
    }
