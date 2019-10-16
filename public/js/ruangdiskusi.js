$(document).ready(function(){
    //submit komentar
    $('.submitkomentar').on('click', function(event){
        var formData = new FormData();
        var komentar = $('#isikomentar').val();
        formData.append('isikomentar', komentar);
        formData.append('namatable', namatable);
        var oldloc = location;
        event.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $.ajax({
        url: '#',
        method: 'post',
        data: formData, 
        contentType: false,
        processData: false,
        success: function(result){
            if(result.status == '1'){
                alert(result.response);
                oldloc.reload();
            }else{
            alert(result.response);
            oldloc.reload();
            }
        },
        
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Error: " + XMLHttpRequest.responseText); 
            } 
        });

    });

});
//end ruangdiskusi.js
  