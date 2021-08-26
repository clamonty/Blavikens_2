<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-auto" id="exampleModalLabel">Edit the Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form class="edit-product-form">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="product" id="editProductName" class="form-control"
                            placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Enter product description"></textarea>
                    </div>
                    <div class="input-group">
                        <label for="productQuantity">Quantity</label>
                        <input type="text" class=" text-center" id="editProductQuantity" value="prodQuantity">
                        <div class="d-flex flex-column ml-2 justify-content-center">
                            <i class="fas fa-chevron-up edit-increase"></i>
                            <i class="fas fa-chevron-down edit-decrease"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" min="0" step="0.01" id="editProductPrice" class="form-control">
                    </div>
            </div>
            <div class="modal-footer unique-div-2">
                <button id="save-product-info" class="btn btn-dark save-details" type="submit"
                    name="save-details">Save</button>
                <button type="button" class="btn btn-secondary "
                    data-dismiss="modal">Cancel</button>
            </div>

        </div>

    </div>
</div>

<?php
    function getXMLInput(){
        $file = "../../resources/data/products.xml";
        $xml = simplexml_load_file($file);
        
    }