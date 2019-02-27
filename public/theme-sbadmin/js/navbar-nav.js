$(function(){
	var current = window.location.href;
	$('ul.navbar-nav li a').each(function(){
		var $this = $(this);
<<<<<<< HEAD
		if ($this.attr('href') == current){
=======
		if ($this.attr('href') == current) {
>>>>>>> Eps 4
			$this.parents('li').addClass('active');
		}
	});
});