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

    $("#runReportModalBtn").click(function() {
        let reportChecked = $("input[name='runreportsradio']:checked").val();
        if(reportChecked == "demographics"){
            location.href= "search/demographicreport";
        }
        else if(reportChecked == "license"){
            location.href= "search/licensereport";
        }
        else if(reportChecked == "test"){
            location.href= "search/testreport";
        }
    });

});

// function runReportModalBtn_clicked(){
//     let reportChecked = $("input[name='runreportsradio']:checked").val();
//     let url = "{{route('search.demographic')}}";
//     if(reportChecked == "demographics"){
//         window.location.href= url;
//     }
//     else if(reportChecked == "license"){
//         window.location.href= "{{route('search.license')}}";
//     }
//     else if(reportChecked == "test"){
//         window.location.href= "{{route('search.test')}}";
//     }
// }