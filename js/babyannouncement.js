/*-------------------------------------------------------------------------------------------------
Color picker
-------------------------------------------------------------------------------------------------*/
$('.colors').click(function() {

	// Figure out which color we should use
	var chosen_color = $(this).css('background-color');

	// Change the background color of the canvas
	$('#canvas').css('background-color', chosen_color);
	
	// Also change the texture choices
	$('.textures').css('background-color', chosen_color);

});	

/*-------------------------------------------------------------------------------------------------
It's a...
-------------------------------------------------------------------------------------------------*/
$('.itsa').click(function() {

	 // Which radio button was clicked?
	 // (Note here how we're storing a whole element in a variable... cool, huh?)
	 var radio_button = $(this);

	 // What is the label next to (i.e. after) that radio 
	 var label = radio_button.next();

	 // Now that we know the label, grab the text inside of it (That's our message!)
	 var gender = label.html();
		
	$('#itsa-output').html(gender);
	
});

$('#first_name').keyup(function() {

	// Figure out what the user typed in
	var f_name = $(this).val();
	
	// Inject the first name into the output div on the card
	$('#first_name-output').html(f_name);	
	
});

$('#last_name').keyup(function() {

	// Figure out what the user typed in
	var l_name = $(this).val();
	
	// Inject the last name into the output div on the card
	$('#last_name-output').html(l_name);	
	
});

/*-------------------------------------------------------------------------------------------------
Recipient
-------------------------------------------------------------------------------------------------*/
$('#message').keyup(function() {

	// Figure out what the user typed in
	var mess = $(this).val();
	
	// Inject the message into the output div on the card
	$('#message-output').html(mess);
	
	// How long was the message?
	var length = mess.length;
	
	// If it was 255 characters, that's the max, so inject an error message
	if(length == 255) {
		$('#message-error').html("Max characters: 255");
	}
	// Otherwise, we're all good, clear the error message
	else {
		$('#message-error').html("");
	}
	
	// Note: The "maxlength" attribute on the HTML element will prevent the user from entering more than 14 characters
	// <input type='text' id='recipient' maxlength="14"> 
	
});

/*-------------------------------------------------------------------------------------------------
Print
-------------------------------------------------------------------------------------------------*/
$('#print-btn').click(function() {

	$.ajax({
		type: 'POST',
		url: 'announcement/create.php',
		success: function(response)	{
			$('#print-btn').html(response);
		},
		data:  {
			chosen_color: $(this).css('background-color'),
			gender = label.html();

		} 
	})
});


