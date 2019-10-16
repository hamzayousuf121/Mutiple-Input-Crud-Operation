$(document).ready(function() {
  var counter = 0;
  $("#addrow").on("click", function() {
    var newRow = $("<tr>");
    var cols = "";
    cols += '<td><input type="text" required class="form-control" name="key[]" /></td>';
    cols +=
      '<td><input type="text" required class="form-control" name="value[]" /></td>';
    cols +=
      '<td><input type="button"  class="ibtnDel btn btn-md btn-danger" value="Delete"></td>';
    newRow.append(cols);
    $("table.order-list").append(newRow);
    ++counter;
  });
  $("table.order-list").on("click", ".ibtnDel", function(event) {
    $(this)
      .closest("tr")
      .remove();
    counter -= 1;
  });
});
