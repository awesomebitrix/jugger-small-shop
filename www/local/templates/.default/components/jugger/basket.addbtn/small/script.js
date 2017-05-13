$(document).ready(function() {

    $(".add-to-basket").on("click", function(){
        var $btn = $(this);
        var $form = $btn.parents("form").last();

        $btn.prop("disabled", 1)

        $.ajax({
            url: $form.attr('action'),
            data: $form.serialize(),
            method: $form.attr('method'),
            success: function(data) {
                console.log(data);

                $btn.removeClass("btn-primary")
                $btn.addClass("btn-success")
                $btn.css("opacity", 1)
                $btn.text("Добавлен")
            }
        })
    })

})
