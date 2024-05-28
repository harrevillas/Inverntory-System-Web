<!-- add company -->
<div class="modal fade" id="add-company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Supplier</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_comp"></div>
                        <div  id="req"></div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Supplier Name</label>
                                <input type="text" class="form-control" id="company_name" placeholder="Supplier Name...">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="Description">
                            </div>
                        </div>
                        <!-- Save button with checkmark SVG icon -->
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_company">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Save
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- end add company -->

<!-- edit company -->
<div class="modal fade" id="edit-Company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Icon added to the header -->
                <h4 class="modal-title">
                    Edit Supplier
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div id="mgs_compedit"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Supplier Name</label>
                                <input type="text" class="form-control" id="edit_companyname" placeholder="Supplier Name...">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <input type="text" class="form-control" id="edit_description" placeholder="Description">
                            </div>
                        </div>
                        <input type="hidden" id="edit_companyid" name="">
                        <!-- Update button with SVG icon -->
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_company">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Update
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- end edit company -->

<!-- Delete company -->
<div class="modal fade" id="delete-Company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Supplier Company</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div id="mgs_compdel"></div>
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Supplier Name</label>
                            <input type="text" class="form-control" id="del_companyname" placeholder="Supplier Name...">
                        </div>
                        </div>
                        <input type="hidden" id="del_companyid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_company">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Yes
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            No
                        </button> 
                    </div>
                    
                </form>
              </div>
            </div>
       </div>
     </div>
<!-- end Delete company -->

<div class="modal fade" id="add-Product">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqProd"></div>
                        <div id="mgs_prod"></div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="Item Code">Product ID</label>
                                <input type="text" class="form-control" id="item_code" placeholder="Item Code">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Name">Product Name</label>
                                <input type="text" class="form-control" id="full_name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Unit Name">Unit Name</label>
                                <select class="form-control" id="units_id">
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Category">Category</label>
                                <select class="form-control" id="category_id"> 
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Sales Price">Sales Price</label>
                                <input class="form-control" type="text" name="currency-field" id="sales_price" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Stock Quantity">Stock Quantity</label>
                                <input type="text" class="form-control" id="stock_quantity" placeholder="Stock Quantity">
                            </div>
                        </div>
                    </div>
                    <!-- Save button with checkmark SVG icon -->
                    <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                            <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                        </svg>
                        Save
                    </button>
                    <!-- Cancel button with "X" SVG icon -->
                    <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                            <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        Cancel
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.modal add-Product -->

 <!-- /.edit product -->
<div class="modal fade" id="edit-Product">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqPdit"></div>
                        <div id="mgs_Pedit"></div>
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label for="Item Code">Product ID</label>
                            <input type="text" class="form-control" id="edit_itemcode" placeholder="Item Code">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="Name">Product Name</label>
                            <input type="text" class="form-control" id="edit_fullname" placeholder="Name">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Unit Name">Unit Name</label>
                            <select class="form-control units_id" id="edit_unitsid4">
                            </select>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Category">Category</label>
                            <select class="form-control category_id" id="edit_categoryid"> 
                            </select>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Sales Price">Sales Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_salesprice" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Stock Quantity">Stock Quantity</label>
                            <input type="text" class="form-control" id="edit_stockquantity" placeholder="Stock Quantity">
                        </div>
                        </div>

                        </div>
                        <input type="hidden" id="edit_productid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                            <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                        </svg>
                        Update
                    </button>
                    <!-- Cancel button with "X" SVG icon -->
                    <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                            <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        Cancel
                    </button>
                    </div>

                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 <!-- /.end edit product -->

 <!-- Delete company -->
<div class="modal fade" id="delete-Product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div id="mgs_Pdel"></div>
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Product Name</label>
                            <input type="text" class="form-control" id="del_itemcode" placeholder="Company Name...">
                        </div>
                        </div>
                        <input type="hidden" id="del_productid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                            <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                        </svg>
                        Yes 
                    </button>
                    <!-- Cancel button with "X" SVG icon -->
                    <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                            <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        No
                    </button>
                    </div>
                    
                </form>
              </div>
            </div>
       </div>
     </div>
<!-- end Delete company -->

<!--add units-->
<div class="modal fade" id="add-Unit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">

                     <div id="mgs_unts"></div>
                     <div id="reqU"></div>

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>        
                        </div>
                        <!-- Save button with checkmark SVG icon -->
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_units">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Save
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--end add units-->

<!--edit units-->
<div class="modal fade" id="edit-unit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                    <div id="reqU1"></div>
                     <div id="mgs_uedit"></div>
                    

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="edit_name" placeholder="Name">
                        </div>
                        </div>
                        <input type="hidden" id="edit_unitsid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_units">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Update
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                </form>
              </div>
        </div>
    </div>
