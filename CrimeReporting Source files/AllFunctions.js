 function verif(inputtxt,inputtxt1) {
	var username="admin";
    var pwd = "1234";
    if (inputtxt.value.match(username)&&inputtxt1.value.match(pwd)) {
        window.location.href = 'AdminPage.php';
    } else {
        alert('Incorrect username/password! ');
        return false;
    }
	

}


