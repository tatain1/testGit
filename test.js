$(function(){
  $('.chgtcle').on("keyup",function()
  {
    // alert('11');
    var val = $(this).val();
    var id = $(this).attr('id');
    if(val.length > 1)
    {
      // alert(val);
      $.ajax({
          url: "geter.php?val="+val,
          })

      .done(function( data ) {
        $('#'+id+'_xx').html(data);
      });
    }

  });

  $('.chgtcle').on("change",function()
  {
    var val = $(this).val();
    var id = $(this).attr('id');

    if (val == "") {
      console.log('Pas de valeur.');
      // On ne fait rien
    } else {
      // Sinon : on maj la bdd

      $.ajax({
        url: "add.php?id="+id+"&val="+val,
      })

      .done(function( data ) {
        console.log(data);
      });
    }
  });
});
