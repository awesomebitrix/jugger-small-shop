window.addEventListener("load", function(){
    jQuery(function($) {

        $(".slider-with-loupe__image").zoom({
            onZoomIn: function() {
                $(".slider-with-loupe__back").show()
            },
            onZoomOut: function() {
                $(".slider-with-loupe__back").hide()
            }
        });

        $(".slider-with-loupe__previews-item img").on("click", function() {
            var $self = $(this);
            var src = $self.attr("src");
            $(".slider-with-loupe__image img").attr("src", src);

            $(".slider-with-loupe__previews-item").removeClass("active");
            $self.parents(".slider-with-loupe__previews-item").addClass("active");
        })

        $(".slider-with-loupe__previews-item").first().addClass("active");
    })
});
