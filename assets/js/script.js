const API_URL = "https://api.ifri-uac.bj/"

/*==================== TESTIMONIAL ====================*/
let swiper = new Swiper(".swiper", {
	grabCursor: true,
	spaceBetween: 30,
	pagination: {
	    el: '.swiper-pagination',
	    clickable: true,
	    dynamicBullets: true,
	},
	breakpoints: {
	    	375: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        600: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
	}
});



/*==================== PATNERS ====================*/
let mySwiper = new Swiper(".mySwiper", {
	grabCursor: true,
	autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
	pagination: {
	    el: '.swiper-pagination',
	    clickable: true,
	    dynamicBullets: true,
	},
});




//Get the button
var mybutton = document.getElementById("myBtn");

var dj = document.getElementById("okkkkkkkk")

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
	scrollFunction()
	appbar_hide_on_scroll()
}

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function appbar_hide_on_scroll() {
	var currentScrollPos = window.pageYOffset;
  if (currentScrollPos  > 260) {
  	if (prevScrollpos > currentScrollPos) {
	    document.getElementById("okkkkkkkk").style.top = "0";
	    document.getElementById("dndnnfjjfnd").style.height = "260px";
	    document.getElementById("top_pc").style.display = "none";
	  } else {
	    document.getElementById("okkkkkkkk").style.top = "-290px";
	  }
	  prevScrollpos = currentScrollPos;
  } else {
	    document.getElementById("top_pc").style.display = "block";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



