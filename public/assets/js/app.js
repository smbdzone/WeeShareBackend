  //preview img
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };


  $(document).ready(function() {
    $('.select2').select2();
});

var countriesList = 'https://cdn.jsdelivr.net/npm/world_countries_lists@latest/data/en/countries.json';

$.ajax({
    type: 'GET',
    url: countriesList,
    dataType: 'json',
    success: function(response) {
        $('.country').select2({
          data: response.map(e => ({
            id: e.name,
            text: e.name
          })),
          width: 200,
          dropdownAutoWidth: true
        });
    },
    error: function() {},
    complete: function() {}
});

$(document).ready(function () {
  $('#example').DataTable();
});


