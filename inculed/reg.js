class formValidation{
formValues = {
    first:"",
    last:"",
    username:"",
    password:"",
    password2:"",
    email:"",
    address:"",
    age:"",
    phone:""
}
errorValues = {
    firstErr:"",
    lastErr:"",
    usernameErr :"",
    passwordErr:"",
    password2Err:"",
    emailErr :"",
    addressErr:"",
    ageErr:"",
    phoneErr:""
}
showErrorMsg(index,msg){
  const input_name = document.getElementsByClassName("input-name")
  [index]
  input_name.classlist("error")
  input_name.getElementByTagName("span")[0].textContent = msg
}
showSuccessMsg(index){
    const input_name = document.getElementsByClassName("input-name")
    [index]
    input_name.classList.remove("error")
    input_name.classList.add("succes")

    
}
getInputs(){
   this.formValues.first= document.getElementById("first").value.trim()
   this.formValues.last= document.getElementById("last").value.trim()
   this.formValues.username= document.getElementById("username").value.trim()
   this.formValues.password= document.getElementById("password").value.trim()
   this.formValues.password2= document.getElementById("password2").value.trim()
   this.formValues.email= document.getElementById("email").value.trim()
   this.formValues.address= document.getElementById("address").value.trim()
   this.formValues.age= document.getElementById("age").value.trim()
   this.formValues.phone= document.getElementById("phone").value.trim()
   
   
   
   
   
}
validatefirst(){
  if(this.formValues.first === ""){
    this.errorValues.firstErr = "*  Please Enter Your Name"
    this.showErrorMsg(0,this.errorValues.firstErr)
  }
   else {
    this.errorValues.firstErr = ""
    this.showErrorMsg(0)
  }

}
validatelast(){
    if(this.formValues.last === ""){
        this.errorValues.lastErr = "*  Please Enter Your Name"
        this.showErrorMsg(0,this.errorValues.lastErr)
      }
       else {
        this.errorValues.lastErr = ""
        this.showErrorMsg(0)
      }
    
}
validateusername(){

    if(this.formValues.username === ""){
    this.errorValues.usernameErr = "*  Please Enter Your Name"
    this.showErrorMsg(0,this.errorValues.usernameErr)
  }else if(this.formValues.first.length <= 4){
    this.errorValues.usernameErr = "* username must be atleast 5 Characters"
    this.showErrorMsg(0,this.errorValues.usernameErr)
  }else if(this.formValues.username.length > 14){
    this.errorValues.usernameErr = "* username should not exceede 14 characters"
    this.showErrorMsg(0,this.errorValues.usernameErr)

  } else {
    this.errorValues.usernameErr = ""
    this.showErrorMsg(0)
  }
}
validatepassword(){
    
}
validatepassword2(){
    
}
validateemali(){
    
}
validateaddress(){
    
}
validateage(){
    
}
validatephone(){
    
}
alertMessage(){

}
removeInputs(){

}
}

const validateUserInputs = new formValidation
()
document.getElementById("form")[0]
addEventListener("submit", () =>{
    validateUserInputs.getInputs()
    validateUserInputs.validatefirst()
    validateUserInputs.validatelast()
    
})