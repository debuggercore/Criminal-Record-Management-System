$(document).ready( function() {
    $("#submit_button").click( function() {
        var val1 = $("#name").val();
        var val2 = $("#password").val();
       
	   
		
        var http_str = jQuery.param({ var1: val1, var2: val2, var3: val3});

        window.location = "myscript.php?" + http_str;
    }

});