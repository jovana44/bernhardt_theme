<?php
/** 
 * 
 * 
* Convert Gallery block into image slider
*
*
*/
add_filter( 'wp_footer', function ( ) {  ?>
	<script>
	document.querySelectorAll(".wp-slider")?.forEach( slider => {
		var src = [];
		var alt = [];
		var img = slider.querySelectorAll("img");
		img.forEach( e => { src.push(e.src);   if (e.alt) { alt.push(e.alt); } else { alt.push("image"); } })
		let i = 0;
		let image = "";
		let myDot = "";
		src.forEach ( e => { image = image + `<div class="wp-slide" > <img decoding="async" loading="lazy" src="${src[i]}" alt="${alt[i]}" > </div>`; i++ })
		i = 0;
		src.forEach ( e => { myDot = myDot + `<span class="wp-dot"></span>`; i++ })
		let dotDisply = "none";
		if (slider.classList.contains("dot")) dotDisply = "block";    
		const main = `<div class="wp-slider">${image}<span class="wp-controls wp-left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100.445" height="23.443" viewBox="0 0 100.445 23.443"><g transform="translate(-682.625 747.338) rotate(-90)"><path class="a" d="M98.722,0H0" transform="translate(735.667 684.348) rotate(90)"/><path class="a" d="M881.616,777.538l11-11.468,11,11.468" transform="translate(-157 -82)"/></g></svg></span> <span class="wp-controls wp-right-arrow" > <svg xmlns="http://www.w3.org/2000/svg" width="100.445" height="23.443" viewBox="0 0 100.445 23.443"><g transform="translate(-682.625 747.338) rotate(-90)"><path class="a" d="M98.722,0H0" transform="translate(735.667 684.348) rotate(90)"/><path class="a" d="M881.616,777.538l11-11.468,11,11.468" transform="translate(-157 -82)"/></g></svg> </span> <div class="dots-con" style="display: ${dotDisply}"> ${myDot}</div></div> `       
		slider.insertAdjacentHTML("afterend",main  );
		slider.remove();
	})
	
	document.querySelectorAll(".wp-slider")?.forEach( slider => { 
	var slides = slider.querySelectorAll(".wp-slide");
	var dots = slider.querySelectorAll(".wp-dot");
	var index = 0;
	slider.addEventListener("click", e => {if(e.target.classList.contains("wp-left-arrow")) { prevSlide(-1)} } )
	slider.addEventListener("click", e => {if(e.target.classList.contains("wp-right-arrow")) { nextSlide(1)} } )
	function prevSlide(n){
	  index+=n;
	  console.log("prevSlide is called");
	  changeSlide();
	}
	function nextSlide(n){
	  index+=n;
	  changeSlide();
	}
	changeSlide();
	function changeSlide(){   
	  if(index>slides.length-1)
		index=0;  
	  if(index<0)
		index=slides.length-1;  
		for(let i=0;i<slides.length;i++){
		  slides[i].style.display = "none";
		  dots[i].classList.remove("wp-slider-active");      
		}
		slides[index].style.display = "block";
		dots[index].classList.add("wp-slider-active");
	}
	 } )
	
	</script>
	
	<?php });