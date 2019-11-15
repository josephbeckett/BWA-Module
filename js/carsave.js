$(document).ready(function () {
    // when the user clicks on like
    $('.favourite').on('click', function () {
        var carID = $(this).data('id');
        $carbutton = $(this);

        $.ajax({
            url: 'carsearch.php',
            type: 'post',
            data: {
                'favourite': 1,
                'selectcar': carID
            },
            success: function (response) {
                $carbutton.addClass('hidden');
                $carbutton.siblings().removeClass('hidden');
            }
        });
    });

    // when the user clicks on unlike
    $('.unfavourite').on('click', function () {
        var carID = $(this).data('id');
        $carbutton = $(this);

        $.ajax({
            url: 'carsearch.php',
            type: 'post',
            data: {
                'unfavourite': 1,
                'selectcar': carID
            },
            success: function (response) {
                $carbutton.addClass('hidden');
                $carbutton.siblings().removeClass('hidden');
            }
        });
    });
});
