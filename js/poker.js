$(function() {
    $('.mask').on('click', function() {
        location.reload();
    });

    jQuery('.restart-btn').on('click', function() {
        location.href = jQuery(this).attr('data-url');
    });
});