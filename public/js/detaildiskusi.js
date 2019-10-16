$(document).ready(function(){
    
    //create ruang diskusi
    // $('#formruangdiskusicreate').on('submit', function(event){
    //    var myForm = document.getElementById('formruangdiskusicreate');
    //    var formData = new FormData(myForm);
    //    var oldloc = location;
    //    event.preventDefault();
    //    $.ajaxSetup({
    //       headers: {
    //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //       }
    //   });
    //   $.ajax({
    //       url: ruangdiskusiCreateUrl,
    //       method: 'post',
    //       data: formData, 
    //       contentType: false,
    //       processData: false,
    //       success: function(result){
    //         $('#modalCreateRuangdiskusi').modal('hide');
    //         alert(result.respond);
    //         myForm.reset();
    //         oldloc.reload();
           
    //       },
          
    //       error: function(XMLHttpRequest, textStatus, errorThrown) { 
    //         alert("Error: " + XMLHttpRequest.responseText); 
    //         myForm.reset();
    //         } 
    //     });

    //    });
       //end formcreatearsip

       //submit komentar
    //    $('.submitkomentar').on('click', function(event){
    //        var formData = new FormData();
    //        var komentar = $('#isikomentar').val();
    //        formData.append('isikomentar', komentar);
    //        formData.append('namatable', namatable);
    //        var oldloc = location;
    //        event.preventDefault();

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });

    //     $.ajax({
    //         url: ruangdiskusiSubmitkomentarUrl,
    //         method: 'post',
    //         data: formData, 
    //         contentType: false,
    //         processData: false,
    //         success: function(result){
    //           if(result.status == '1'){
    //               alert(result.response);
    //               oldloc.reload();
    //           }else{
    //             alert(result.response);
    //             oldloc.reload();
    //           }
    //         },
            
    //         error: function(XMLHttpRequest, textStatus, errorThrown) { 
    //           alert("Error: " + XMLHttpRequest.responseText); 
    //           } 
    //       });

    //    });

       //get arsip data
       $('.editKomentar').on('click', function(event){
            var komentar = $(this).parent().parent().parent().find('p.komentar').text();
            var usernameraw = $(this).parent().parent().parent().find('p.username').text();
            var username = usernameraw.split(" ")[0];
            var updatedat = $(this).parent().parent().parent().find('span.time-right').text();
            var ruangdiskusi = $("h3").first().text();
            hkomentar = komentar;
            husername = username;
            hupdatedat = updatedat;
            hruangdiskusi = ruangdiskusi;

            var link = $(this).attr('name');
            var oldloc = location;
            var formData = new FormData();
            formData.append('username', username);
            formData.append('updatedat', updatedat);
            formData.append('ruangdiskusi', ruangdiskusi);
            formData.append('komentar', komentar);

            $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });

           $.ajax({
               url : link,
               method : 'post',
               data : formData,
               contentType: false,
               processData: false,
               dataType: 'json',
               success: function(result){
                    $("#ukomentar").val(hkomentar);
               },

               error: function(XMLHttpRequest){
                alert("Error: " + XMLHttpRequest.responseText); 
               }

           });
       });
       //end getArsip

      //form update ruang diskusi
      $('#formkomentarupdate').on('submit', function(event){
              var myForm = document.getElementById('formkomentarupdate');
              var oldloc = location;
              var formData = new FormData(myForm);

              hkomentar = $("#ukomentar").val()
              formData.append('husername', husername);
              formData.append('hupdatedat', hupdatedat);
              formData.append('hruangdiskusi', hruangdiskusi);
              formData.append('hkomentar', hkomentar);
  
              event.preventDefault();
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              $.ajax({
                  url: $(this).attr('action'),
                  method: 'post',
                  data: formData, 
                  contentType: false,
                  processData: false,
                  success: function(result){
                      $('#modalUpdateKomentar').modal('hide');
                      alert(result.respond);
                      myForm.reset();  
                      oldloc.reload();     
                  },
                  
                  error: function(XMLHttpRequest, textStatus, errorThrown) { 
                      alert("Error: " + XMLHttpRequest.responseText); 
                      myForm.reset();
                      } 
              });
          });
        //end formupdateruangdiskusi

        //hapus arsip
        $('.deleteKomentar').on('click', function(event){
           
            var link = $(this).attr('name');
            var oldloc = location;

            var dkomentar = $(this).parent().parent().parent().find('p.komentar').text();
            var usernameraw = $(this).parent().parent().parent().find('p.username').text();
            var dusername = usernameraw.split(" ")[0];
            var dupdatedat = $(this).parent().parent().parent().find('span.time-right').text();
            var druangdiskusi = $("h3").first().text();

            var formData = new FormData();
            formData.append('dusername', dusername);
            formData.append('dupdatedat', dupdatedat);
            formData.append('druangdiskusi', druangdiskusi);
            formData.append('dkomentar', dkomentar);

            $userChoosen = confirm("Apakah Anda Yakin Akan Menghapus Komentar Ini ?");

            if($userChoosen){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
                $.ajax({
                    url : link,
                    method : 'post',
                    data : formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(result){
                        alert(result.respond);
                        oldloc.reload();
                    },
    
                    error: function(XMLHttpRequest){
                        alert("Error: " + XMLHttpRequest.responseText); 
                    }
    
                });
            }

        });
        //end hapus 

});
//end ruangdiskusi.js
  