$(document).ready(function() {

    function numberFormat($elem) {
        var price = +$elem.text();
        $elem.text(price.toLocaleString())
    }

    function calcTotalAmount() {
        var price = 0;
        $(".basket-full-item__amount").each(function() {
            price += +$(this).text().replace(/[^\d\.]/g, '')
        })

        $(".basket-full__total-amount").text(
            price.toLocaleString()
        )
    }

    $(".basket-full-item__price, .basket-full-item__amount").each(function(){
        numberFormat(
            $(this)
        )
    })

    $("tr.basket-full-item").on("basket:calcSum", function(){
        numberFormat(
            $(this).find(".basket-full-item__amount")
        )
        calcTotalAmount()
    })
})
