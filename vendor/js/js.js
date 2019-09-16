document.getElementById('altausuario').onsubmit=function(){
	


}

bootstrapValidate('#usuario', 'required:Please fill out this field!');
bootstrapValidate('#password', 'required:Please fill out this field!');
bootstrapValidate('#password', 'matches:#password2 Confirm:Your passwords should match');
