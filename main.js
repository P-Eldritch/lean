
var button = document.querySelectorAll(".popup-button");
var popupBox = document.querySelector(".popup-box");
var closing = document.querySelector(".x-button");
var okButton = document.querySelector(".ok");
var popupContent = document.querySelector(".popup-content");
var popupContent2 = document.querySelector(".popup-content-2");
var contactForm = document.querySelector(".contact-form");

/*--------------------------EVENTS----------------------------*/

//burger
document.querySelector(".main-nav").addEventListener("click", function(){
	this.classList.toggle("open");
});

//open pop-up window on click
for(var i = 0; i<button.length; i++) {
button[i].addEventListener("click", function(){
	popupBox.style.display = "block";
	popupContent.style.display = "block";
	popupContent2.style.display = "none";
});}

//close pop-up window when 'x' is clicked
closing.addEventListener("click", function(){
	close();
});

//close popup window when "click" happens outside that window
document.addEventListener("click", function(){
	if (event.target === popupBox || event.target === okButton) {
		close();
     }
});

function close() {
	popupBox.style.display = "none";
	contactForm.reset();
};
/*----------------------AJAX+jQUERY--------------------------*/
//submit form
$(contactForm).submit(function(e) {

    var url = "configDB.php"; 

    $.ajax({
           type: "POST",
           url: url,
           data: $(".contact-form").serialize(), 
           success: function(data)
           {
            popupContent.style.display = "none";
     		popupContent2.style.display = "block";
           }
         });

// avoid sending form
    e.preventDefault(); 
});
