$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.switch button').click(function () {
    if (!$(this).hasClass('active')) {
        $('.switch button').removeClass('active');
        $('.content-wrap .item').hide();
        $(this).addClass('active');
        $('.content-wrap .item[data-id="'+ $(this).data('content') +'"]').fadeIn(300);
    }
});

$('#addEvent').click(function () {
    $.ajax({
        url: $(this).data('action')
    })
    .done(function (data) {
        var modal = $('#modal');
        modal.find('.modal-title').text('Add event');
        modal.find('.modal-body').html(data);
        modal.find('#saveButton').attr('data-action', 'events');
        modal.modal('show');
    });
});

$('#addTemplate').click(function () {
    $.ajax({
        url: '/templates/create'
    })
    .done(function (data) {
        var modal = $('#modal');
        modal.find('.modal-title').text('Add template');
        modal.find('.modal-body').html(data);
        modal.find('#saveButton').attr('data-action', 'templates');
        modal.modal('show');
    });
});

$('#saveButton').click(function () {
    $.ajax({
        type: 'POST',
        url: $(this).attr('data-action'),
        data: $('#modal form').serialize()
    });
});