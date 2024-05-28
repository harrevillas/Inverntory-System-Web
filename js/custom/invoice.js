
    
    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_invoice', 'click', function(event) {
                    event.preventDefault();
                    
                    var order_id = $('#order_id').val();
                    var product = $('#product').val();
                    var product_name = $('#product_name').val();
                    var encoded_By = $('#encoded_By').val();
                    var total_amount = $('#total_amount').val();
                    var status = $('#status').val();
                   
                    
                    if(total_amount == "" ) {
                      $('#reqIV').html("<div class='alert alert-danger'Some field are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_invoice.php",
                      data: JSON.stringify({'order_id': order_id, 'product': product, 'product_name': product_name, 'encoded_By': encoded_By, 'total_amount': total_amount, 'status': status}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Inv').html('<div class="alert alert-success">Order added successfully</div>');
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
               
               ///////////////////////////////////fetch data///////////////////////////////

               $.getJSON(api+'read_invoice.php', function(json) {

                if ($.fn.DataTable.isDataTable('#table_invoice')) {
                    $('#table_invoice').DataTable().destroy();
                    $('#table_invoice tbody').empty();
                }
                

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-Invoice" data-edit="' + json[i].invoice_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
                    var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-Invoice\' data-del=' + json[i].invoice_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';
            

                    obj['order_id'] = json[i].order_id;
                    obj['product'] = json[i].product;
                    obj['product_name'] = json[i].product_name;
                    obj['encoded_By'] = json[i].encoded_By;
                    obj['total_amount'] = json[i].total_amount;
                    obj['status'] = json[i].status;
                    obj['date_created'] = json[i].date_created;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_invoice').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "order_id"
                        },{
                            "data": "product"
                        },{
                          "data": "product_name"
                        },{
                            "data": "encoded_By"
                        },{
                            "data": "total_amount"
                        },{
                            "data": "status"
                        },{
                            "data": "date_created"
                        },{
                            "data": "actions"
                        }]

                    });

                });
                
              });

              ///////////////////////////////////end fetch data///////////////////////////////
              //////////////////////////////////recent orders/////////////////////////////////
              $.getJSON(api+'read_recentOrders.php', function(json2) {
                console.log(json2);
                   var tr=[];
                    for (var c = 0; c < json2.length; c++) {
  
                      tr.push('<tr>');
                      tr.push('<td>' + json2[c].order_id + '</td>');
                      tr.push('<td>' + json2[c].product + '</td>');
                      tr.push('<td>' + json2[c].product_name + '</td>');
                      tr.push('<td>' + json2[c].encoded_By  + '</td>');
                      tr.push('<td>' + json2[c].date_created  + '</td>');
                      tr.push('<td>' + json2[c].status + '</td>');
                      tr.push('<td>' + json2[c].total_amount  + '</td>')
                      tr.push('</tr>');
                    }
                    $('#table_recentOrders').append($(tr.join('')));
                });
            /////////////////////////////////////end/////////////////////////////////////////////////
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var invoice_id = $(this).data("edit");
                  getID(invoice_id);//argument

                   function getID(invoice_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_invoice.php",
                          data: {
                              invoice_id: invoice_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_invoiceid').val(response.invoice_id);
                          $('#edit_orderid').val(response.order_id);
                          $('#edit_product').val(response.product);
                          $('#edit_productname').val(response.product_name);
                          $('#edit_encodedBy').val(response.encoded_By);
                          $('#edit_totalamount').val(response.total_amount);
                          $('#edit_status').val(response.status);
                         
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_invoice', 'click', function(event) {
                    event.preventDefault();

                         var order_id = $('#edit_orderid').val();
                         var product = $('#edit_product').val();
                         var product_name = $('#edit_productname').val();
                         var encoded_By = $('#edit_encodedBy').val();
                         var total_amount = $('#edit_totalamount').val();
                         var status = $('#edit_status').val();
                         var invoice_id = $('#edit_invoiceid').val();
   
                    if(order_id == "") {
                      $('#reIns').html("<div class='alert alert-danger'>Order ID is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_invoice.php",
                      data: JSON.stringify({
                                           'invoice_id': invoice_id,
                                            'order_id': order_id,
                                            'product': product,
                                            'product_name': product_name,
                                            'encoded_By': encoded_By, 
                                            'total_amount': total_amount,
                                            'status': status
                                          }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_inedit').html('<div class="alert alert-success">Order Updated successfully</div>');
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
                  var invoice_id = $(this).data("del");
                  getdelID(invoice_id);//argument

                   function getdelID(invoice_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_invoice.php",
                          data: {
                              invoice_id: invoice_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_invoiceid').val(response2.invoice_id);
                          $('#del_orderid').val(response2.order_id);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#delete_invoice', 'click', function(event) {
                    event.preventDefault();

                     var invoice_id = $('#del_invoiceid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_invoice.php?invoice_id="+invoice_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Invdel').html('<div class="alert alert-success">Order Deleted successfully</div>');
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