// Pre Loader
function myPreloader() {
    document.getElementById("loading").style.display = "none";
}

// Scroll Button
// When the user scrolls down 20px from the top of the document,we will show the button
window.onscroll = function() {
    if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
    ) {
        document.getElementById("scroll-btn").style.display = "block";
    } else {
        document.getElementById("scroll-btn").style.display = "none";
    }
};

function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// display either time or data calendar;

// var duration = document.getElementById('durations').value;

$(function() {
    $("#d1").click(function(){
        // console.log($("#d1").val());
        // if($("#d1").val() == "1"){
            $('#dr-1').show();
            $('#dr-2').hide();
        
    });
    $("#d2").click(function(){
        // console.log($("#d1").val());
        // if($("#d1").val() == "1"){
            $('#dr-1').hide();
            $('#dr-2').show();
        
    });
 });


// single image viewer
$(document).ready(function() {
    $(".single-img-gallery").magnificPopup({
        type: "image",
        delegate: "a"
        // gallery: {
        //     enabled: true
        // }
    });
});

// change bg color of dropdown
$("select")
    .change(function() {
        $("option").css("background", "none");
        $("option:selected").css("backgroundColor", "#01a99d");
    })
    .change();

// view detail
new WOW().init();
