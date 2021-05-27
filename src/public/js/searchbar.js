$(document).ready(function(){
    //navbar dropdown list
    $(".dropdown").click(function(){
        $(".dropdown-list ul").toggleClass("active");
    });

    /*select dropdown list category*/
    $(".dropdown-list ul li").click(function(){
        var icon_text = $(this).html();
        $(".default-option").html(icon_text);
    });

    $(document).on("click",function(event){
        if(!$(event.target).closest(".dropdown").length){
            $(".dropdown-list ul").removeClass("active");
        }
    });

    //hamburger menu
    $('.toggle').click(function(){
        $('.toggle').toggleClass('active');
        $('nav').toggleClass('active');
    });
});



