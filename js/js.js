$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
    // Define data reload anchor
  var dataReload = document.querySelectorAll("[data-reload]");

  // Language translation
  var language = {
    eng: {
      about: "About"
    },
    fr: {
      about: "A propos"
    }
  };

  var ele = document.getElementById("menuabout");
  // Define language via window hash
  if (window.location.hash){
    if(window.location.hash === "#fr") {
      console.log("Hi")
      console.log(ele)
      document.getElementById("menuabout").textContent = language.fr.about;
    }
  }

  // Define language reload onclick 
  for (i = 0; i <= dataReload.length; i++) {
    console.log(dataReload[i])
    dataReload[i].onclick = function() {
      location.reload(true);
    };
  }
  
})

$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
});

