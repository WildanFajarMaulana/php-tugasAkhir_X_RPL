// navbar
let navbar = document.querySelector(".navbar");

window.onscroll = function(){
	scrollFunction();
}


function scrollFunction(){
	if(document.body.scrollTop>20 || document.documentElement.scrollTop >20){
		navbar.classList.add("navbar-fixed");
	}
	else{
		navbar.classList.remove("navbar-fixed");
	}
}

const isinavbar = document.querySelector("#isinavbar");
isinavbar.addEventListener("click",function(){
	navbar.classList.toggle("navbar-click");

const box1 = document.qu
querySelector(".box1");
box1.addEventListener(click,function(){
	this.classList.toggle("boxdouble");
	this.classList.toggle("boxcolor");
})
});