</div>
<!--end edit units-->

<!--delete units-->
<div class="modal fade" id="delete-unit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                    <div id="reqU1"></div>
                     <div id="mgs_Udel"></div>
                    

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="del_name" placeholder="Name">
                        </div>
                        </div>
                        <input type="hidden" id="del_unitsid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_units">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Yes
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            No
                        </button>
                    </div>
                </form>
              </div>
        </div>
    </div>
</div>
<!--end delete units-->

<!-- add categories -->
<div class="modal fade" id="add-Category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqC"></div>
                        <div id="mgs_cat"></div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="cat_name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <textarea type="text" class="form-control" id="cat_description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <!-- Save button with checkmark SVG icon -->
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_categories">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Save
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- end add categories -->

    <!-- edit categories -->
<div class="modal fade" id="edit-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                         <div id="mgs_Cedit"></div>
                        <div id="reqCat"></div>
                       
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="edit_catname" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Description">Description</label>
                            <textarea type="text" class="form-control" id="edit_catdescription" placeholder="Description"></textarea>
                        </div>
                        </div>
                        <input type="hidden" id="edit_categoryid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_categories">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Update
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    <!-- /.modal-dialog -->
    </div>

    <!-- end edit categories -->


    <!-- delete categories -->
<div class="modal fade" id="delete-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqCat"></div>
                        <div id="mgs_Cdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="del_cname" placeholder="Name">
                        </div>

                        </div>
                        <input type="hidden" id="del_categoryid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_categories">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Yes
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            No
                        </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    <!-- /.modal-dialog -->
    </div>

    <!-- end delete categories -->


<!-- /.modal edit-Category -->
<!-- /. Add item raw material -->
<div class="modal fade" id="add-ItemRawMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Item Raw Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqIrM"></div>
                        <div id="mgs_irm"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Product Name</label>
                            <select class="form-control" id="productset_id1">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Material Name">Material Name</label>
                            <input type="text" class="form-control" id="material_name" placeholder="Material Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Amount">Amount</label>
                            <input class="form-control" type="text" name="currency-field" id="amount" placeholder="P 0.00">
                        </div>
                          <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="encoded_by1" placeholder="Encoded By">
                        </div>
                        </div>
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_itemrawmaterial">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end Add item raw material -->
<!-- /. edit item raw material -->
<div class="modal fade" id="edit-ItemRawMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Item Raw Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="req_irm"></div>
                        <div id="msg_irmEdit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Product Name</label>
                            <select class="form-control productset_idGet" id="edit_productsetid">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Material Name">Material Name</label>
                            <input type="text" class="form-control" id="edit_materialname" placeholder="Material Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Amount">Amount</label>
                            <input class="form-control" type="text" name="currency-field" id="edit_amount" placeholder="P 0.00">
                        </div>
                          <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby3" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_itermrawmaterialid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_itemrawmaterial">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end edit item raw material -->

<!-- /. delete item raw material -->
<div class="modal fade" id="delete-ItemRawMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Item Raw Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Imrdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Material Name</label>
                              <input type="text" class="form-control" id="del_materialname" name="">
                        </div>

                        </div>
                        <input type="hidden" id="del_itermrawmaterialid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_itemrawmaterial">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end delete item raw material -->
<!-- /.add invoice -->
<div class="modal fade" id="add-Invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqIV"></div>
                        <div id="mgs_Inv"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Order ID</label>
                            <input class="form-control"type="text" name="currency-field" id="order_id" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Product Name</label>
                            <input class="form-control"type="text" name="currency-field" id="product_name" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Product ID</label>
                            <input class="form-control"type="text" name="currency-field" id="product" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Discount Price">Customer Name</label>
                            <input class="form-control"type="text" name="currency-field" id="encoded_By" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Tendered">Total Amount</label>
                            <input class="form-control"type="text" name="currency-field" id="total_amount" placeholder="P 0.00">
                        </div>
                        <div class="form-group col-md-12">
                        <label for="usertype">Status</label>
                        <select class="form-control" id="status">
                          <option>To Ship</option>    
                         <option>Shipped</option> 
                         <option>Cancelled</option>   
                         <option>Completed</option>  
                        </select>
                        </div>
                           <!-- <div class="form-group col-md-12">
                            <label for="Change">Discount Price</label>
                            <input class="form-control"type="text" name="currency-field" id="discount_price5" placeholder="%">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Change">Tendered</label>
                            <input class="form-control"type="text" name="currency-field" id="tendered" placeholder="P 0.00">
                        </div>
                      <div class="form-group col-md-12">
                            <label for="Change">Change</label>
                            <input class="form-control"type="text" name="currency-field" id="change" placeholder="P 0.00">
                        </div>-->
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_invoice">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Save
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button> 
                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end add invoice -->
