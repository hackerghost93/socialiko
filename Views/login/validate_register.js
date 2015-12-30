function validate() {
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var password2 = document.getElementById("password2").value;
	var phone = document.getElementById("phone").value;

	var birthday = document.getElementById("birthday").value;
	var print = "";


	var ret = true;

	var c1 = isEmpty(firstname), c2 = isEmpty(lastname), c3 = isEmpty(email)
	c4 = isEmpty(password), c5 = isEmpty(password2), c8 = isEmpty(birthday);
	if(c1 || c2 || c3 || c4 || c5) {
		print += '-required to be filled:\n   ' + (c1 ? 'First name\n' : '')
							+ (c2 ? '   Last name\n' : '')
							+  (c3 ? '   Email\n' : '')
							+ ((c4 || c5) ? '   Password\n' : '')
							+ '\n\n';
		ret = false;
	}

	if(!c4) {
		if(password != password2) {
			print += '-mismatch in password fields\n\n';
			ret = false;
			c4 = false;
		} else if(password.length < 8) {
			print += '-password must have 8 Characters minimum\n\n';
			ret = false;
		}
	}

	if(!c3 && !email_is_valid(email)) {
		print += '-invalid email\n\n';
		ret = false;
	}

	if(!c8 && !birthday_is_valid(birthday)) {
		print += '-invalid birthday\n\n';
		ret = false;
	}

	if(!isEmpty(phone) && isNaN(phone)) {
		print += '-invalid phone number\n\n';
		ret = false;
	}
	var pic_path = document.getElementById("profile_picture").value;
	if(!isEmpty(pic_path) && !is_picture(pic_path)) {
		print += '-invalid profile picture\n\n';
		ret = false;
	}
	
	if(!ret) 
		alert(print);
	return ret;
}

function isEmpty(x) {
	return x == null || x == "";
}

function email_is_valid(t) {
	return (/\S+@\S+\.\S+/).test(t);
}

function birthday_is_valid(x) {
	var today = new Date();
	var day = today.getUTCDate().toString();
	var month = today.getUTCMonth();
	var year = today.getUTCFullYear();
	var arr = x.split("-");//year month day
	if(arr[0] < year) return true;
	if(arr[0] == year && arr[1] < month) return true;
	if(arr[0] == year && arr[1] == month)
		return arr[2] <= day;
	return false;
}

function is_picture(x) {
	var arr = x.split(".");
	return arr[arr.length-1].toLowerCase() == 'jpg' ||
		arr[arr.length-1].toLowerCase()  == 'png' ||
		arr[arr.length-1].toLowerCase()  == 'jpeg' ||
		arr[arr.length-1].toLowerCase()  == 'gif';
}