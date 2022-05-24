$(document).ready(function(){
    // on click of submit button
    $('.my-3').hide();
    $('#contact-form-post').on('submit', function(e) {       
        e.preventDefault();
        const postdata = $('#contact-form-post').serialize();
        
        $.ajax({
            url: 'saveContactInfo',
            type: 'POST',
            data: postdata,
            datatype: 'json'
        })
        .done(function (data) { console.log(data); })
        .fail(function (jqXHR, textStatus, errorThrown) { serrorFunction(); });
    });

    $('.searchPropertyModel').on('click', function(){
        $('#exampleModal').modal('show');
    });
    
    
    
    $('#stataID').on('change', function(){
        const statevalue = $(this).val();
        const districtvalue = $('#districtID').val();
        const mandalvalue = $('#mandalID').val();
        getPropertyList(statevalue, districtvalue, mandalvalue);
      });

      $('#districtID').on('change', function(){
        const statevalue = $('#stataID').val();
        const districtvalue = $(this).val();
        const mandalvalue = $('#mandalID').val();
        getPropertyList(statevalue, districtvalue, mandalvalue);
      })

      $('#mandalID').on('change', function(){
        const statevalue = $('#stataID').val();
        const districtvalue = $('#districtID').val();
        const mandalvalue = $(this).val();
        getPropertyList(statevalue, districtvalue, mandalvalue);
      })
});

function getPropertyList(sid, did, mid){  
    $.ajax({
    url: 'getPropertyData',
    data: {'state' : sid , 'district' : did, 'mandalam' : mid },
    type: 'post', 
    dataType: 'json',
    beforeSend: function () {
      $('#propertiesTable').html('<div class="text-center mrgA padA"><i class="fa fa-spinner fa-pulse fa-4x fa-fw"></i></div>');
    },       
    success: function (html) {
      var dataTable='<table id="order-datatable" class="table table-striped" cellspacing="0" width="100%"></table>';
      $('#propertiesTable').html(dataTable);    
      var table = $('#order-datatable').DataTable({
        data: html.data,
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": true,
        "bAutoWidth": true,
        columns: [
          { title: "Crop Type", "width": "17%"},
          { title: "Owner Type", "width": "17%"},
          { title: "Extent", "width": "15%"},
          { title: "Price Per Cent", "width": "15%"},
                { title: 'Action', "width": "15%" }
        ],        
      });
    }    
  });         
} 