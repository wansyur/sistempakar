var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
   showDivs(slideIndex += n);
}

function currentDiv(n) {
   showDivs(slideIndex = n);
}

function showDivs(n) {
   var i;
   var x = document.getElementsByClassName("gambar");
   var dots = document.getElementsByClassName("demo");
   if (n > x.length) {slideIndex = 1}
   if (n < 1) {slideIndex = x.length}
   for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-white", "");
   }
   x[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " w3-white";
}

var modal = document.getElemenById('modal-wrapper');
window.onclick = function(event) {
   if (event.target == modal) {
      modal.style.display = "none";
   }
}



$('.form').find('input').on('keyup blur focus', function (e) {  
   var $this = $(this), label = $this.prev('label');
   if (e.type === 'keyup') {
      if ($this.val() === '') {
	 label.removeClass('active highlight');
      }
      else {
	 label.addClass('active highlight');
      }
   } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
	 label.removeClass('active highlight'); 
      } else {
	 label.removeClass('highlight');   
      }   
   } else if (e.type === 'focus') {   
      if( $this.val() === '' ) {
	 label.removeClass('highlight'); 
      } 
      else if( $this.val() !== '' ) {
	 label.addClass('highlight');
      }
   }
});





$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});




function readURL(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
	 $('#masukan-gambar')
	    .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
   }
}

var modal = document.getElemenById('akun-session');
window.onclick = function(event) {
   if (event.target == modal) {
      modal.style.display = "none";
   }
}

var modal = document.getElemenById('forum-notif');
window.onclick = function(event) {
   if (event.target == modal) {
      modal.style.display = "none";
   }
}





