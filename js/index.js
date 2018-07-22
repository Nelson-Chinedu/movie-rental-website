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
})

//event to handle form subscription
$("#formSub").bind('submit',function(e){
	e.preventDefault();
	let email = $("#email").val();

	if(email === ''){
		alert("Please enter your Email address");
	}else{
		alert("Thanks for subscribing");
		$("#email").val('');
	}
});

//event to handle contact form on submit
$("#formContact").bind("submit",function(e){
	e.preventDefault();

	let contact_name = $("#contact_name").val();
	let error_name = $("#error_name");

	let contact_email = $("#contact_email").val();
	let error_email = $("#error_email");

	let contact_message = $("#contact_message").val();
	let error_message = $("#error_message");

	if(contact_name === '' || contact_name === null){
		error_name.text("*required");
	}else if(contact_email === '' || contact_email === null  ){
		error_email.text("*required");
	}else if(contact_message === '' || contact_message === null){
		error_message.text("*required");
	}else{
		alert("Thank you we'll be in touch with you soon");
		$("#contact_name").val('');
		$("#contact_email").val('');
		$("#contact_message").val('');
	}
});

//event to handle form contact on input
$("#formContact").bind("input",function(e){
	let contact_name = $("#contact_name").val();
	let error_name = $("#error_name");

	let contact_email = $("#contact_email").val();
	let error_email = $("#error_email");

	let contact_message = $("#contact_message").val();
	let error_message = $("#error_message");

	if(contact_name !== '' || contact_name !== null){
		error_name.text('');
	}

	if(contact_email !== '' || contact_email !== null){
		error_email.text("") ;
	}

	if(contact_message !== '' || contact_message !== null){
		error_message.text("");
	}
 });
});