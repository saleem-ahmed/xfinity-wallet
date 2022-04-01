let navbar = document.querySelector('.navbar');

let links = document.querySelector('.links');



window.onscroll = function() {

    var top = window.scrollY;

    if(top>100){

        navbar.classList.add("newnavbar");

        links.classList.add("newlinks");

    }

    else{

        navbar.classList.remove("newnavbar");

        links.classList.remove("newlinks");

    }

}
