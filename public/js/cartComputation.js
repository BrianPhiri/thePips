$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var timer;

function increment()
{
  timer = setTimeout(function ()
  {
    var product = $('#productId').val();;
    if (product.length > 0)
    {
      $.post('increment',{product: product}, function (markup) {
        $('#quantity').html(markup);
      });
    }
  },5);
}
function down()
{
  clearTimeout(timer);
}
