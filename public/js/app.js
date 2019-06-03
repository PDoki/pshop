
String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');

};

$('.btn-add-to-cart').on('click', function () {

    $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: { pid: $(this).data('id') },
        success: function (res) {
            console.log('res');
            window.location.reload();
        }
    })

});


$('#cartIcon').on('click', function () {

    $.ajax({
        url: BASE_URL + 'shop/in-cart',
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            var u = '';
            res = Object.values(res);

            for (var x = 0; x < res.length; x++) {
                var c = res[x];
                u += '<li>'
                    + '<div class="basket-item">' + '<div class="row">' + '<div class="col-md-4 col-sm-4">' + '<div class="selected-item mr-5">'
                    + '<img width="150" src="' + BASE_URL + 'images/' + c.attributes['pimage'] + '" alt="">'
                    + '</div>'
                    + '<div class="selected-item-price">' + '$' + c.price + '</div></div>'

                    + '<div class="col-md-8 col-sm-8">'
                    + '<h4>' + c.name + '</h4>'
                    + '<p>' + c.attributes['article'] + '</p>'
                    + '</div></div>' + '</li>';
            }
            $('#inCartUl').html(u);
        }
    })
});


$('.origin-text').on('focusout', function () {
    $('.target-text').val($(this).val().permalink());
});

$('#gothere').on('click', function () {
    window.location = BASE_URL + 'shop';
});
