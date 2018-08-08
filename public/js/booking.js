$(document).ready(function()
{
    $(".content-step1").css("display", "none");
    $(".content-step2").css("display", "none");
     $(".btn-click-next").on('click',function()
    {
        $(".content-step").css("display", "none");
        $(".content-step1").css("display", "block");
        $(".content-step2").css("display", "none");
    }); 
     $(".btn-click-next1").on('click',function()
    {
        $(".content-step").css("display", "none");
        $(".content-step1").css("display", "none");
        $(".content-step2").css("display", "block");
    });
     $(".btn-click-prev1").on('click',function()
    {
        $(".content-step").css("display", "none");
        $(".content-step1").css("display", "block");
        $(".content-step2").css("display", "none");
    });
     $(".btn-click-booking").on('click',function()
    {
        $.ajax({
            type: "get",
            url: route('bookings'),
            data:
            {
                name: $('.name-input').val(),
                phone_number: $('.phone-input').val(),
                salon: $('#selectsalon :selected').attr('id'),
                stylist_id: $('#selectstylist :selected').attr('id'),
                timesheet: $('#selecttimesheet :selected').text(),
            _token: '{{ csrf_token() }}' },
            dataType : 'text',
            success: function (data)
            {
                alert('Bạn booking thành công');
            },
            error: function (data, textStatus, errorThrown)
            {
                alert('Bạn chưa nhập Name hoặc phone');
            }
        });
    });
});
