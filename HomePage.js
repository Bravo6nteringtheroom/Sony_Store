let Login_btn = document.getElementById("LOGIN_BTN")
let SignUp_btn = document.getElementById("SignUp_btn")

Login_btn.addEventListener('click' , () => {
    window.location.href = "LoginPage.php"
})

SignUp_btn.addEventListener('click' , () => {
    window.location.href = "SignUpPage.php"
})

let Contact_Form = document.getElementById("contact-form")

Contact_Form.addEventListener('submit' , () => {
    let name = document.getElementById("name").value
    let email = document.getElementById("email").value
    let message = document.getElementById("message").value
    let Error_Message = document.getElementById("Error_Message")
    let allGood = true

    if(!email.includes("@")){
        Error_Message.textContent = "Please Fill in the Required Fields"
        allGood = false
    }else{
        allGood = true
    }

    if(name === "" || email === "" || message === ""){
        Error_Message.textContent = "Please Fill in the Required Fields"
        allGood = false
    }else{
        Error_Message.textContent = "";
        allGood = true
    }

    if(allGood){
        window.alert("Thanks for the Feedback")
    }
})

