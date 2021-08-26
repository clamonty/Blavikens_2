//--------- DELETE BUTTON FUNCTIONALITY ----------//
const deleteButtons = document.getElementsByClassName('deletebtn');
// Add click event listener to each button
for (let i = 0; i < deleteButtons.length; i++) {
  deleteButtons[i].addEventListener('click', (e) => {
    // When clicked, remove target row
    e.target.parentElement.parentElement.remove();
  })
}
//---------- ADD NEW USER FUNCTIONALITY ----------//

const createUser = (username, email) => {
  let newRow = document.createElement("tr");

  newRow.innerHTML = `<tr>
  <th scope="row" class="px-0">
      <div class="d-flex align-items-center flex-column">
          <p class="align-self-center">${username}</p>
      </div>
  </th>
  <td class="text-center px-0">${email}</td>
  <td class="text-center px-0"><button type="button" class="btn btn-outline-dark"
          data-toggle="modal" data-target="#editModal">Edit</button></td>
  <td class="text--center px-0"><button type="button"
          class="btn btn-outline-danger deletebtn">Delete User</button></td>
  </tr>`;

  document.querySelector('.user-table').appendChild(newRow);
  newRow.childNodes[7].childNodes[0].addEventListener('click', (e) => {
    e.target.parentElement.parentElement.remove();
  });

}
window.onload = function(){console.log("help")}
document.querySelector(".add-user-form").addEventListener("submit", (e) => {
  console.log("sup");
  e.preventDefault();

  let userName = document.querySelector('.add-user-name').value;
  let userEmail = document.querySelector('.add-user-email').value;
  let userPassword = document.querySelector('.add-user-password').value;

  formData = {
    "username": userName,
    "email": userEmail,
    "password": userPassword,
  };

  $.ajax({
    type: 'POST',
    url: 'saveUserToXml.php',
    data: formData,
    success: function(data) {
        console.log("hello");
    }
  });

  createUser(username, email);
  $("#userModal").modal("toggle");
  return false;

});

//---------- EDIT USER FUNCTIONALITY ----------//
const editButtons = document.getElementsByClassName('edit-user-btn');

for (let i = 0; i < editButtons.length; i++) {
  editButtons[i].addEventListener('click', (e) => {
    let thisRow = e.target.parentElement.parentElement;
    let editForm = document.querySelector('.edit-user-form');
    console.log(thisRow.childNodes[3]);
    
    let submitHandler = function(e) {
      e.preventDefault();
      let newUserName = document.querySelector('#changeName').value;
      let newUserEmail = document.querySelector('#changeEmail').value;
      thisRow.childNodes[1].childNodes[1].childNodes[1].textContent = newUserName;
      thisRow.childNodes[3].textContent = newUserEmail;
      document.querySelector('#changeName').value = "";
      document.querySelector('#changeEmail').value = "";
      $("#editModal").modal('toggle');
      editForm.removeEventListener('submit', submitHandler);
    }
    editForm.addEventListener('submit', submitHandler);
    $('#editModal').on('hidden.bs.modal', function () {
      editForm.removeEventListener('submit', submitHandler);
    });
  });
}