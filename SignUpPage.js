let First_name_Error = document.getElementById("First_name_Error")
let Last_name_Error = document.getElementById("Last_name_Error")
let Email_Error = document.getElementById("Email_Error")
let Password_Error = document.getElementById("Password_Error")
let Password_Confirm_Error = document.getElementById("Password_Confirm_Error")

document.getElementById("SignUpForm").addEventListener('submit' , (event) =>{
    event.preventDefault();

    let First_name = document.getElementById("First_name").value.trim()
    let Last_name = document.getElementById("Last_name").value.trim()
    let Email = document.getElementById("Email").value.trim()
    let Password = document.getElementById("Password").value
    let Password_Confirm = document.getElementById("Password_Confirm").value
    let allGood = true
    
    if(First_name === ""){
        First_name_Error.textContent = "First Name Required"
        allGood = false
    } else {
        First_name_Error.textContent = ""
    }

    if(Last_name === ""){
        Last_name_Error.textContent = "Last Name Required"
        allGood = false
    } else {
        Last_name_Error.textContent = ""
    }

    if(!Email.includes("@") || Email === ""){
        Email_Error.textContent = "An error has occurred in the email"
        allGood = false
    } else {
        Email_Error.textContent = ""
    }

    if(Password.length < 8){
        Password_Error.textContent = "Your Password is shorter than 8 characters"
        allGood = false
    } else {
        Password_Error.textContent = ""
    }

    if(Password_Confirm !== Password){
        Password_Confirm_Error.textContent = "Your Password doesn't match the Confirm Password"
        allGood = false
    } else {
        Password_Confirm_Error.textContent = ""
    }
    
    if(allGood){
        event.target.submit()
    }
})
