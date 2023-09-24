$(window).scroll(function() {
    if ($(this).scrollTop() > 200){  
        $(".topnav").addClass("sticky");
    }
    else{
        $('.topnav').removeClass("sticky");
    }
});

$(window).on("scroll", function() {
    var s = 82 - Math.min(50, $(document).scrollTop());
    $(".logonav").width(s).height(s);
});