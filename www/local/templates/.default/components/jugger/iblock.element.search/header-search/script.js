$(document).ready(function(){

    function sendData($form){
        $.ajax({
            url: "/api/product/search.php",
            data: $form.serialize(),
            method: 'get',
            success: function(data) {
                $form.find(".header-search-form__autocomplete").html(data)
            }
        })
    }

    $(".header-search-form input[type='text']").on("keyup", function(e) {
        var $text = $(this)
        var $form = $text.parents(".header-search-form");

        if ($text.val().length > 3) {
            sendData($form);
            $form.find(".header-search-form__autocomplete").show();
        }
        else {
            $form.find(".header-search-form__autocomplete").html(null)
        }
    })

    $(".header-search-form input[type='text']").on("blur", function(e){
        var newFocus = e.relatedTarget;
        if (newFocus && $(newFocus).parents(".header-search-form__autocomplete").length) {
            return;
        }

        $(this).parents(".header-search-form")
            .find(".header-search-form__autocomplete")
            .hide();
    })

})
