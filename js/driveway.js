$("button").click(function()	{
	
//Compute how large driveway is
	var l = $("input[name='length']").val();	
	var x = $("input[name='width']").val();
	var lx = (l*x);

//How much will it cost
	var small = 30;
	var medium = 40;
	var large = 50;

//Inform of the cost

		if (l < 0 || x < 0)	{
		alert("The length and width must be positive numbers");
		}
		else if (lx > 0 && lx < 500)	{
			$("#output").html("The cost to plow your driveway will be "+ small +"$");
		}
		else if (lx > 500 && lx < 1500)	{
			$("#output").html("The cost to plow your driveway will be "+ medium +"$");
		}
		else	{
			$("#output").html("The cost to plow your driveway will be "+ large +"$");
		}
});


