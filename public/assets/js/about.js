function dataabout() {
    $.ajax({
        url: "/About/ambildata",
        dataType: "json",
        success: function (response) {
            $('.root').html(response.data);
        }
    });
}


$(document).ready(function () {
    dataabout();
})