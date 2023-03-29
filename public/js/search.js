$(document).ready(function(){

    $('#archived').click(function(event) {
        let color = "#292828";
        $('#search-btn').css("background-color",color);
        $('#search-btn').css("border-color",color);
        $('#search-table-header').css("background-color",color);
        $('#mainbar').css("background-color",color);
    
    });

    $('#current').click(function(event) {
        let color = "#9A0000";
        $('#search-btn').css("background-color",color);
        $('#search-btn').css("border-color",color);
        $('#search-table-header').css("background-color",color);
        $('#mainbar').css("background-color",color);
    });

});