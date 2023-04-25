$(window).on('load', function(){
    if($("#errors-exist").val() == '1'){
        $('#newBroadcastModal').modal('show');
    }
});

$(document).ready(function(){
    
    $('.autoSwitch').each(function(i) {
        $(this).click(function(){
            if($(this).is(':checked')){
                $('.disable').prop("disabled", true);
                $('.disableLabel').css("background-color", "#EAECEF");
                $('.disableLabel').css("color", "#C5C6C8");
                $('.disableNum').prop("value", "");

                // var activeTab = $(this).attr("href");
                // $('.autoSwitch').not(activeTab).css("display","none");
            }
            else{
                $('.disable').prop("disabled", false);
                $('.disableLabel').css("background-color", "#F8F9FA");
                $('.disableLabel').css("color", "black");
                $('.disableNum').prop("value", "1");
            }
        })
    })

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
});