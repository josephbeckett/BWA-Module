$(document).ready(function () {
    var path = window.location.pathname;
    var page = path.split("/").pop();

    
    $('.favourite').on('click', function () {
        var carID = $(this).data('id');
        $car = $(this);

        $.ajax({
            url: page,
            type: 'post',
            data: {
                'favourite': 1,
                'carID': carID
            },
            success: function (response) {
                $car.addClass('hidden');
                $car.siblings().removeClass('hidden');
            }
        });
    });

    $('.unfavourite').on('click', function () {
        var carID = $(this).data('id');
        $car = $(this);

        $.ajax({
            url: page,
            type: 'post',
            data: {
                'unfavourite': 1,
                'carID': carID
            },
            success: function (response) {
                $car.addClass('hidden');
                $car.siblings().removeClass('hidden');
            }
        });
    });
});

