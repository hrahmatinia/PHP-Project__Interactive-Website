/* this is my register form animation */

document.addEventListener("DOMContentLoaded", handleDocumentLoad);

//get ellements by id
function handleDocumentLoad()
{
    var loginForm = document.getElementById("Login");
    var registerForm = document.getElementById("Sign-UP");
    var button = document.getElementById("button");
    var LoginBTN = document.getElementById("LoginButton");
    var SignUPBTN = document.getElementById("SignUPButton");
//add event listener
    LoginBTN.addEventListener("click", Login);
    SignUPBTN.addEventListener("click", Register);


//functions
//yhese two funcion just just move butoons from left to right and vise versa
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