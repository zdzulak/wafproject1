document.addEventListener("DOMContentLoaded", function(){
  let gallery = document.querySelector("ul#Gallery");

  let links = gallery.getElementsByTagName("a");

  alert("test");
  for (var i=0; i<links.length; i++) {

    links[i].onclick = function(){

      let source = this.getAttribute("href");

      let placeholder = document.getElementById("placeholder");

      placeholder.setAttribute("src",source);

      let text = this.getAttribute("title");

      let description = document.getElementById("description")

      description.firstChild.nodeValue = text;

      return false;

    }

  }

});
