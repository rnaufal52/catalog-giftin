function show(category_id) {
  $.ajax({
    type: "post",
    url: "/Giftin/category",
    data: {
      category_id: category_id,
    },
    dataType: "json",
    success: function (response) {
      if (response.sukses) {
        $(".tambahmodal").html(response.sukses).show();
        // memunculkan modal
        $("#modaledit").modal("show");
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
    },
  });
}
