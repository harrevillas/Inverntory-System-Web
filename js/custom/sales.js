$(document).ready(function() {

  let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

   
   ///////////////////////////////////fetch data///////////////////////////////

   $.getJSON(api+'read_sales.php', function(json) {

    if ($.fn.DataTable.isDataTable('#table_sales')) {
        $('#table_sales').DataTable().destroy();
        $('#table_sales tbody').empty();
    }

  var arr = [];
    for (var i = 0; i < json.length; i++) {
        var obj = {};
        var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-Sales" data-edit="' + json[i].sales_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
        var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-Sales\' data-del=' + json[i].sales_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';


        obj['category_id'] = json[i].cat_name;
        obj['sale_quantity'] = json[i].sale_quantity;
        obj['total'] = json[i].total;
        obj['recorded_by'] = json[i].recorded_by;
        obj['date_created'] = json[i].date_created;

        obj['actions'] = btnEdit;

        arr.push(obj);
    }
    $(document).ready(function() {
        $('#table_sales').DataTable({

            'data': arr,
            'columns': [{
                "data": "category_id"
            },{
                "data": "sale_quantity"
            },{
                "data": "total"
            },{
                "data": "recorded_by"
            },{
                "data": "date_created"
            },{
                "data": "actions"
            }]

        });

    });

  });

  ///////////////////////////////////end fetch data///////////////////////////////

   ///////////////////////////////////add//////////////////////////////////////

      $(document).delegate('#add_sales', 'click', function(event) {
        event.preventDefault();
        
        var category_id = $('#category_id6').val();
        var sale_quantity = $('#sale_quantity').val();
        var total = $('#total').val();
        var recorded_by = $('#edit_encodedby6').val();

        if(category_id == "" ) {
          $('#reqSls').html("<div class='alert alert-danger'Some field are required</div>");
          return;
        }
        
        $.ajax({
          type: "POST",
          contentType: "application/json; charset=utf-8",
          url: api+"create_sales.php",
          data: JSON.stringify({'category_id': category_id, 'sale_quantity': sale_quantity, 'total': total, 'recorded_by': recorded_by}),
          cache: false,
          success: function(result) {
            $('#mgs_Sls').html('<div class="alert alert-success">Sales added successfully</div>');
              setTimeout(function () {  
                   location.reload(true);
                 }, 1000);
                  
          },
          error: function(err) {
            alert(err);
          }
        });
      });


    ////////////////////////////////////end add/////////////////////////////////

//////////////////////////////////////get Categories add/////////////////////////////

$.getJSON(api+'read_categories.php', function(json) {
        $("#category_id6").html("");
        $("#category_id6").append("<option value=''>&larr; Please select Categories &rarr;</option>");
      for (var i = 0; i < json.length; i++) {
            $("#category_id6").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
        }

    });
//////////////////////////////////////end get Categories add/////////////////////////////
  ////////////////////////////////////Top Selling Products///////////////////////////////
  $.getJSON(api+'read_topSellingProducts.php', function(json2) {
    console.log(json2);
       var tr=[];
        for (var c = 0; c < json2.length; c++) {

          tr.push('<tr>');
          tr.push('<td>' + json2[c].cat_name  + '</td>');
          tr.push('<td>' + json2[c].sale_quantity + '</td>');
          tr.push('<td>' + json2[c].total + '</td>');
          tr.push('</tr>');
        }
        $('#table_topSellingProducts').append($(tr.join('')));
    });
    ////////////////////////////////////////end//////////////////////////////////////////
  //////////////////////////////////edit get Id ////////////////////////////////////////

 $(document).on("click", ".btn-rounded", function() {
      var sales_id = $(this).data("edit");
      getID(sales_id);//argument

       function getID(sales_id) {
          $.ajax({
              type: 'GET',
              url: api+"getid_sales.php",
              data: {
                  sales_id: sales_id
              },
              dataType: 'json',
              success: function(response) {
              $('#edit_salesid').val(response.sales_id);
              $('#edit_categoryid6').val(response.category_id);
              $('#edit_salequantity').val(response.sale_quantity);
              $('#edit_total').val(response.total);
              $('#edit_recordedby').val(response.recorded_by);

           }
        });
       }

    });


  //////////////////////////////////////////end edit get Id/////////////////////////////

//////////////////////////////////////get Categories edit/////////////////////////////

$.getJSON(api+'read_categories.php', function(json) {
         $(".category_id6").html("");
         $(".category_id6").append("<option value=''>&larr; Please select Categories &rarr;</option>");
      for (var i = 0; i < json.length; i++) {
         $(".category_id6").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
        }

    });
//////////////////////////////////////end get Categories edit/////////////////////////////

  ///////////////////////////////////////update process////////////////////////////////


      $(document).delegate('#edit_sales', 'click', function(event) {
        event.preventDefault();
         
         var category_id = $('#edit_categoryid6').val();
         var sale_quantity = $('#edit_salequantity').val();
         var total = $('#edit_total').val();
         var recorded_by = $('#edit_recordedby').val();
         var sales_id = $('#edit_salesid').val();

        if(category_id == "") {
          $('#reqSedit').html("<div class='alert alert-danger'>Category Name is required</div>");
          return;
        }
        
        $.ajax({
          type: "PUT",
          contentType: "application/json; charset=utf-8",
          url: api+"update_sales.php",
          data: JSON.stringify({'sales_id' :sales_id, 'category_id': category_id, 'sale_quantity': sale_quantity, 'total': total, 'recorded_by': recorded_by}),
          cache: false,
          success: function(result) {
            $('#mgs_Slesedit').html('<div class="alert alert-success">Sales Updated successfully</div>');
              setTimeout(function () {  
                   location.reload(true);
                 }, 1000);
                  
          },
          error: function(err) {
            alert(err);
          }
        });
      });
  

  ///////////////////////////////////////update process////////////////////////////////
      //////////////////////////////////edit get Id delete ////////////////////////////////////////

   $(document).on("click", ".btn-delete", function() {
    var sales_id = $(this).data("del");
    getdelID(sales_id);//argument

     function getdelID(sales_id) {
        $.ajax({
            type: 'GET',
            url: api+"getid_sales.php",
            data: {
                sales_id: sales_id
            },
            dataType: 'json',
            success: function(response2) {
            $('#del_salesid').val(response2.sales_id);
            $('#del_category_id').val(response2.category_id);

         }
      });
     }

  });

//////////////////////////////////////////end edit get Id delete///////////////////////////////

////////////////////////////////// delete process////////////////////////////////////////

 $(document).delegate('#del_sales', 'click', function(event) {
      event.preventDefault();

       var sales_id = $('#del_salesid').val();

      $.ajax({
        type: "DELETE",
        contentType: "application/json; charset=utf-8",
        url: api+"delete_sales.php?sales_id="+sales_id,
        cache: false,
        success: function(result) {
          $('#mgs_salesdel').html('<div class="alert alert-success">Sale Deleted successfully</div>');
            setTimeout(function () {  
                 location.reload(true);
               }, 1000);
                
        },
        error: function(err) {
          alert(err);
        }
      });
    });


//////////////////////////////////////////end delete process///////////////////////////////


});