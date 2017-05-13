jQuery(function($) {
    $(".go-top__btn").on("click", function(){
        $("html, body").animate({
            scrollTop: 0
        })
    })

    $(document).on("scroll", function() {
        if (document.body.scrollTop > 300) {
            $(".go-top__btn").fadeIn("slow")
        }
        else {
            $(".go-top__btn").fadeOut("slow")
        }
    })
    $(".go-top__btn").fadeOut()
})
