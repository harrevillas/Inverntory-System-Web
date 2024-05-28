

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_product', 'click', function(event) {
                    event.preventDefault();
                    //alert('click');
                    
                    var item_code = $('#item_code').val();
                    var full_name = $('#full_name').val();
                    var units_id = $('#units_id').val();
                    var category_id = $('#category_id').val();
                    var sales_price = $('#sales_price').val();
                    var stock_quantity = $('#stock_quantity').val();
                  
                    
                    if(item_code == "" || full_name == "" || units_id == "" || category_id == "" || sales_price == "" || stock_quantity == "" ) {
                      $('#reqProd').html("<div class='alert alert-danger'>All fields are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_product.php",
                      data: JSON.stringify({
                                             'item_code': item_code,
                                             'full_name': full_name,
                                             'units_id': units_id,
                                             'category_id': category_id,
                                             'sales_price': sales_price,
                                             'stock_quantity': stock_quantity
                                             
                                             
                                 
                                          }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_prod').html('<div class="alert alert-success">Product added successfully</div>');
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



              //////////////////////////////////////get Units add/////////////////////////////

            $.getJSON(api+'read_units.php', function(json) {
                    $("#units_id").html("");
                    $("#units_id").append("<option value=''>&larr; Please select Units &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $("#units_id").append("<option value=" + json[i].units_id + ">" + json[i].name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Units add/////////////////////////////

          //////////////////////////////////////get Categories add/////////////////////////////

            $.getJSON(api+'read_categories.php', function(json) {
                    $("#category_id").html("");
                    $("#category_id").append("<option value=''>&larr; Please select Categories &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $("#category_id").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Categories add/////////////////////////////
               
               ///////////////////////////////////fetch data///////////////////////////////
               $.getJSON(api+'read_product.php', function(json) {

                if ($.fn.DataTable.isDataTable('#table_product')) {
                    $('#table_product').DataTable().destroy();
                    $('#table_product tbody').empty();
                }
            
                var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-Product" data-edit="' + json[i].product_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
                    var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-Product\' data-del=' + json[i].product_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';
            
                    obj['item_code'] = json[i].item_code;
                    obj['full_name'] = json[i].full_name;
                    obj['name'] = json[i].name;
                    obj['cat_name'] = json[i].cat_name;
                    obj['sales_price'] = json[i].sales_price;
                    obj['stock_quantity'] = json[i].stock_quantity;
            
                    obj['actions'] = btnEdit + " " + btnDelete;
            
                    arr.push(obj);
                }
            
                $('#table_product').DataTable({
                    'data': arr,
                    'columns': [{
                        "data": "item_code"
                    },{
                        "data": "full_name"
                    },{
                        "data": "name"
                    },{
                        "data": "cat_name"
                    },{
                        "data": "sales_price"
                    },{
                        "data": "stock_quantity"
                    },{
                        "data": "actions"
                    }]
                });
            
            });
            
            

              ///////////////////////////////////end fetch data///////////////////////////////


            //////////////////////////////////////inventory count///////////////////////////
            $.getJSON(api+'read_productInventory.php', function(json2) {
              console.log(json2);
                 var tr=[];
                  for (var c = 0; c < json2.length; c++) {

                    if(json2[c].expired_date >= '2022-10-27'){
                       var dates =  "<span class='badge badge-danger' style='border-radius: 5px'>Expired</span>";
                      }else{
                       var dates = json2[c].expired_date;
                     }
                    tr.push('<tr>');
                    tr.push('<td>' + json2[c].item_code  + '</td>');
                    tr.push('<td>' + json2[c].name  + '</td>');
                    tr.push('<td>' + dates + '</td>');
                    tr.push('<td>' + json2[c].uname  + '</td>');
                    tr.push('</tr>');
                  }
                  $('#table_productexpired').append($(tr.join('')));
              });
            //////////////////////////////////////end inventory count///////////////////////////

          //////////////////////////////////////inventory Low Stock///////////////////////////
            $.getJSON(api+'read_productInventory.php', function(json2) {
              console.log(json2);
                 var tr=[];
                  for (var c = 0; c < json2.length; c++) {

                    if(json2[c].stock_quantity <=10){
                       var stock_quantity=  "<span class='badge badge-danger' style='border-radius: 5px'>Low Stock Item</span>";
                      }else{
                       var stock_quantity = json2[c].stock_quantity;
                     }
                    tr.push('<tr>');
                    tr.push('<td>' + json2[c].item_code  + '</td>');
                    tr.push('<td>' + json2[c].full_name  + '</td>');
                    tr.push('<td>' + json2[c].name  + '</td>');
                    tr.push('<td>' + stock_quantity + '</td>');
                    tr.push('<td>' + json2[c].uname  + '</td>');
                    tr.push('</tr>');
                  }
                  $('#table_productlowstock').append($(tr.join('')));
              });
            //////////////////////////////////////end inventory Low Stock///////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var product_id = $(this).data("edit");
                  getID(product_id);//argument

                   function getID(product_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_product.php",
                          data: {
                              product_id: product_id 
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_productid').val(response.product_id);
                          $('#edit_itemcode').val(response.item_code);
                          $('#edit_fullname').val(response.full_name);
                          $('#edit_unitsid4').val(response.units_id);
                          $('#edit_categoryid').val(response.category_id);
                          $('#edit_salesprice').val(response.sales_price);
                          $('#edit_stockquantity').val(response.stock_quantity);
                         
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

                     //////////////////////////////////////get Units edit/////////////////////////////

            $.getJSON(api+'read_units.php', function(json) {
                    $(".units_id").html("");
                    $(".units_id").append("<option value=''>&larr; Please select Units &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $(".units_id").append("<option value=" + json[i].units_id + ">" + json[i].name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Units edit/////////////////////////////

          //////////////////////////////////////get Categories edit/////////////////////////////

            $.getJSON(api+'read_categories.php', function(json) {
                    $(".category_id").html("");
                    $(".category_id").append("<option value=''>&larr; Please select Categories &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $(".category_id").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Categories edit/////////////////////////////


              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_product', 'click', function(event) {
                    event.preventDefault();

                     var product_id = $('#edit_productid').val();
                     var item_code = $('#edit_itemcode').val();
                     var full_name = $('#edit_fullname').val();
                     var units_id = $('#edit_unitsid4').val();
                     var category_id = $('#edit_categoryid').val();
                     var sales_price = $('#edit_salesprice').val();
                     var stock_quantity = $('#edit_stockquantity').val();
                  

                    if(item_code == "") {
                      $('#reqPdit').html("<div class='alert alert-danger'>Item Code is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_product.php",
                               data: JSON.stringify({
                                             'product_id': product_id,
                                             'item_code': item_code,
                                             'full_name': full_name,
                                             'units_id': units_id,
                                             'category_id': category_id,
                                             'sales_price': sales_price,
                                             'stock_quantity': stock_quantity,
                                            
                                 
                                          }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Pedit').html('<div class="alert alert-success">Product Updated successfully</div>');
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
                  var product_id = $(this).data("del");
                  getdelID(product_id);//argument

                   function getdelID(product_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_product.php",
                          data: {
                              product_id: product_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_productid').val(response2.product_id);
                          $('#del_itemcode').val(response2.item_code);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#del_product', 'click', function(event) {
                    event.preventDefault();

                     var product_id = $('#del_productid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_product.php?product_id="+product_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Pdel').html('<div class="alert alert-success">Product Deleted successfully</div>');
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