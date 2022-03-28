const accordionTrigger = document.querySelector('.accordion__trigger');
const accordionContent = document.querySelector('.accordion__content');

accordionTrigger.addEventListener('click', function(e) {
	if(accordionContent.classList.contains('is-extended')) {
		accordionTrigger.classList.remove('is-rotated');
		accordionContent.classList.remove('is-extended')
	} else {
		accordionContent.classList.add('is-extended');
		accordionTrigger.classList.add('is-rotated');
	}
});