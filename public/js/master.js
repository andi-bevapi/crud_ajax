$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
})


$('#form-create').on('submit',function(e){
    event.preventDefault();
    var data = $(this).serializeArray();
    $.ajax({
        type : "POST",
        url  : "http://localhost/crud_ajax/public/store" ,
        data : data ,
        success:function(data){
            showData();
        }
    })
})

showData();

function showData(){
    $.ajax({
        type    : "GET" ,
        url     : "http://localhost/crud_ajax/public/show",
        success : function(data){
            $('.show-data').html(data);
        }
    })
}

$(document).on('click','#delete',function(){
    var id = $(this).val();
    $.ajax({
        url   : "http://localhost/crud_ajax/public/delete",
        type  : "POST",
        data  : {'id' : id},
        success : function(data){
            $('#data-row'+id).remove();
        }
    })
})

$(document).on('click','#edit',function(){
    var id = $(this).val();
   
    $.ajax({
        url   : "http://localhost/crud_ajax/public/get_data",
        type  : "GET",
        data  : {'id' : id},
        success : function(data){
           var formupdate = $('#formupdate');
           formupdate.find('#id').val(data.id);
           formupdate.find('#name').val(data.name);
           formupdate.find('#body').val(data.body);
           formupdate.find('#category_id').val(data.category_id);
        }
    })
})


$('#formupdate').on('submit',function(e){
    event.preventDefault();
    var data = $(this).serializeArray();
    $.ajax({
        type : "POST",
        url  : "http://localhost/crud_ajax/public/update",
        data : data ,
        success:function(data){
            $('#formupdate').trigger('reset');
            showData();
        }
    })
})