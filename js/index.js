$(document).ready(function(){
    
// event to handle search for movies
// $("#formSearch").bind("submit",function(e){
// 	e.preventDefault();

// 	let search = $("#search").val();

// 	if(search !== ''){
// 		alert("sorry match not found please subscribe to our mailing list to get latest movies");
// 	}else{
// 		alert("sorry search can't be empty");
// 		$("#search").val('');
// 	}
// })

// //event to handle form subscription
// $("#formSub").bind('submit',function(e){
// 	e.preventDefault();
// 	let email = $("#email").val();

// 	if(email === ''){
// 		alert("Please enter your Email address");
// 	}else{
// 		alert("Thanks for subscribing");
// 		$("#email").val('');
// 	}
// });

//event to handle contact form on submit
// $("#formContact").bind("submit",function(){
	
// 	let contact_name = $("#contact_name").val();
// 	let error_name = $("#error_name");

// 	let contact_email = $("#contact_email").val();
// 	let error_email = $("#error_email");

// 	let contact_message = $("#contact_message").val();
// 	let error_message = $("#error_message");

// 	if(contact_name === '' || contact_name === null){
// 		error_name.text("*required");
// 		return false;
// 	}else if(contact_email === '' || contact_email === null){
// 		error_email.text("*required");
// 		return false;
// 	}else if(contact_message === '' || contact_message === null){
// 		error_message.text("*required");
// 		return false;
// 	}
// });

//event to handle form contact on input
// $("#formContact").bind("input",function(e){
// 	let contact_name = $("#contact_name").val();
// 	let error_name = $("#error_name");

// 	let contact_email = $("#contact_email").val();
// 	let error_email = $("#error_email");

// 	let contact_message = $("#contact_message").val();
// 	let error_message = $("#error_message");

// 	if(contact_name !== '' || contact_name !== null){
// 		error_name.text('');
// 	}

// 	if(contact_email !== '' || contact_email !== null){
// 		error_email.text("") ;
// 	}

// 	if(contact_message !== '' || contact_message !== null){
// 		error_message.text("");
// 	}
//  });

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


$("#btnSub").bind("click",function(){
    var uemail = $("#email").val();
    if(uemail == "" || uemail == null){
        alert("please enter an email address");
        uemail.focus();
        return false;
    }
})
});