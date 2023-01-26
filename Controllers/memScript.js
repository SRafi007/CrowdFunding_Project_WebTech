function ajax(myid){

	let message = document.getElementById('name');
	let id=myid;
	if(message.value!=""){

	let json = {
		'msg':message.value,
		'id':id,

	};

	let data = JSON.stringify(json);

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../Controllers/communityindex.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+data);

	xhttp.onreadystatechange = function (){

		if(this.readyState == 4 && this.status == 200){

			location.reload();

		}
	}
}
}

function paycheck(){
	
}