//Dropdown für Login
$(document).ready(function(){
    $(".loginbtn").click(function(){
        if($(".loginbtn").text()==="Login") {
        	$(".dropdown-content1").toggle();
        }else{
    		$(".dropdown-content2").toggle();
    	}
    });
});