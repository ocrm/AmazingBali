$(document).ready(function () {

    function pjaxUpdate() {
        var form = $('#tours-filter');
        var url = $(form).attr('action');

        var data = $(form).serializeArray();
        data.push({name: 'ToursFilter[sort]', value: $("select[name='sort']").val()});

        $.pjax.reload({
            container: '#pjax-content',
            history: true,
            type: 'GET',
            data: data,
            url: url
        });
    }

    $("#tours-filter input, #tours-filter select, select[name='sort']").on('change input', function(){
        pjaxUpdate();
    });

    (function a() {

        var isDown = false;

        $(".rd-range__pointer").mousedown(function(){
            isDown = true;
        });

        $(window).mouseup(function(){
            if(isDown){
                console.log(isDown);
                isDown = false;
                pjaxUpdate();
            }
        });
    })();

    $("a[data-target='#booknow']").on('click', function () {
        var formType = $(this).data('form-type');
        var subject = $(this).data('subject');
        var target = $(this).data('target');

        if(formType == 'full'){
            yaCounter45722304.reachGoal('ORDER_B');
        }

        if(formType == 'short'){
            yaCounter45722304.reachGoal('ORDER_T');
        }

        $.ajax({
            url: '/feedback/' + formType + "/",
            success: function(data) {
                $( ".request-form" ).html( data );
                $('.form-subject-header').html(subject);
                $('#feedback-subject').val(subject);
                $(target).modal('show');
            }
        });

        return false;
    });

    $(document).on("beforeSubmit", "#request-form", function () {
        var form = $(this);
        var formType = $(form).data('form-type');
        if(form.find('.has-error').length) {
            return false;
        }

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),

            success: function(data) {

                $('.request-form').html('<div class="request-complite">Спасибо, ваше сообщение отправлено</div>');
                setTimeout(function () {
                    $('#booknow').modal('hide');
                },2000);

                if(formType == 'full'){
                    yaCounter45722304.reachGoal('SENT_B');
                }

                if(formType == 'short'){
                    yaCounter45722304.reachGoal('SENT_TOP');
                }
            },

            error: function(){
                alert('ошибка');
            }
        });
        return false;
    });
});
