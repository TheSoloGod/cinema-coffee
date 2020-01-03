$(document).ready(function () {

    now = new Date();

    checkTime(2);

    $('#agency_id').on('change', function() {
        checkTime($(this).val())
    })
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function selectTime(obj){
    obj.addClass(['bg-success', 'text-light']);
    $('#time').val(obj.text());
}

function checkTime(agencyId) {
    $('#time').val('');
    $('td').removeClass(['bg-success', 'text-light']);
    $.ajax({
        url: '/getTimeHistory',
        type: 'POST',
        data: {
            agencyId: agencyId
        },
        success: function(data) {
            times = [];
            $.each(data, function(index, value) {
                times.push(value.time);
            })
            $.each($('td'), function (index, value) { 
                if (Number($(this).text().substr(0,2)) <= now.getHours() || times.indexOf($(this).text()) != -1) {
                    $(this).removeClass('time').addClass(['bg-secondary'])
                } else {
                    $(this).addClass('time').removeClass(['bg-secondary'])
                }
            });
        },
        complete: function() {
            $('td').on('click', function() {
                if ($(this).hasClass('time')) {
                    $('.time').removeClass(['bg-success', 'text-light']);
                    selectTime($(this));
                }                
            })            
        }
    })
}
