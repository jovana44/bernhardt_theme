/*
 *  javascript
 */

(function() {

    // Mobile navigation
    var burgers = document.querySelectorAll('.menu-toggle'),
        html = document.getElementsByTagName("HTML")[0];

    for (var i = 0; i < burgers.length; i++) {
        burgers[i].onclick = function() {
            this.classList.toggle('opened');
            this.closest('header').classList.toggle('menu-opened');
            html.classList.toggle('noscroll');

        }
    } // end mobile nav

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    }); // end smooth scroll


    // copy to clipboard
    function copyToClipboard() {
        var copyText = document.getElementById("current-url");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        var copyValue = copyText.value;
      
        if (window.isSecureContext && navigator.clipboard) {
            navigator.clipboard.writeText(copyValue);
        } else {
             // Use the 'out of viewport hidden text area' trick
        const textArea = document.createElement("textarea");
        textArea.value = copyValue;
            
        // Move textarea out of the viewport so it's not visible
        textArea.style.position = "absolute";
        textArea.style.left = "-999999px";
            
        document.body.prepend(textArea);
        textArea.select();

        try {
            document.execCommand('copy');
        } catch (error) {
            console.error(error);
        } finally {
            textArea.remove();
        }
        }
        
        var tooltip = document.getElementById("tooltip");
        tooltip.innerHTML = "Copied";
        // k2button.innerText = "Text copied";
      }

      
    function mouseoutFunc() {
        var tooltip= document.getElementById("tooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }

    document.getElementById('copy-to-clipboard').addEventListener('click', copyToClipboard);





// tooltip functionality

	// var slides = document.querySelectorAll('.clipboard__icon');
	// if (slides && slides.length > 0) {
	// 	slides.forEach(function (slide) {

	// 		slide.addEventListener('click', function (evt) {

	// 			var tooltips = document.querySelectorAll('.tooltip');
	// 			if (tooltips && tooltips.length > 0) {
	// 				tooltips.forEach(function (tooltip) {
	// 					if (tooltip.classList.contains('show')) {
	// 						tooltip.classList.remove('show');
	// 					}
	// 				});
	// 			}

    //             var currentTooltip = this.querySelector('.tooltip');
	// 			handleTooltipPosition(currentTooltip);
	// 			currentTooltip.classList.add('show');
	// 		});


	// 		slide.addEventListener("mouseover", function (evt) {

	// 			var tooltips = document.querySelectorAll('.tooltip');
	// 			if (tooltips && tooltips.length > 0) {
	// 				tooltips.forEach(function (tooltip) {
	// 					if (tooltip.classList.contains('show')) {
	// 						tooltip.classList.remove('show');
	// 					}
	// 				});
	// 			}

    //             var currentTooltip = this.querySelector('.tooltip');
	// 			handleTooltipPosition(currentTooltip);
	// 			currentTooltip.classList.add('show');
	// 		});
	// 	});
	// }

    // document.addEventListener('click', function (evt) {
	// 	if (evt.target.closest('.clipboard__icon') || evt.target.closest('.tooltip')) {
	// 		console.log('in');
	// 		return;
	// 	}
	// 	console.log('out hide toottip')

	// 	var tooltips = document.querySelectorAll('.tooltip');
	// 	if (tooltips && tooltips.length > 0) {
	// 		tooltips.forEach(function (tooltip) {
	// 			tooltip.classList.remove('show');

	// 		});
	// 	}
	// })


	// const handleTooltipPosition = (tooltip) => {
	// 	//   const windowWidth = window.innerWidth;
	// 	  const windowWidth = document.documentElement.clientWidth;
	// 	  const rect = tooltip.getBoundingClientRect();
	// 	  let left = rect.left;
	// 	  let right = rect.right;

	// 	//   console.log(left);
		  
	// 	  console.log(right);
	// 	  console.log(windowWidth);
	
	// 	  if (left < 24) {
	// 		console.log('left t');
	// 		tooltip.classList.add('left');
	// 		if(left<0){
	// 			var moveLeft = Math.abs(left - 24);
    //             tooltip.style.transform = "translateX("+ moveLeft +"px)";
	// 		}else{
	// 			var moveLeft1 = Math.abs(24 - left);
	// 			tooltip.style.transform = "translateX("+ moveLeft1 +"px)";
	// 		}
	// 	  } else if (right + 24 > windowWidth) {
	// 		console.log('right t');
	// 		tooltip.classList.add('right');
	// 		if(right > windowWidth){
	// 			var moveRight = (windowWidth - (right + 24));
    //             tooltip.style.transform = "translateX("+ (moveRight) +"px)";
	// 		}else{
	// 			var moveRight1 = (windowWidth - right) - 24;
	// 			tooltip.style.transform = "translateX("+ moveRight1 +"px)";
	// 		}
	// 	  } 
		
	//   };



}());





/*
 *  jQuery
 */

(function($) {

    'use strict';

    $(document).ready(function() {


    });
    
}(jQuery));