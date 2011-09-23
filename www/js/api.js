var eL = {};
eL.api = {};

//Users
eL.api.createUser = function(username, password, firstname, lastname){
   return username;
}

eL.api.getUsers = function(){
   return ["rhawkins", "cmartinez", "blogan"];
}

eL.api.getUser = function(username){
   if(username == "rhawkins"){
      return ["richard", "hawkins", "assclown"];
   }
   else if(username == "cmartinez"){
      return ["carlos", "martinez", "douche"];
   }
   else if(username == "blogan"){
      return ["brandon", "logan", "fuhrer"];
   }
   else{
      return null;
   }
}

//Games
eL.api.getGames = function(){
   return ["Left 4 Dead 2"];
}

eL.api.getGame = function(game){
   return ["blah", "blah"];
}


//Matches
eL.api.getMatches = function(){
   return [["101", "douchebags", "dickheads"]];
}

eL.api.getMatch = function(matchId){
   return ["douchebags", "dickheads", "8:00 PM", "Left 4 Dead 2"];
}

eL.api.getMatchesByGame = function(game){
   return [["101", "douchebags", "dickheads"]];
}


//Teams
eL.api.createTeam = function(game, teamName, teamCreator, joinPassword){
   return teamName;
}

eL.api.getTeams = function(){
   return ["douchebags", "dickheads"]; 
}

eL.api.getTeamsByGame = function(game){
   return ["douchebags", "dickheads"];
}

eL.api.getTeam = function(team){
   var members = ["rhawkins", "cmartinez"];
   return [members]
}

//Helpers
eL.api.call = function(uri, httpMethod, data){
	$.ajax({
	   cache: false,
	   type: httpMethod,
	   async: false,
	   url: uri,
	   data: data,
	   contentType: "application/json",
	   dataType: "json",
	   success: function(){
	      alert("success");
	   }
	});
}
