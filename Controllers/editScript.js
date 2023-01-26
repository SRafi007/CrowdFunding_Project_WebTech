function ajax(myid){

	let name = document.getElementById('username');
	let pass=document.getElementById('password');
	let mail=document.getElementById('email');
	let id=myid;
	if(name.value!="" ||pass.value!=""){

	let json = {
		'name':name.value,
		'id':myid,
		'password':pass.value,
		'mail':mail.value,

	};

	let data = JSON.stringify(json);

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../Controllers/editIndex.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+data);

	xhttp.onreadystatechange = function (){

		if(this.readyState == 4 && this.status == 200){

			//alert(this.responseText);

		}
	}
}
}

