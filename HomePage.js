console.log("Hello")
let Login_btn = document.getElementById("LOGIN_BTN")
let SignUp_btn = document.getElementById("SignUp_btn")

Login_btn.addEventListener('click' , () => {
    console.log("Login button pressed")
    window.location.href = "LoginPage.html"
})

SignUp_btn.addEventListener('click' , () => {
    window.location.href = "SignUpPage.html"
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

let Spiderman_2_btn = document.getElementById("Spiderman_button")
let ERb = document.getElementById("Elden_Ring_button")
let RDR_2_btn = document.getElementById("RDR_2_Button")
let COD = document.getElementById("COD_button")
let PS5 = document.getElementById("PS5")
let PS4 = document.getElementById("PS4")
let fortnite_Bundle = document.getElementById("PS5_Fortnite_Bundle")

Spiderman_2_btn.addEventListener('click' , () => {
    let Spider_price = document.getElementById("Spiderman_2_price")
    window.alert("Game added to chart")
})

ERb.addEventListener('click' , () => {
    window.alert("Game added to chart")
})

RDR_2_btn.addEventListener('click' , () => {
    window.alert("Game added to chart")
})

COD.addEventListener('click' , () => {
    window.alert("Game added to the chart")
})

PS5.addEventListener('click' , () => {
    window.alert("Game added to the chart")
})

PS4.addEventListener('click' , () => {
    window.alert("Game added to the chart")
})

fortnite_Bundle.addEventListener('click' , () => {
    window.alert("Game added to the chart")
})