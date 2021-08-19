<?php session_start(); ?>
<?php 
  if($_SESSION['user-status'] != 'admin') {
    header("Location: ../front_page");
  }
?>
<?php include("../../resources/templates/back/back_header.php"); ?>


    <div class="orderList">
        <div class="container">
            <h1 class="text-center py-4">Order List</h1>
            <button type="button" class="btn btn-outline-dark" style="margin-bottom: 2em;" data-toggle="modal"
                data-target="#orderModal">Add an Order</button>

            <div id="orderModal" class="modal fade" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title ml-auto" id="exampleModalLabel">Add an Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="username" id="username" class="form-control"
                                        placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="userEmail">Email Address</label>
                                    <input type="userEmail" id="userEmail" class="form-control"
                                        placeholder="Enter user's email">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nbr. of Items</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="px-0">
                            <div class="d-flex align-items-center flex-column">
                                <p class="align-self-center">Geralt</p>
                            </div>
                        </th>
                        <td class="text-center px-0">geraltofrivia@gmail.com</td>
                        <td class="text-center px-0">5</td>
                        <td class="text-center px-0">$69.00</td>
                        <td class="text-center px-0">21/07/2021</td>
                        <td class="text-center px-0"><button type="button" class="btn btn-outline-dark"
                                data-toggle="modal" data-target="#editModal">Edit</button></td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-0">
                            <div class="d-flex align-items-center flex-column">
                                <p class="align-self-center">Yennefer</p>
                            </div>
                        </th>
                        <td class="text-center px-0">yenneferofvengerberg@hotmail.com</td>
                        <td class="text-center px-0">2</td>
                        <td class="text-center px-0">$69.00</td>
                        <td class="text-center px-0">19/07/2021</td>
                        <td class="text-center px-0"><button type="button" class="btn btn-outline-dark"
                                data-toggle="modal" data-target="#editModal">Edit</button></td>
                    </tr>

                </tbody>
            </table>
            <div id="editModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title ml-auto" id="exampleModalLabel">Edit the Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="container">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="px-0">
                                                <div class="d-flex align-items-center flex-column">
                                                    <p class="align-slef-center">Cheese</p>
                                                </div>
                                            </th>
                                            <td class="text-center align-middle px-0">$20.00</td>
                                            <td class="w-25 align-middle ">
                                                <div class="input-group">
                                                  <input type="text" class="form-control text-center" value="2">
                                                  <div class="d-flex flex-column ml-2 justify-content-center">
                                                    <i class="fas fa-chevron-up cart-increase"></i>
                                                    <i class="fas fa-chevron-down cart-decrease"></i>
                                                  </div>
                                                </div>
                                              </td>
                                              <td class="text-center px-0 align-middle">$40.00<i class="far fa-trash-alt ml-4 cart-delete"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="px-0">
                                                <div class="d-flex align-items-center flex-column">
                                                    <p class="align-slef-center">Eggs</p>
                                                </div>
                                            </th>
                                            <td class="text-center align-middle px-0">$20.00</td>
                                            <td class="w-25 align-middle ">
                                                <div class="input-group">
                                                  <input type="text" class="form-control text-center" value="1">
                                                  <div class="d-flex flex-column ml-2 justify-content-center">
                                                    <i class="fas fa-chevron-up cart-increase"></i>
                                                    <i class="fas fa-chevron-down cart-decrease"></i>
                                                  </div>
                                                </div>
                                              </td>
                                              <td class="text-center px-0 align-middle">$20.00<i class="far fa-trash-alt ml-4 cart-delete"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="container w-75">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Subtotal - <span class="subtotal-amount">$60.00</span></h5>
                                <h6 class="card-subtitle mb-2 text-muted">QST - <span class="qst-amount">$6.00</span></h6>
                                <h6 class="card-subtitle mb-2 text-muted">GST - <span class="gst-amount">$3.00</span></h6>
                              </div>
                              <div class="card-footer">
                                <h4 class="card-title font-weight-bold mb-0">Total - <span class="total-amount">$69.00</span></h4>
                              </div>
                            </div>
                          </div>
                          
                        <div class="modal-footer unique-div-2">
                            <button id="save" onclick="save()" class="btn btn-dark save-details" type="button"
                                name="save-details">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>