function popup(){
    var x = document.getElementById('popup');
    var y = document.getElementById('book-icon');
    if(x.style.display=="none"){
        x.style.display="block";
        y.classList.remove('fa-book');
        y.classList.add('fa-arrow-circle-left');
    }else{
        x.style.display="none";
        y.classList.add('fa-book');
        y.classList.remove('fa-arrow-circle-left');
    }
}
function design(x){
    var page = document.getElementById("1");
    var tool = document.getElementById(x);
    console.log(x);
    if(x=='bold'){
        if(page.style.fontWeight=="bold"){
            page.style.fontWeight="400";
            tool.style.color="black";
        }else{
            page.style.fontWeight="bold";
            tool.style.color="red";
        }
    }else if(x=='italic'){
        if(page.style.fontStyle=="italic"){
            page.style.fontStyle="normal";
            tool.style.color="black";
        }else{
            page.style.fontStyle="italic";
            tool.style.color="red";
        }
    }else if(x=='underline'){
        if(page.style.textDecorationLine=="underline"){
            page.style.textDecorationLine="unset";
            tool.style.color="black";
        }else{
            page.style.textDecorationLine="underline";
            tool.style.color="red";
        }
    }else if(x=='fontsize'){
        page.style.fontSize=tool.value+"px";
    }else if(x=='FontFamily'){
        page.style.fontFamily = tool.options[tool.selectedIndex].value;
    }else if(x=='fontcolor'){
        page.style.color=tool.value;
    }else if(x=='Aleft'){
        page.style.textAlign="left";
    }else if(x=='Acenter'){
        page.style.textAlign="center";
    }else if(x=='Aright'){
        page.style.textAlign="right";
    }else if(x=='Ajustify'){
        page.style.textAlign="justify";
    }else if(x=='color'){
        page.style.backgroundColor=tool.value;
    }
}
function pasteImage(x) {
	document.getElementById(x).focus();
	var reader = new FileReader();
  reader.onload = function(e) {
  	document.getElementById(x).focus();
  	document.execCommand('insertImage', false, e.target.result);
  }
  reader.readAsDataURL(document.getElementById("image").files[0]);
  document.getElementById("image").value="";
}
function save(){
    var filename = prompt("Enter the Book Name: ")
    if (filename != null) {
        document.getElementById("FileName").value = filename;
        document.getElementById("content").innerHTML = document.getElementById("1").innerHTML;
      } 
}