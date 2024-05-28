$(document).ready(function() {
  let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

  ///////////////////////////////////add//////////////////////////////////////

  $(document).delegate('#add_categories', 'click', function(event) {
      event.preventDefault();

      var cat_name = $('#cat_name').val();
      var cat_description = $('#cat_description').val();

      if (cat_name == "" || cat_description == "") {
          $('#reqC').html("<div class='alert alert-danger'>All fields are required</div>");
          return;
      }

      $.ajax({
          type: "POST",
          contentType: "application/json; charset=utf-8",
          url: api + "create_categories.php",
          data: JSON.stringify({
              'cat_name': cat_name,
              'cat_description': cat_description,
          }),
          cache: false,
          success: function(result) {
              $('#mgs_cat').html('<div class="alert alert-success">Category added successfully</div>');
              setTimeout(function() {
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

  // Fetch data
  $.getJSON(api + 'read_categories.php', function(json) {
      if ($.fn.DataTable.isDataTable('#table_categories')) {
          $('#table_categories').DataTable().destroy();
          $('#table_categories tbody').empty();
      }

      var arr = [];
      for (var i = 0; i < json.length; i++) {
          var obj = {};
          var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-category" data-edit="' + json[i].category_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
          var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-category\' data-del=' + json[i].category_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';

          obj['cat_name'] = json[i].cat_name;
          obj['cat_description'] = json[i].cat_description;
          obj['actions'] = btnEdit + " " + btnDelete;

          arr.push(obj);
      }

      $('#table_categories').DataTable({
          'data': arr,
          'columns': [
              { "data": "cat_name" },
              { "data": "cat_description" },
              { "data": "actions" }
          ]
      });
  });

  ///////////////////////////////////end fetch data///////////////////////////////

  //////////////////////////////////edit get Id ////////////////////////////////////////

  $(document).on("click", ".btn_edit", function() { // Updated selector
      var category_id = $(this).data("edit");
      getID(category_id);

      function getID(category_id) {
          $.ajax({
              type: 'GET',
              url: api + "getid_categories.php",
              data: {
                  category_id: category_id
              },
              dataType: 'json',
              success: function(response) {
                  $('#edit_categoryid').val(response.category_id);
                  $('#edit_catname').val(response.cat_name);
                  $('#edit_catdescription').val(response.cat_description);
              }
          });
      }
  });

  //////////////////////////////////////////end edit get Id/////////////////////////////

  ///////////////////////////////////////update process////////////////////////////////

  $(document).delegate('#edit_categories', 'click', function(event) {
      event.preventDefault();

      var cat_name = $('#edit_catname').val();
      var cat_description = $('#edit_catdescription').val();
      var category_id = $('#edit_categoryid').val();

      if (cat_name == "") {
          $('#reqCat').html("<div class='alert alert-danger'>Category name is required</div>");
          return;
      }

      $.ajax({
          type: "PUT",
          contentType: "application/json; charset=utf-8",
          url: api + "update_categories.php",
          data: JSON.stringify({
              'category_id': category_id,
              'cat_name': cat_name,
              'cat_description': cat_description,
          }),
          cache: false,
          success: function(result) {
              $('#mgs_Cedit').html('<div class="alert alert-success">Category Updated successfully</div>');
              setTimeout(function() {
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

  $(document).on("click", ".btn-delete", function() { // Updated selector
      var category_id = $(this).data("del");
      getdelID(category_id);

      function getdelID(category_id) {
          $.ajax({
              type: 'GET',
              url: api + "getid_categories.php",
              data: {
                  category_id: category_id
              },
              dataType: 'json',
              success: function(response2) {
                  $('#del_categoryid').val(response2.category_id);
                  $('#del_cname').val(response2.cat_name);
              }
          });
      }
  });

  //////////////////////////////////////////end edit get Id delete///////////////////////////////

  ////////////////////////////////// delete process////////////////////////////////////////

  $(document).delegate('#del_categories', 'click', function(event) {
      event.preventDefault();

      var category_id = $('#del_categoryid').val();

      $.ajax({
          type: "DELETE",
          contentType: "application/json; charset=utf-8",
          url: api + "delete_categories.php?category_id=" + category_id,
          cache: false,
          success: function(result) {
              $('#mgs_Cdel').html('<div class="alert alert-success">Category Deleted successfully</div>');
              setTimeout(function() {
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
