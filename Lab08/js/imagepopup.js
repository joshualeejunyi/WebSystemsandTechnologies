$(document).ready(clicklistener); // once ready, run clicklistener function

function clicklistener() {
    $(".image-thumbnail").click(popup); // run popup function when ".image-thumbnail" is clicked
}   
   
function popup() {
    var srcname = $(this).attr("src"); // get source image filename
    var newfile = srcname.replace("small", "large"); // replace with large img

    if ($(this).parent().children("span").children("img").hasClass("image-popup")) { // traverse the elements to check if the image popup already exists
        $(this).parent().children("span").remove(); // remove if it already exists
    } else {
        var printimg = "<span><img class=\"image-popup\"src=\"" + newfile + "\"></img></span>";
        $(this).after(printimg); // create img if it doesn't exist
    }
}