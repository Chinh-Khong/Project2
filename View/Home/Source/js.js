let arr_img = ["anh1.png","anh2.png"];
let index =  0;
function prev(){
    index--;
    if (index<0) {
        index = arr_img.length-1;
    }
    document.getElementById("img").src=arr_img[index];
}
next = function (){
    index++;
    if (index>=arr_img.length) {
        index = 0;
    }
    document.getElementById("img").src=arr_img[index];
}

setInterval(next,3000);



