$(document).ready(function(){

    $('.tab-menu a').click(function(event) {
    event.preventDefault();
    
    // Toggle active class on tab buttons
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    
    // display only active tab content
    var activeTab = $(this).attr("href");
    $('.tabcontent').not(activeTab).css("display","none");
    $(activeTab).fadeIn();
    
    });

});