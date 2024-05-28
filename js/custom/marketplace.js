$(document).ready(function() {

    let api = "http://localhost/Inventory-System-Web/pages/config/api/";

    /////////////////////////////////// Add //////////////////////////////////////

    $(document).delegate('#addNewApiBtn', 'click', function(event) {
        event.preventDefault();

        var apiUrl = $('#apiUrl').val();
        var apiKey = $('#apiKey').val();
        var apiUsername = $('#apiUsername').val();
        var marketplace = $('#marketplace').val();
        var name = $('#name').val();
        var feed = $('#feed').val();

        if (apiUrl == "" || apiKey == "" || apiUsername == "" || marketplace == "" || name == "" || feed == "") {
           $('#reqApi') .html ("<div class='alert alert-danger'>All fields are required</div>");
            return;
        }

        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: api + "create_multistore.php",
            data: JSON.stringify({ 'apiUrl': apiUrl, 'apiKey': apiKey, 'apiUsername': apiUsername, 'marketplace': marketplace, 'name': name, 'feed': feed }),
            cache: false,
            success: function(result) {
                $('#mgs_Api').html('<div class="alert alert-success">API added successfully</div>');
                setTimeout(function () {
                    location.reload(true);
                }, 1000);
            },
            error: function(err) {
                alert('Error: ' + JSON.stringify(err));
            }
        });
    });

    /////////////////////////////////// Fetch Data ///////////////////////////////

    $.getJSON(api + 'read_multistore.php', function(json) {

        if ($.fn.DataTable.isDataTable('#table_manageMultistore')) {
            $('#table_manageMultistore').DataTable().destroy();
            $('#table_manageMultistore tbody').empty();
        }

        var arr = [];
        for (var i = 0; i < json.length; i++) {
            var obj = {};
            var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#editApiModal" data-edit="' + json[i].id + '"><i class="fas fa-edit"></i> Edit</button>';
            var btnDelete = '<button class="btn btn-danger btn-sm btn-rounded btn_delete" data-toggle="modal" data-target="#deleteApiModal" data-del=' + json[i].id + '><i class="fas fa-trash"></i> Delete</button>';

            obj['apiUrl'] = json[i].apiUrl;
            obj['apiKey'] = json[i].apiKey;
            obj['apiUsername'] = json[i].apiUsername;
            obj['marketplace'] = json[i].marketplace;
            obj['name'] = json[i].name;
            obj['feed'] = json[i].feed;
            obj['actions'] = btnEdit + " " + btnDelete;

            arr.push(obj);
        }

        $('#table_manageMultistore').DataTable({
            'data': arr,
            'columns': [
                { "data": "apiUrl" },
                { "data": "apiKey" },
                { "data": "apiUsername" },
                { "data": "marketplace" },
                { "data": "name" },
                { "data": "feed" },
                { "data": "actions" }
            ]
        });
    });

    ////////////////////////////////// Edit Get ID ///////////////////////////////

    $(document).on("click", ".btn_edit", function() {
        var id = $(this).data("edit");
        getID(id);

        function getID(id) {
            $.ajax({
                type: 'GET',
                url: api + "getid_multistore.php",
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    $('#edit_id').val(response.id);
                    $('#edit_apiUrl').val(response.apiUrl);
                    $('#edit_apiKey').val(response.apiKey);
                    $('#edit_apiUsername').val(response.apiUsername);
                    $('#edit_marketplace').val(response.marketplace);
                    $('#edit_name').val(response.name);
                    $('#edit_feed').val(response.feed);
                }
            });
        }
    });

    ////////////////////////////////// Update Process ////////////////////////////

    $(document).delegate('#editApiBtn', 'click', function(event) {
        event.preventDefault();

        var id = $('#edit_id').val();
        var apiUrl = $('#edit_apiUrl').val();
        var apiKey = $('#edit_apiKey').val();
        var apiUsername = $('#edit_apiUsername').val();
        var marketplace = $('#edit_marketplace').val();
        var name = $('#edit_name').val();
        var feed = $('#edit_feed').val();

        if (apiUrl == "" || apiKey == "" || apiUsername == "" || marketplace == "" || name == "" || feed == "") {
            alert('All fields are required');
            return;
        }

        $.ajax({
            type: "PUT",
            contentType: "application/json; charset=utf-8",
            url: api + "update_multistore.php",
            data: JSON.stringify({ 'id': id, 'apiUrl': apiUrl, 'apiKey': apiKey, 'apiUsername': apiUsername, 'marketplace': marketplace, 'name': name, 'feed': feed }),
            cache: false,
            success: function(result) {
                alert('API updated successfully');
                setTimeout(function () {
                    location.reload(true);
                }, 1000);
            },
            error: function(err) {
                alert('Error: ' + JSON.stringify(err));
            }
        });
    });

    ////////////////////////////////// Delete Get ID /////////////////////////////

    $(document).on("click", ".btn_delete", function() {
        var id = $(this).data("del");
        getdelID(id);

        function getdelID(id) {
            $.ajax({
                type: 'GET',
                url: api + "getid_multistore.php",
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    $('#del_id').val(response.id);
                    $('#del_name').val(response.name);
                }
            });
        }
    });

    ////////////////////////////////// Delete Process ////////////////////////////

    $(document).delegate('#deleteApiBtn', 'click', function(event) {
        event.preventDefault();

        var id = $('#del_id').val();

        $.ajax({
            type: "DELETE",
            contentType: "application/json; charset=utf-8",
            url: api + "delete_multistore.php?id=" + id,
            cache: false,
            success: function(result) {
                alert('API deleted successfully');
                setTimeout(function () {
                    location.reload(true);
                }, 1000);
            },
            error: function(err) {
                alert('Error: ' + JSON.stringify(err));
            }
        });
    });

});
