

const halojudul = document.querySelector('.halojudul');
halojudul.addEventListener('click',function(){
	let satu = 'size';
	let dua = 'caption';

	if (this.classList.contains(satu)) {
		[satu,dua]=[satu,dua];
	}
	this.classList.toggle(satu);
	setTimeout(() => {
	this.classList.toggle(dua);
	},600);
});
const span1 = document.querySelector('.span1');
span1.addEventListener('click',function(){
	this.classList.toggle('span2');
	
})
