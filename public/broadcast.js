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

    			//Retrieve all the kebab ':' buttons
    // var kebabs = document.querySelectorAll(".kebab");

    //Retrieve all the corresponding kebab menus "edit / delete"
    let kebabMenus = document.querySelectorAll(".kebab-menu");

    $('.kebab').each(function(i){
        $(this).click(function(){
            if (kebabMenus[i].classList.contains("hidden")) {                        
                kebabMenus[i].classList.remove("hidden");
                $('.kebab-menu').not(kebabMenus[i]).addClass("hidden");
            } else {
                kebabMenus[i].classList.add("hidden");
            }
        })
    })

    // window.addEventListener('click', function(e){   
    //     if (document.getElementById('clickbox').contains(e.target)){
    //       // Clicked in box
    //     } else{
    //       // Clicked outside the box
    //     }
    //   });
});