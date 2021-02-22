window.oninput = function(event){
   var campo = event.target.id;
   if(campo == "name"){
      x = document.querySelector('#name').value;
      document.getElementById("nameText").innerHTML = x;
   }
};

window.onchange = function() {
	var width = document.getElementById('photo').clientWidth; 
	var height = document.getElementById('photo').clientHeight; 
   var x = document.getElementById("photo").naturalWidth;
   var y = document.getElementById("photo").naturalHeight;
   var eixoX = document.getElementById("eixoX").value;
   var eixoY = document.getElementById("eixoY").value;
   var color = document.getElementById("color").value;
   var size = document.getElementById("size").value;
   var font = document.getElementById("font").value;

   var somaWidth = x / width;
   var somaHeight = y / height;

   var resultX = eixoX * somaWidth;
   var resulty = eixoY * somaHeight;
   var fontSize = size * somaWidth - 25;

   document.getElementById("nameText").style.fontFamily = font;
   document.getElementById("nameText").style.fontSize = size + "px";
   document.getElementById("nameText").style.color = color;
   document.getElementById("width").value = resultX;
   document.getElementById("height").value = resulty;
   document.getElementById("fontSize").value = fontSize;
}

function moveX(){
	var x = document.getElementById("eixoX").value;
	var image = document.getElementById("spaceText").style;
	image.marginLeft=x+"px";
}

function moveY(){
	var y = document.getElementById("eixoY").value;
	var image = document.getElementById("spaceText").style;
	image.marginTop=y+"px";
}