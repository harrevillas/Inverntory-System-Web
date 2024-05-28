
$(document).ready(function() {

    let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

        ///////////////////////////////////add//////////////////////////////////////

        $(document).delegate('#add_users', 'click', function(event) {
          event.preventDefault();
          
          var f_name = $('#f_name').val();
          var username = $('#username').val();
          var password = $('#password').val();
          var usertype = $('#usertype').val();
          var contact = $('#contact').val();
          var address = $('#address').val();
          
          if(f_name == "" || username == "" || password == "" || usertype == "" || contact == "" || address =="") {
            $('#reqUsers').html("<div class='alert alert-danger'>All fields are required</div>");
            return;
          } 
          
          $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: api+"create_users.php",
            data: JSON.stringify({'f_name': f_name, 'username': username, 'password': password, 'usertype': usertype, 'contact': contact, 'address': address}),
            cache: false,
            success: function(result) {
              $('#mgs_users').html('<div class="alert alert-success">User added successfully</div>');
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

     $.getJSON(api+'read_users.php', function(json) {

       if ($.fn.DataTable.isDataTable('#table_users')) {
          $('#table_users').DataTable().destroy();
          $('#table_users tbody').empty();
      }

    var arr = [];
      for (var i = 0; i < json.length; i++) {
          var obj = {};
          var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-Users" data-edit="' + json[i].user_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
            var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-Users\' data-del=' + json[i].user_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';

          obj['f_name'] = json[i].f_name;
          obj['username'] = json[i].username;
          obj['password'] = json[i].password;
          obj['usertype'] = json[i].usertype;
          obj['contact'] = json[i].contact;
          obj['address'] = json[i].address;
          obj['actions'] = btnEdit + " " + btnDelete;

          arr.push(obj);
      }
      $(document).ready(function() {
          $('#table_users').DataTable({

              'data': arr,
              'columns': [{
                  "data": "f_name"
              },{
                  "data": "username"
              },{
                  "data": "password"
              }, {
                  "data": "usertype"
              }, {
                  "data": "contact"
              }, {
                  "data": "address"
              },{
                  "data": "actions"
              }]

          });

      });

    });

    ///////////////////////////////////end fetch data///////////////////////////////
    
    //////////////////////////////////edit get Id ////////////////////////////////////////

   $(document).on("click", ".btn-rounded", function() {
        var user_id = $(this).data("edit");
        getID(user_id);//argument

         function getID(user_id) {
            $.ajax({
                type: 'GET',
                url: api+"getid_users.php",
                data: {
                    user_id: user_id
                },
                dataType: 'json',
                success: function(response) {
                $('#edit_userid').val(response.user_id);
                $('#edit_f_name').val(response.f_name);
                $('#edit_username').val(response.username);
                $('#edit_password').val(response.password);
                $('#edit_usertype').val(response.usertype);
                $('#edit_contact').val(response.contact);
                $('#edit_address').val(response.address);

             }
          });
         }

      });


    //////////////////////////////////////////end edit get Id/////////////////////////////

    ///////////////////////////////////////update process////////////////////////////////


        $(document).delegate('#edit_users', 'click', function(event) {
          event.preventDefault();
          
           var f_name = $('#edit_f_name').val();
           var username = $('#edit_username').val();
           var password = $('#edit_password').val();
           var usertype = $('#edit_usertype').val();
           var contact = $('#edit_contact').val();
           var address = $('#edit_address').val();
           var user_id = $('#edit_userid').val();

          if(username == "") {
            $('#reqUsers1').html("<div class='alert alert-danger'>Full Name is required</div>");
            return;
          }
          
          $.ajax({
            type: "PUT",
            contentType: "application/json; charset=utf-8",
            url: api+"update_users.php",
            data: JSON.stringify({'user_id': user_id, 'f_name': f_name, 'username': username, 'password': password, 'usertype': usertype, 'contact': contact, 'address': address}),
            cache: false,
            success: function(result) {
              $('#mgs_users1').html('<div class="alert alert-success">User Updated successfully</div>');
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
        var user_id = $(this).data("del");
        getdelID(user_id);//argument

         function getdelID(user_id) {
            $.ajax({
                type: 'GET',
                url: api+"getid_users.php",
                data: {
                    user_id: user_id
                },
                dataType: 'json',
                success: function(response2) {
                $('#del_userid').val(response2.user_id);
                $('#del_f_name').val(response2.f_name);

             }
          });
         }

      });

    //////////////////////////////////////////end edit get Id delete///////////////////////////////

   ////////////////////////////////// delete process////////////////////////////////////////

     $(document).delegate('#del_users', 'click', function(event) {
          event.preventDefault();

           var user_id = $('#del_userid').val();

          $.ajax({
            type: "DELETE",
            contentType: "application/json; charset=utf-8",
            url: api+"delete_users.php?user_id="+user_id,
            cache: false,
            success: function(result) {
              $('#mgs_Userdel').html('<div class="alert alert-success">User Deleted successfully</div>');
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