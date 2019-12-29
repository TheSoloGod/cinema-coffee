$(document).ready(function () {

    now = new Date();

    checkTime();

    $('.time').on('click', function() {
        $('.time').removeClass(['bg-success', 'text-light']);
        selectTime($(this, 'content'));
    })
});

function selectTime(obj){
    obj.addClass(['bg-success', 'text-light']);
    $('#time').val(obj.text());
}

function checkTime() {
    var times = [];
    $.each(timeHistory, function (index, value) { 
         times.push(value.time);
    });
    $.each($('td'), function (index, value) { 
        if (Number($(this).text().substr(0,2)) <= now.getHours() || times.indexOf($(this).text()) != -1) {
            $(this).removeClass('time').addClass(['bg-secondary'])
        }
    });
}
