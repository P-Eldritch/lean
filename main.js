
var button = document.querySelector(".popup-button");
var popupBox = document.querySelector(".popup-box");
var closing = document.querySelector(".x-button");
var okButton = document.querySelector(".ok");
var popupContent = document.querySelector(".popup-content");
var popupContent2 = document.querySelector(".popup-content-2");
var contactForm = document.querySelector(".contact-form");


//burger

document.querySelector(".main-nav").addEventListener("click", function(){
	this.classList.toggle("open");
});
//open pop-up window on click
button.addEventListener("click", function(){
	popupBox.style.display = "block";
	popupContent2.style.display = "block";
	popupContent.style.display = "none";
});

//close pop-up window when 'x' is clicked
closing.addEventListener("click", function(){
	popupBox.style.display = "none";
	contactForm.reset();
});


//close popup window when "click" happens outside that window
document.addEventListener("click", function(){
	if (event.target === popupBox || event.target === okButton) {
        popupBox.style.display = "none";
        contactForm.reset();
     }
})

//VALIDATE EMAIL!!!

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
           },
           fail: function(data)
           {
            alert("an error occured; try again");
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
