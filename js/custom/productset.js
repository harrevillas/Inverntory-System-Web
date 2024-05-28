

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_productset', 'click', function(event) {
                    event.preventDefault();
                    
                    var set_code = $('#set_code').val();
                    var set_name = $('#set_name').val();
                    var total_amount = $('#total_amount').val();
                    var set_onhand = $('#set_onhand').val();
                    var encoded_by = $('#encoded_by2').val();
                    
                    if(set_code == "" || set_name == "" || cat_encodedby == "" || set_onhand == "" || encoded_by == "") {
                      $('#reqPc').html("<div class='alert alert-danger'>All fields are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_productset.php",
                      data: JSON.stringify({'set_code': set_code, 'set_name': set_name, 'total_amount': total_amount, 'set_onhand': set_onhand, 'encoded_by': encoded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_pset').html('<div class="alert alert-success">Product set added successfully</div>');
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

               $.getJSON(api+'read_productset.php', function(json) {

                 if ($.fn.DataTable.isDataTable('#table_productset')) {
                    $('#table_productset').DataTable().destroy();
                    $('#table_productset tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-productSet\' data-edit=' + json[i].productset_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-productSet\' data-del=' + json[i].productset_id  + '>Delete</button>';


                    obj['set_code'] = json[i].set_code;
                    obj['set_name'] = json[i].set_name;
                    obj['total_amount'] = json[i].total_amount;
                    obj['set_onhand'] = json[i].set_onhand;
                    obj['encoded_by'] = json[i].encoded_by;
                    obj['date_created'] = json[i].date_created;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_productset').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "set_code"
                        },{
                            "data": "set_name"
                        },{
                            "data": "total_amount"
                        },{
                            "data": "set_onhand"
                        },{
                            "data": "encoded_by"
                        }, {
                            "data": "date_created"
                        },{
                            "data": "actions"
                        }]

                    });

                });
                
              });

              ///////////////////////////////////end fetch data///////////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var productset_id = $(this).data("edit");
                  getID(productset_id);//argument

                   function getID(productset_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_productset.php",
                          data: {
                              productset_id: productset_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_productsetid').val(response.productset_id);
                          $('#edit_setcode').val(response.set_code);
                          $('#edit_setname').val(response.set_name);
                          $('#edit_totalamount').val(response.total_amount);
                          $('#edit_setonhand').val(response.set_onhand);
                          $('#edit_encodedby2').val(response.encoded_by);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_productset', 'click', function(event) {
                    event.preventDefault();
                    

                     var set_code = $('#edit_setcode').val();
                     var set_name = $('#edit_setname').val();
                     var total_amount = $('#edit_totalamount').val();
                     var set_onhand = $('#edit_setonhand').val();
                     var encoded_by = $('#edit_encodedby2').val();
                     var productset_id = $('#edit_productsetid').val();


                    if(description == "") {
                      $('#reqPsEdit').html("<div class='alert alert-danger'>Product Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_productset.php",
                      data: JSON.stringify({'productset_id': productset_id, 'set_code': set_code, 'set_name': set_name, 'total_amount': total_amount, 'set_onhand': set_onhand, 'encoded_by': encoded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Psedit').html('<div class="alert alert-success">Product set Updated successfully</div>');
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
                  var productset_id = $(this).data("del");
                  getdelID(productset_id);//argument

                   function getdelID(productset_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_productset.php",
                          data: {
                              productset_id: productset_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_productsetid').val(response2.productset_id);
                          $('#del_setname').val(response2.set_name);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#delete_productset', 'click', function(event) {
                    event.preventDefault();

                     var productset_id = $('#del_productsetid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_productset.php?productset_id="+productset_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Psdel').html('<div class="alert alert-success">Product set Deleted successfully</div>');
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