
// Sticky Navigation
$(window).scroll(function() {
	if ($(document).scrollTop() > "500") {
		$("nav").addClass("sticky");
	} else {
		$("nav").removeClass("sticky");
	}
});

// Hamburger Toggler
$(document).ready(function(){
	$(".navbar-toggler").click(function(){
		$(".navbar-toggler").toggleClass("active")
	});
});

// Change color when you click the form.
$(function() {

	$(".form-control").on("focusout", function() {
		changeState($(this));
	});

function changeState($formControl){
	if($formControl.val().length > 0) {
	$(formControl).addClass("is-focused");
	} else {
		$formControl.removeClass("is-focused");
	}
  }

});

// PROGRESS BAR FUNCTION
(function(document) {
	var _bars = [].slice.call(document.querySelectorAll('.bar-inner'));

	_bars.map(function(bar, index) {
		setTimeout(function() {
			bar.style.width = bar.dataset.percent;
		}, 0);
		
	})
})(document);


// BACK TO TOP FUNCTION
$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.back-to-top').fadeIn(200);
		} else {
			$('.back-to-top').fadeOut(200);
		}
	});

	$('.back-to-top').click(function(e) {
		e.preventDefault();

		$('html, body').animate({scrollTop: 0}, 500);
		
	})
});

function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'Please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "my_form.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
