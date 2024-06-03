$(document).ready(function() {
    let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

    ///////////////////////////////////add//////////////////////////////////////

    $(document).delegate('#add_company', 'click', function(event) {
        event.preventDefault();

        var company_name = $('#company_name').val();
        var description = $('#description').val();

        if(company_name == "") {
            $('#req').html("<div class='alert alert-danger'>Company Name is required</div>");
            return;
        }

        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: api + "create_company.php",
            data: JSON.stringify({
                
                                'company_name': company_name,
                                'description': description 
                            }),
            cache: false,
            success: function(result) {
                $('#mgs_comp').html('<div class="alert alert-success">Company added successfully</div>');
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

    $.getJSON(api + 'read_company.php', function(json) {
        if ($.fn.DataTable.isDataTable('#table_company')) {
            $('#table_company').DataTable().destroy();
            $('#table_company tbody').empty();
        }

        var arr = [];
        for (var i = 0; i < json.length; i++) {
            var obj = {};
            var btnEdit = '<button class="btn btn-primary btn-sm btn-rounded btn_edit" data-toggle="modal" data-target="#edit-Company" data-edit="' + json[i].company_id + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff"><path d="M3 17.25v3.75h3.75L17.81 9.19l-3.75-3.75L3 17.25zm18.71-5.41c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>Edit</button>';
            var btnDelete = '<button class=\'btn btn-primary btn-sm btn-rounded btn-delete btn-del\' data-toggle=\'modal\' data-target=\'#delete-Company\' data-del=' + json[i].company_id  + '><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> Delete</button>';

            obj['company_name'] = json[i].company_name;
            obj['description'] = json[i].description;
            obj['actions'] = btnEdit + " " + btnDelete;

            arr.push(obj);
        }
        $('#table_company').DataTable({
            'data': arr,
            'columns': [{
                "data": "company_name"
            }, {
                "data": "description"
            }, {
                "data": "actions"
            }]
        });
    });

    ///////////////////////////////////end fetch data///////////////////////////////
  
    //////////////////////////////////edit get Id ////////////////////////////////////////

    $(document).on("click", ".btn_edit", function() {
        var company_id = $(this).data("edit");
        getID(company_id); //argument

        function getID(company_id) {
            $.ajax({
                type: 'GET',
                url: api + "getid_company.php",
                data: {
                    company_id: company_id
                },
                dataType: 'json',
                success: function(response) {
                    $('#edit_companyid').val(response.company_id);
                    $('#edit_companyname').val(response.company_name);
                    $('#edit_description').val(response.description);
                }
            });
        }
    });

    //////////////////////////////////////////end edit get Id/////////////////////////////

    ///////////////////////////////////////update process////////////////////////////////

    $(document).delegate('#edit_company', 'click', function(event) {
        event.preventDefault();

        var company_name = $('#edit_companyname').val();
        var description = $('#edit_description').val();
        var company_id = $('#edit_companyid').val();

        if(company_name == "") {
            $('#req').html("<div class='alert alert-danger'>Company Name is required</div>");
            return;
        }

        $.ajax({
            type: "PUT",
            contentType: "application/json; charset=utf-8",
            url: api + "update_company.php",
            data: JSON.stringify({'company_id': company_id, 'company_name': company_name, 'description': description}),
            cache: false,
            success: function(result) {
                $('#mgs_compedit').html('<div class="alert alert-success">Company Updated successfully</div>');
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
        var company_id = $(this).data("del");
        getdelID(company_id); //argument

        function getdelID(company_id) {
            $.ajax({
                type: 'GET',
                url: api + "getid_company.php",
                data: {
                    company_id: company_id
                },
                dataType: 'json',
                success: function(response2) {
                    $('#del_companyid').val(response2.company_id);
                    $('#del_companyname').val(response2.company_name);
                    $('#del_description').val(response2.description);
                }
            });
        }
    });

    //////////////////////////////////////////end edit get Id delete///////////////////////////////

    ////////////////////////////////// delete process////////////////////////////////////////

    $(document).delegate('#del_company', 'click', function(event) {
        event.preventDefault();
    
        // Show confirmation dialog
        var confirmDelete = confirm("Are you sure you want to delete this company?");
        if (!confirmDelete) {
            return; // Cancel deletion if user chooses No
        }
    
        var company_id = $('#del_companyid').val();
    
        $.ajax({
            type: "DELETE",
            contentType: "application/json; charset=utf-8",
            url: api + "delete_company.php?company_id=" + company_id,
            cache: false,
            success: function(result) {
                $('#mgs_compdel').html('<div class="alert alert-success">Company Deleted successfully</div>');
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
