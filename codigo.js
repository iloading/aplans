var i = 0;
$(document).ready(function () {
    $('#add_more').on('click', function () {

        i++;
        var html = '<div id="append_no_' + i + '" class="animated bounceInLeft m-0">' +
            '<div class="input-group mt-3">' +
            '<div class="input-group-prepend">' +
            '</div>' +
            '<input type="text" name="telemovel" placeholder="Phone Number (Optional)"  class="form-control"/>' +
            '</div>' +
            '<div class="input-group mt-3">' +
            '<div class="input-group-prepend">' +
            '</div>' +
            '<input type="text" name="morada" placeholder="Adress (Optional)" class="form-control"/>' +
            '</div>' +
            '<div class="input-group mt-3">' +
            '<div class="input-group-prepend">' +
            '</div>' +
            '<input type="text" name="cp" placeholder="Zip Code (Optional)" class="form-control"/>' +
            '</div></div>';

        $('#dynamic_container').append(html);
        $('#remove_more').css("display", "flex").fadeIn(function () {
            $(this).show();
        });
        $('#add_more').fadeIn(function () {
            $(this).hide();
        });
    });



    $('#remove_more').on('click', function () {

        $('#append_no_' + i).removeClass('bounceInLeft').addClass('bounceOutRight')
            .fadeOut(function () {
                $(this).remove();
            });
        i--;
        if (i == 0) {
            $('#remove_more').fadeOut(function () {
                $(this).hide()
            });;
        }
        $('#add_more').fadeIn(function () {
            $(this).show();
        });
    });
});
