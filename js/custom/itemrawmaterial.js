

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_itemrawmaterial', 'click', function(event) {
                    event.preventDefault();
                    
                    var productset_id = $('#productset_id1 option:selected').val();
                    console.log(productset_id);

                    var material_name = $('#material_name').val();
                    console.log(material_name);

                    var amount = $('#amount').val();
                    console.log(amount);

                    var encoded_by = $('#encoded_by1').val();
                    console.log(encoded_by);
                    
                    if(productset_id == "" || material_name == "" || amount == "" || encoded_by == "") {
                      $('#reqIrM').html("<div class='alert alert-danger'>All fields are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_itemrawmaterial.php",
                      data: JSON.stringify({'productset_id': productset_id, 'material_name': material_name, 'amount': amount, 'encoded_by': encoded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_irm').html('<div class="alert alert-success">Item raw material added successfully</div>');
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

               $.getJSON(api+'read_itemrawmaterial.php', function(json) {

                 if ($.fn.DataTable.isDataTable('#table_itemrawmaterial')) {
                    $('#table_itemrawmaterial').DataTable().destroy();
                    $('#table_itemrawmaterial tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-ItemRawMaterial\' data-edit=' + json[i].itermrawmaterial_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-ItemRawMaterial\' data-del=' + json[i].itermrawmaterial_id  + '>Delete</button>';


                    obj['set_name'] = json[i].set_name;
                    obj['material_name'] = json[i].material_name;
                    obj['amount'] = json[i].amount;
                    obj['encoded_by'] = json[i].encoded_by;
                    obj['date_created'] = json[i].date_created;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_itemrawmaterial').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "set_name"
                        },{
                            "data": "material_name"
                        },{
                            "data": "amount"
                        }, {
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

              //////////////////////////////////////get categories add/////////////////////////////

            $.getJSON(api+'read_productset.php', function(json) {
                    $("#productset_id1").html("");
                    $("#productset_id1").append("<option value=''>&larr; Please select Product &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $("#productset_id1").append("<option value=" + json[i].productset_id + ">" + json[i].set_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get categories add/////////////////////////////

         //////////////////////////////////////get categories Edit/////////////////////////////

            $.getJSON(api+'read_productset.php', function(json) {
                    $(".productset_idGet").html("");
                    $(".productset_idGet").append("<option value=''>&larr; Please select Product &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $(".productset_idGet").append("<option value=" + json[i].productset_id + ">" + json[i].set_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get categories Edit/////////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var itermrawmaterial_id = $(this).data("edit");
                  getID(itermrawmaterial_id);//argument

                   function getID(itermrawmaterial_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_itemrawmaterial.php",
                          data: {
                              itermrawmaterial_id: itermrawmaterial_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_itermrawmaterialid').val(response.itermrawmaterial_id);
                          $('#edit_productsetid').val(response.productset_id);
                          $('#edit_materialname').val(response.material_name);
                          $('#edit_amount').val(response.amount);
                          $('#edit_encodedby3').val(response.encoded_by);

      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_itemrawmaterial', 'click', function(event) {
                    event.preventDefault();
                    
                     var productset_id = $('#edit_productsetid').val();
                     var material_name = $('#edit_materialname').val();
                     var amount = $('#edit_amount').val();
                     var encoded_by = $('#edit_encodedby3').val();
                     var itermrawmaterial_id = $('#edit_itermrawmaterialid').val();

                    if(productset_id == "") {
                      $('#req_irm').html("<div class='alert alert-danger'>product set is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_itemrawmaterial.php",
                      data: JSON.stringify({'itermrawmaterial_id': itermrawmaterial_id, 'productset_id': productset_id, 'material_name': material_name, 'amount': amount, 'encoded_by': encoded_by}),
                      cache: false,
                      success: function(result) {
                        $('#msg_irmEdit').html('<div class="alert alert-success">Item raw material Updated successfully</div>');
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
                  var itermrawmaterial_id = $(this).data("del");
                  getdelID(itermrawmaterial_id);//argument

                   function getdelID(itermrawmaterial_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_itemrawmaterial.php",
                          data: {
                              itermrawmaterial_id: itermrawmaterial_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_itermrawmaterialid').val(response2.itermrawmaterial_id);
                          $('#del_materialname').val(response2.material_name);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#delete_itemrawmaterial', 'click', function(event) {
                    event.preventDefault();

                     var itermrawmaterial_id = $('#del_itermrawmaterialid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_itemrawmaterial.php?itermrawmaterial_id="+itermrawmaterial_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Imrdel').html('<div class="alert alert-success">Item raw material Deleted successfully</div>');
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