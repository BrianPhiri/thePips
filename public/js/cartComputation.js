$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(
  
);
function increment()
  {
    var id = $('#productId').val();;
    if (id.length > 0)
    {
      $.post('compute',{id: id}, function (markup) {
      $('#quantity').text(markup.name);
      });
    }
  }