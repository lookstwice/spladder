
$(document).ready(function(){
   $.get("/main.tpl", function(data){
      $("#template").append(data);
   });
   $("#loginLink").click(function(){
      $("#loginPanel").removeClass("hide");
   });
});
