
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

let log = document.getElementById("log");
let reg = document.getElementById("reg");

function register() {
  x.style.left = "-300px";
  y.style.left = "50px";
  z.style.left = "110px";
  reg.style.color = "white";
  log.style.color = "#01579b";
}
function login() {
  x.style.left = "44px";
  y.style.left = "450px";
  z.style.left = "0px";
  log.style.color = "white";
  reg.style.color = "#01579b";
}

function toggleHide() {
  let btn = document.getElementById("btn");
  let para = document.getElementById("para");

  if (para.style.display != "none") {
    para.style.display = "none";
  } else {
    para.style.display = "block";
  }
}

var form = document.getElementById('register');
var error = document.getElementsByClassName('error');
var userName = document.getElementById("userId");
var emailInput = document.getElementById("email-input");
var pass = document.getElementById("pass");
var conpass = document.getElementById("conpass");

form.addEventListener('submit',(e)=>{
  e.preventDefault();
  if(userName.value.length < 6){
    error[0].innerHTML = "*Username should have greater then 6 characters";
  }else{
    error[0].innerHTML = "";
  }

  if(pass.value.length < 6){
    error[2].innerHTML = "*password should have greater then 6 characters";
  }else{
    error[2].innerHTML = "";
  }

  if(emailInput.value.includes("@ahduni.edu.in") === false){
    error[1].innerHTML = "*Should be an Ahmedabad University E-mail";
  }
  else{
    error[1].innerHTML = "";
  }

  if(conpass.value != pass.value){
    error[3].innerHTML = "Confirm password inequal to password";
  }
  else{
    error[3].innerHTML = "";
  }

})

