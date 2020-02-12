jQuery( document ).ready(function() {

	jQuery('.login-button').click(function(){
		
		login();
	});
	
	jQuery('.logout-button').click(function(){
		logout();
	});
	
	login = function() {

		if ( FB.getAuthResponse()  ) {
			loadProfile();
		}else{		
			FB.login(function(response) {
			  if (response.authResponse) {
				loadProfile();
			  } 
			});
		}
		return false;
	};
	
	loadProfile = function(){
		
		token = FB.getAccessToken();
		
		FB.api('/me', function(response) {
			console.log(response);
			setCookie("fb_me",JSON.stringify(response));
			document.location.reload();			
		});	
	}

	logout = function() {
		alert('logout');
		clearCookie("fb_me");
		document.location.reload();    
		if (FB.getAuthResponse()) {
			FB.logout();
		}
	};

	/* Facebook Loads */
	window.fbAsyncInit = function() {
	  
		FB.init({
		  appId: '1078708442504913',
		  cookie: true,
		  version: 'v2.2'
		});

		/* If cookie set, log in on each page load */
		FB.getLoginStatus(function(response){	
			if (document.cookie.includes("fb")) {
				
			}
		})
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));		

		
		
			
})	

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function clearCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999;';  
}