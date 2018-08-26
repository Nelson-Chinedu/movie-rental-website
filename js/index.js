$(document).ready(function(){
    
// event to handle search for movies
$("#formSearch").bind("submit",function(e){
	e.preventDefault();

	let search = $("#search").val();

	if(search !== ''){
		alert("sorry match not found please subscribe to our mailing list to get latest movies");
	}else{
		alert("sorry search can't be empty");
		$("#search").val('');
	}
});

//event hadler for contact form
$("#formContact").bind("submit",function(){
	 
    var uname = document.contact.name;    
    var uemail = document.contact.email;  
    var umessage = document.contact.message;  
     
    if(allLetter(uname))  
    {      
    if(ValidateEmail(uemail))  
    {  
    if(msg(umessage))  
    {  
    }  
    }
    }      
    return false;  
});
    function allLetter(uname)  
    {   
    var letters = /^[A-Za-z]+$/;  
    if(uname.value.match(letters)){  
    return true;  
    }  
    else  
    {  
    alert('Username must have alphabet characters only');  
    uname.focus();  
    return false;  
    }  
} 

  function ValidateEmail(uemail)  
    {  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(uemail.value.match(mailformat))  
    {  
    return true;  
    }  
    else  
    {  
    alert("You have entered an invalid email address!");  
    uemail.focus();  
    return false;  
    }  
} 

//event handler for Newsletter subscription
$("#formSub").bind("submit",function(){
  var validMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var usermail = document.formFeed.emailSub;
  if(usermail.value === "" || usermail.value === null){
      alert('please enter an email address');
      usermail.focus();
      return false;
  }
  if(usermail.value.match(validMail)){
      return true;
  }else{
      alert("Invalid email address");
      usermail.focus();
      return false;
  }
});

//onshown give focus to first input on login/signup modal
$('#myModal9').on('shown.bs.modal', function() {
    $('#login_name').trigger('focus');
  }); 

$('#myModal10').on('shown.bs.modal', function() {
    $('#signup_fname').trigger('focus');
  });

$('#myModal11').on('shown.bs.modal', function() {
    $('#reset_password').trigger('focus');
  });

///event handler for user login
 $("#loginForm").bind("submit",function(){
 if(document.userLogin.loginUname.value===''||document.userLogin.loginUname.value===null){
        alert('please enter username');
       document.userLogin.loginUname.focus();
       return false; 
    }
    if(document.userLogin.loginPwd.value===''||document.userLogin.loginPwd.value===null){
        alert('please enter password');
       document.userLogin.loginPwd.focus();
       return false; 
    }
    alert("you are now logged in");
 });

///event handler for user signup
 $("#signupForm").bind("submit",function(){
    if(document.signupUser.signupFname.value===''||document.signupUser.signupFname.value===null){
        alert('please enter firstname');
       document.signupUser.signupFname.focus();
       return false; 
    }
    if(document.signupUser.signupLname.value===''||document.signupUser.signupFname.value===null){
        alert('please enter lastname');
       document.signupUser.signupLname.focus();
       return false; 
    }
    if(document.signupUser.signupEmail.value===''||document.signupUser.signupFname.value===null){
        alert('please enter an email address');
       document.signupUser.signupEmail.focus();
       return false; 
    }    
    if(document.signupUser.signupUname.value===''||document.signupUser.signupFname.value===null){
        alert('please enter username');
       document.signupUser.signupUname.focus();
       return false; 
    }
    if(document.signupUser.signupPwd.value===''||document.signupUser.signupFname.value===null){
        alert('please enter a password');
       document.signupUser.signupPwd.focus();
       return false; 
    }
    alert('account created successfully');
    return true;
 });

//event handler for reset password
$("#resetForm").bind("submit",function(){
    var msg = $('#reset_password').val();
 if(document.resetPassword.resetPwd.value===''||document.resetPassword.resetPwd.value===null){
        alert('please enter an email address');
       document.resetPassword.resetPwd.focus();
       return false; 
    }
    alert(`if ${msg} is associated to any account you will recieve a mail shortly` );
    return true;
 });

//event handler for update profile
$("#updateForm").bind("submit",function(){
 var update_fname = $("#update_fname").val();
 if(checkInputText(update_fname,'Please enter a name')) return;

 var update_lname = $("#update_lname").val();
 if(checkInputText(update_lname,'Please enter a name')) return;

 var update_email = $("#update_email").val();
 if(checkInputText(update_fname,'Please enter an email address')) return;

 function checkInputText(value,msg){
    if(value === null || value ===""){
        alert(msg);
        value.focus();
        return true;
    }
    return false;
 }
});
});