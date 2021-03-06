<?php session_start(); ?>
<?php 
  if($_SESSION['user-status'] != 'admin') {
    header("Location: ../front_page");
  }
?>
<?php include("../../resources/templates/back/back_header.php"); ?>

    <div class="userList">
        <div class="container">
            <h1 class="text-center py-4">User List</h1>
            <button type="button" class="btn btn-outline-dark" style="margin-bottom: 2em;" data-toggle="modal"
                data-target="#userModal">Add a User</button>

            <div id="userModal" class="modal fade" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title ml-auto" id="exampleModalLabel">Add a User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="add-user-form">
                                <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="username" id="username" class="form-control add-user-name"
                                        placeholder="Enter user's name">
                                </div>
                                <div class="form-group">
                                    <label for="userEmail">Email Address</label>
                                    <input type="userEmail" id="userEmail" class="form-control add-user-email"
                                        placeholder="Enter user's email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Temporary Password</label>
                                    <input type="password" id="password" class="form-control add-user-password"
                                        placeholder="Enter temporary user password">
                                </div>
                                <div class="modal-footer unique-div-2">
                                    <button id="save" class="btn btn-dark save-details" type="submit"
                                        name="save-details">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>

                        </div>
  
                    </div>
                </div>
            </div>

            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="user-table">
                    <tr>
                        <th scope="row" class="px-0">
                            <div class="d-flex align-items-center flex-column">
                                <p class="align-self-center">Geralt</p>
                            </div>
                        </th>
                        <td class="text-center px-0">geraltofrivia@gmail.com</td>
                        <td class="text-center px-0"><button type="button" class="btn btn-outline-dark edit-user-btn"
                                data-toggle="modal" data-target="#editModal">Edit</button></td>
                        <td class="text--center px-0"><button type="button"
                                class="btn btn-outline-danger deletebtn">Delete User</button></td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-0">
                            <div class="d-flex align-items-center flex-column">
                                <p class="align-self-center">Yennefer</p>
                            </div>
                        </th>
                        <td class="text-center px-0">yenneferofvengerberg@hotmail.com</td>
                        <td class="text-center px-0"><button type="button" class="btn btn-outline-dark edit-user-btn"
                                data-toggle="modal" data-target="#editModal">Edit</button>
                        </td>
                        <td class="text--center px-0"><button type="button"
                                class="btn btn-outline-danger deletebtn ">Delete
                                User</button>
                            </td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-0">
                            <div class="d-flex align-items-center flex-column">
                                <p class="align-self-center">Triss</p>
                            </div>
                        </th>
                        <td class="text-center px-0">trissmerigold@gmail.com</td>
                        <td class="text-center px-0"><button type="button" class="btn btn-outline-dark edit-user-btn"
                                data-toggle="modal" data-target="#editModal">Edit</button>
                        </td>
                        <td class="text--center px-0"><button type="button"
                                class="btn btn-outline-danger deletebtn ">Delete
                                User</button></td>
                    </tr>
                    <div id="editModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title ml-auto" id="exampleModalLabel">Edit User Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span></button>

                                </div>
                                <div class="modal-body">
                                    <form class="edit-user-form">
                                        <div class="form-group">
                                            <label for="changeName">Change Username</label>
                                            <input type="name" id="changeName" class="form-control"
                                                placeholder="Enter new username">
                                        </div>

                                        <div class="form-group">
                                            <label for="changeEmail">Change Email Address</label>
                                            <input type="email" id="changeEmail" class="form-control"
                                                placeholder="Enter new email">
                                        </div>
                                        <div class="form-group">
                                            <label for="changePassword"> Change Password</label>
                                            <input type="password" id="changePassword" class="form-control"
                                                placeholder="Enter new password">
                                        </div>
                                        <div class="modal-footer unique-div-2">
                                            <button id="save" class="btn btn-dark save-details"
                                                type="submit" name="save-details">Save</button>
                                            <button type="button" class="btn btn-secondary "
                                                data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
  

                            </div>

                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>