function ShowUserId() {
  let LoginUser = document.getElementById('LoginUser');
  let indexUser = document.getElementById('indexUser');
  indexUser.style.color = 'white';
}

document.getElementById("loginBtn").onclick = function () {
  ShowUserId();
};

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
