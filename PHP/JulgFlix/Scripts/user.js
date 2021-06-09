$(document).ready(function() {
  show();
})

function show() {
  $("#show").on('click', function() {
    $("#exampleModal").fadeIn(3500).modal('show');
  })
}