<!-- /.edit invoice -->
<div class="modal fade" id="edit-Invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reIns"></div>
                        <div id="mgs_inedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Order ID</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_orderid" placeholder="">
                        </div> 
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Product Name</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_productname" placeholder="">
                        </div> 
                            <div class="form-group col-md-12">
                            <label for="Discount Price">Customer Name</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_encodedBy" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Tendered">Total Amount</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_totalamount" placeholder="P 0.00">
                        </div>
                        <div class="form-group col-md-12">
                        <label for="usertype">Status</label>
                        <select class="form-control" id="edit_status">
                          <option>To Ship</option>    
                         <option>Shipped</option> 
                         <option>Cancelled</option>   
                         <option>Completed</option>  
                        </select>
                        </div>
                            <!-- <div class="form-group col-md-12">
                            <label for="Change">Discount Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_discountprice5" placeholder="%">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Change">Tendered</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_tendered" placeholder="P 0.00">
                        </div>
                      <div class="form-group col-md-12">
                            <label for="Change">Change</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_change" placeholder="P 0.00">
                        </div> -->
                        </div>
                        <input type="hidden" id="edit_invoiceid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_invoice">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Update
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end edit invoice -->
<!-- /. delete innvoice -->
<div class="modal fade" id="delete-Invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Invdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Order ID</label>
                              <input type="text" class="form-control" id="del_orderid" name="">
                        </div>

                        </div>
                        <input type="hidden" id="del_invoiceid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_invoice">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end delete innvoice -->

<!-- /.add sales -->
<div class="modal fade" id="add-Sales">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqSls"></div>
                        <div id="mgs_Sls"></div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Item">Item</label>
                                <select class="form-control" id="category_id6"></select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Sale Quantity">Sale Quantity</label>
                                <input type="number" class="form-control" id="sale_quantity" placeholder="Sale Quantity">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Total">Total</label>
                                <input class="form-control" type="text" id="total" placeholder="P 0.00">
                            </div>                      
                            <div class="form-group col-md-12">
                                <label for="Name">Encoded By</label>
                                <input type="text" class="form-control" id="edit_encodedby6" placeholder="Encoded By">
                            </div>
                        </div>
                        <input type="hidden" id="edit_itermrawmaterialid" name="">
                        <!-- Save button with checkmark SVG icon -->
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_sales">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Save
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- /.modal-dialog -->
</div>
<!-- /.end add sales -->

<!-- /.edit sales -->
<div class="modal fade" id="edit-Sales">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqSedit"></div>
                        <div id="mgs_Slesedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Item">Item</label>
                             <select class="form-control category_id6" id="edit_categoryid6">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Sale Quantity">Sale Quantity</label>
                            <input type="number" class="form-control" id="edit_salequantity" placeholder="Sale Quantity">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total">Total</label>
                            <input class="form-control"type="text" id="edit_total" placeholder="P 0.00">
                        </div>                      
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_recordedby" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_salesid" name="">                        
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_sales">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Update
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end edit sales -->
<div class="modal fade" id="delete-Sales">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_salesdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Sale ID</label>
                              <input type="text" class="form-control" id="del_salesid" name="">
                        </div>

                        </div>
                        <input type="hidden" id="del_salesid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_sales">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="add-Users">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                    <div id="reqUsers"></div>
                    <div id="mgs_users"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Full Name">Full Name</label>
                            <input type="text" class="form-control" id="f_name" placeholder="First Name      -       Middle Name         -       Last Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-12">
                        <label for="usertype">User Type</label>
                        <select class="form-control" id="usertype">
                          <option>Admin</option>    
                         <option>Guest</option>    
                        </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact Number">Contact Number</label>
                            <input type="text" class="form-control" id="contact" placeholder="Contact Number">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Save
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-Users -->
<div class="modal fade" id="edit-Users">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                    <div id="reqUsers1"></div>
                    <div id="mgs_users1"></div>
                   

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Full Name">Full Name</label>
                            <input type="text" class="form-control" id="edit_f_name" placeholder="First Name      -       Middle Name         -       Last Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="edit_username" placeholder="Username">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="edit_password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-12">
                        <label for="usertype">User Type</label>
                        <select class="form-control" id="edit_usertype">
                          <option>Admin</option>    
                         <option>Guest</option>    
                        </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact Number">Contact Number</label>
                            <input type="text" class="form-control" id="edit_contact" placeholder="Contact Number">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="edit_address" placeholder="Address">
                        </div>
                        </div>
                        <input type="hidden" id="edit_userid" name="">
                        <button type="submit" class="btn btn-primary btn-rounded" style="float: right;" id="edit_users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Update
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Cancel
                        </button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-Users -->
