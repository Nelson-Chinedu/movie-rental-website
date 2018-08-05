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
});