$(document).ready(function(){
		done();

});

function done(){
	setTimeout(function(){
		updates();
		done();
	}, 200);
}

function updates() {
	 $.getJSON("fetch.php", function(data) {
     $("ul").empty();
	 $.each(data.result, function(){
	 $("ul").append("<li>Name: "+this['name']+"</li><li>Email: "+this['email']+"</li><li>Telephone: "+this['telephone']+"</li><br />");
	   });
 });

}

