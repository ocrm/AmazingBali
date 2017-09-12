$('input[name="x"], input[name="y"]').on('change mousemove', function () {
    var val = $(this).val();
    var name = $(this).attr('name');
    var id = $(this).data('id');
    var dot = $('.dot-city[data-target=' + id + ']');
    if(name == 'x') {
        $(dot).css({'left': val + '%'});
    }
    if(name == 'y') {
        $(dot).css({'top': val + '%'});
    }
});

$('.map-save-btn').on('click', function () {
    var parent = $(this).parent().parent();
    var id = $(parent).data('id');
    var x = $(parent).find('input[name="x"]').val();
    var y = $(parent).find('input[name="y"]').val();
    $.get( "/admin/map/live-update", { id: id, x: x, y: y } );
});