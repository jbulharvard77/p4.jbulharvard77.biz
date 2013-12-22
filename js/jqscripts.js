<script>
$("#profile").validate();

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});

$( "input:blank" ).css( "background-color", "#bbbbff" );

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
var form = $( "#profile" );
form.validate();
$( "submit" ).click(function() {
  alert( "Valid: " + form.valid() );
});

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});

$( "#profile" ).validate({
  rules: {
    email: {
    	password: {
    		name:  {
    			address:  {
    			   city:  {
    			   	  zip:  {
      					required: true
   							}
   						  }
   						}
   					}
   				}
    		}
 		 }
});
</script>

