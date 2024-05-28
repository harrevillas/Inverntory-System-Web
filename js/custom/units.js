$(document).ready(function() {

  let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

      ///////////////////////////////////add//////////////////////////////////////

      $(document).delegate('#add_units', 'click', function(event) {
        event.preventDefault();
        
        var name = $('#name').val();
        
        
        if(name == "") {
          $('#reqU').html("<div class='alert alert-danger'>All fields are required</div>");
          return;
        }
        
        $.ajax({
          type: "POST",
          contentType: "application/json; charset=utf-8",
          url: api+"create_units.php",
          data: JSON.stringify({'name': name}),
          cache: false,
          success: function(result) {
            $('#mgs_unts').html('<div class="alert alert-success">Unit added successfully</div>');
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

               $.getJSON(api+'read_units.php', function(json) {

                 if ($.fn.DataTable.isDataTable('#table_units')) {
                    $('#table_units').DataTable().destroy();
                    $('#table_units tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-unit" data-edit="' + json[i].units_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
                    var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-unit\' data-del=' + json[i].units_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';


                    obj['name'] = json[i].name;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_units').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "name"
                        },{
                            "data": "actions"
                        }]

                    });

                });

              });

              ///////////////////////////////////end fetch data///////////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var units_id = $(this).data("edit");
                  getID(units_id);//argument

                   function getID(units_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_units.php",
                          data: {
                              units_id: units_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_unitsid').val(response.units_id);
                          $('#edit_name').val(response.name);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_units', 'click', function(event) {
                    event.preventDefault();
                    
                     var name = $('#edit_name').val();
                     var units_id = $('#edit_unitsid').val();
   
                    if(name == "") {
                      $('#reqU1').html("<div class='alert alert-danger'>Unit Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_units.php",
                      data: JSON.stringify({'units_id': units_id, 'name': name}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_uedit').html('<div class="alert alert-success">Unit Updated successfully</div>');
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
                  var units_id = $(this).data("del");
                  getdelID(units_id);//argument

                   function getdelID(units_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_units.php",
                          data: {
                              units_id: units_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_unitsid').val(response2.units_id);
                          $('#del_name').val(response2.name);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#del_units', 'click', function(event) {
                    event.preventDefault();

                     var units_id = $('#del_unitsid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_units.php?units_id="+units_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Udel').html('<div class="alert alert-success">Unit Deleted successfully</div>');
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