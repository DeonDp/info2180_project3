window.onload =function() {

	var button =document.getElementById('submit');
	var id =document.getElementsByTagName('input')[0];
	var fname =document.getElementsByTagName('input')[1];
	var lname =document.getElementsByTagName('input')[2];
	var uname =document.getElementsByTagName('input')[3];
	var password =document.getElementsByTagName('input')[4];
	var cpassword =document.getElementsByTagName('input')[5];


	var passwordregex =/^(?=.*[A-Zaz])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/i;

	button.onclick =function() {

		if(id.value =='') {
			id.setAttribute('placeholder','Please enter user ID');
			return false;
		}
		if (fname.value =='') {
			fname.setAttribute('placeholder','Please enter your firstname');
			return false;
		}
		if(lname.value =='') {
			lname.setAttribute('placeholder','Please enter your lastname');
			lname.setAttribute('style','text-color :red')
			return false;
		}
		if(uname.value =='') {
			uname.setAttribute('placeholder','Please enter your username');
			return false;
		}
		if (!passwordregex.test(password.value)) {
			password.setAttribute('placeholder','Password must contain at least .....');
			return false;
		}
		if ((cpassword.value).localeCompare(password.value)) {
			cpassword.setAttribute('placeholder','Please ensure that confirm password matches your password');
			return false;
		}	
	}
};

