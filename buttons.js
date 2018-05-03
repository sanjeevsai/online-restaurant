//open file from buttons
function login()
{
	
	window.open("login.html","_self");
	
}


function signup()
{

	window.open("signup.html","_self");
	
	
}
function help()
{
	window.open("help.html","_self");
	
	
}

//rotating "food"

						var looper;
						var degrees=0;
						function rotating(el,speed)
						{
							var elem=document.getElementById(el);
							
								elem.style.transform="rotate("+degrees+"deg)";
								
							looper=setTimeout('rotating(\''+el+'\','+speed+')',speed);
							degrees++;
							if(degrees > 359)
								degrees=1;
								
						}
						
//food complete						