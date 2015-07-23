$(document).ready(function(){
		done();

});

function done(){
	setTimeout(function(){		// refreshing the functions every 200 miliseconds for possible changes
		updates();
		done();
	}, 200);
}

function updates() {
	 $.getJSON("fetch.php", function(data) { // getting the json encoding from fetch and populating the ul with the key pairs
     $("ul").empty();
	 $.each(data.result, function(){
	 $("ul").append("<li>Name: "+this['name']+"</li><li>Email: "+this['email']+"</li><li>Telephone: "+this['telephone']+"</li><br />");
	   });
 });

}

