$(document).ready(function(){

    function calcRowPrice($row) {
        var price = $row.find(".basket-full-item__price").text().replace(/[^\d\.]+/g, '')
        var count = $row.find(".basket-full-item__count [name=count]").val()

        $row.find(".basket-full-item__amount").html(price * count)
        $row.trigger(
            $.Event("basket:calcSum")
        )
    }

    $(".basket-full-item").each(function(){
        calcRowPrice(
            $(this)
        )
    })

    $(".basket-full-item__count [name=count]").on("spinner:change", function(){
        calcRowPrice(
            $(this).parents(".basket-full-item")
        )
    })
})