<div class="modal fade" id="delete-Users">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                    
                    <div id="reqdel1"></div>
                     <div id="mgs_Userdel"></div>
                

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Full Name">Full Name</label>
                            <input type="text" class="form-control" id="del_f_name" placeholder="Full Name">
                        </div>
                        </div>
                        <input type="hidden" id="del_userid" name="">
                        <button type="submit" class="btn btn-primary btn-rounded" style="float: right;" id="del_users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M12.782 3.22a.75.75 0 0 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-3.5-3.5a.75.75 0 1 1 1.06-1.06L5 10.189l6.72-6.72a.75.75 0 0 1 1.062-.002z"/>
                            </svg>
                            Yes
                        </button>
                        <!-- Cancel button with "X" SVG icon -->
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                <path fill="#ffffff" d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.937 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.937a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.062a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            No
                        </button>
                    </div>
                </form>
              </div>
        </div>
    </div>
 <!--/add api -->
 <div class="modal fade" id="add_Api">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add API</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Api"></div>
                        <div id="reqApi"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="apiUrl">API URL</label>
                            <input type="text" class="form-control" id="apiUrl" placeholder="API URL">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="apiKey">API Key</label>
                            <input type="text" class="form-control" id="apiKey" placeholder="API Key">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="apiUsername">API Username</label>
                            <input class="form-control"type="text" id="apiUsername" placeholder="API Username">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="marketplace">Marketplace</label>
                            <input type="text" class="form-control" id="marketplace" placeholder="Marketplace">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="feed">Feed</label>
                            <input type="text" class="form-control" id="feed" placeholder="Feed">
                        </div>
                        </div>
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="addNewApiBtn">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--/end -->
<!-- /add product set -->
<div class="modal fade" id="add-ProductSet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add API</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Api"></div>
                        <div id="reqApi"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Set Code">API URL</label>
                            <input type="text" class="form-control" id="apiUrl" placeholder="API URL">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set Name">API Key</label>
                            <input type="text" class="form-control" id="apiKey" placeholder="API KEY">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total Amount">API Username</label>
                            <input class="form-control"type="text" id="apiUsername" placeholder="API Username">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set on Hand">Marketplace</label>
                            <input type="text" class="form-control" id="marketplace" placeholder="Marketplace">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Name">Feed</label>
                            <input type="text" class="form-control" id="feed" placeholder="Name">
                        </div>
                        </div>
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="addNewApiBtn">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /end add product set -->

<!-- /edit product set -->
<div class="modal fade" id="edit-productSet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product Set</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqPsEdit"></div>
                        <div id="mgs_Psedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Set Code">Set Code</label>
                            <input type="text" class="form-control" id="edit_setcode" placeholder="Set Code">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set Name">Set Name</label>
                            <input type="text" class="form-control" id="edit_setname" placeholder="Set Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total Amount">Total Amount</label>
                            <input class="form-control"type="text" id="edit_totalamount" placeholder="P 0.00">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set on Hand">Set on Hand</label>
                            <input type="text" class="form-control" id="edit_setonhand" placeholder="Set on Hand">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby2" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_productsetid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_productset">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /end edit product set -->
<!-- /edit product set -->
<div class="modal fade" id="delete-productSet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Product Set</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Psdel"></div>
                        <div class="row">

                            <div class="form-group col-md-12">
                            <label for="Set Name">Set Name</label>
                            <input type="text" class="form-control" id="del_setname" placeholder="Set Name">
                        </div>

                        </div>
                        <input type="hidden" id="del_productsetid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_productset">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /end edit product set -->
<!-- /.modal edit-ProductSet -->
<div class="modal fade" id="add-CompanySetup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Company Setup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Company Name">Company Name</label>
                            <input type="text" class="form-control" id="Company Name" placeholder="Company Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact No.">Contact No.</label>
                            <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="TIN No.">TIN No.</label>
                            <input type="text" class="form-control" id="TIN No." placeholder="TIN No.">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded">Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-CompanySetup -->
<div class="modal fade" id="edit-CompanySetup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Company Setup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Company Name">Company Name</label>
                            <input type="text" class="form-control" id="Company Name" placeholder="Company Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact No.">Contact No.</label>
                            <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="TIN No.">TIN No.</label>
                            <input type="text" class="form-control" id="TIN No." placeholder="TIN No.">
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" >Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-CompanySetup -->
<div class="modal fade" id="set-days">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Set Predictive Days</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Days">Days</label>
                            <input type="number" class="form-control" id="Days" placeholder="Days">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded">Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal set-days -->