function datahome() {
  $.ajax({
    url: "/Giftin/ambildata",
    dataType: "json",
    success: function (response) {
      $(".root").html(response.data);
    },
  });
}

$(document).ready(function () {
  datahome();
});
