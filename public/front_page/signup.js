document.getElementById('password2').addEventListener('keyup', checkPasswords);
document.getElementById('add_user').addEventListener('add_user', clicked);
function clicked(){
  alert("Welcome to the club!");
}

function checkPasswords(){
  if(document.getElementById('password1').value == document.getElementById('password2').value){
    document.getElementById("message").style.color="green";
    document.getElementById("message").innerHTML = "Passwords matches!";
    document.getElementById("add_user").disabled = false;

  }else {
    document.getElementById("message").style.color = 'red';
    document.getElementById("message").innerHTML = "These passwords don't match";
    if (checkOtherInputs()) {
      document.getElementById('add_user').disabled = true;
    }
  }
}


