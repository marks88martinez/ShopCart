$( "#image_img" ).click(function() {
    id = $('#image_id').val();
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    $.ajax({
        type:'POST',
        url:'/admin/categoria/categoriaEliminar/'+id,
        success:function(data) {
            alert('Imagen Eliminado')
            location.reload()
        }
     });

});

