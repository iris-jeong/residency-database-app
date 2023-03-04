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

    $('#autoSwitch').click(function() {
        if($(this).is(':checked')){
            $('.disable').prop("disabled", true);
            $('.disableLabel').css("background-color", "#EAECEF");
            $('.disableLabel').css("color", "#C5C6C8");
            $('.disableNum').prop("value", "");
        }
        else{
            $('.disable').prop("disabled", false);
            $('.disableLabel').css("background-color", "#F8F9FA");
            $('.disableLabel').css("color", "black");
            $('.disableNum').prop("value", "1");
        }
    })

});