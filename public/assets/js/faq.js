function datafaq() {
    $.ajax({
        url: "/Faqs/ambildata",
        dataType: "json",
        success: function (response) {
            $('.root').html(response.data);
        }
    });
}


$(document).ready(function () {
    datafaq();
})