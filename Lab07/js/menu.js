$(document).ready(menulistener); // once ready, run clicklistener function

function menulistener() {
    $(".navbar-nav a").click(activatemenu); // run popup function when ".image-thumbnail" is clicked
}

function activatemenu() {
    var currenturl = location.href;
    
    $(".navbar-nav a").each(function() {
        var targeturl = $(this).prop("href");
        if (targeturl === currenturl) {
            $("nav a").parents("li, ul").removeClass("active");
            $(this).parents("li").addClass("active");
            return false;
        }
    });
}