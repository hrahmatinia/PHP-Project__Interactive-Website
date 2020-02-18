/* global sign */

document.addEventListener("DOMContentLoaded",handleDocumentLoad);

function handleDocumentLoad()
{
var loginForm = document.getElementById("Login");
var registerForm = document.getElementById("Sign-UP");
var button = document.getElementById("button");
var LoginBTN = document.getElementById("LoginButton");
var SignUPBTN = document.getElementById("SignUPButton");

LoginBTN.addEventListener("click",Login);
SignUPBTN.addEventListener("click",Register);



function Register()
{
    loginForm.style.left = "-400px";
    registerForm.style.left = "50px";
    button.style.left = "110px";
    
}
function Login()
{
    loginForm.style.left = "50px";
    registerForm.style.left = "450px";
    button.style.left = "0px";
}
}