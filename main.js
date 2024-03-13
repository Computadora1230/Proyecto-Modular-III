$(document).ready(main);

var contador = 1;

function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
const Nombre = document.getElementByID('Nombre')
const Password = document.getElementByID('Password')
const button = document.getElementByID('button')

button.addEventlistener('click') , (e) => {
e.preventDefault()
const data = {
	Nombre: Nombre.value,
	Password: Password.value
}
console.log(data)
}
