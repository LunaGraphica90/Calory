// Container element
var btnContainer = document.getElementById("navbar");

// Get all link with class="nav-link" inside the container
var links = btnContainer.getElementsByClassName('nav-link');

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
        console.log(current);
      // If there's no active class
      if (current.length > 0) {
        current[0].className = current[0].className.replace(" active", "");
      }
  
      // Add the active class to the current/clicked button
      this.className += " active";
    });
  }