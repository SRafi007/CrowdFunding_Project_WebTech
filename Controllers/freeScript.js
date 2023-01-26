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
	xhttp.open('POST', '../Controllers/sendMsg.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+data);

	xhttp.onreadystatechange = function (){

		if(this.readyState == 4 && this.status == 200){
			location.reload();
			//alert(this.responseText);
			

		}
	}
}
}

function paycheck(creatorId){

	let id=creatorId;

	let json = {
		'cid':id,
	};

	let data = JSON.stringify(json);

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../Controllers/donateCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+data);
	

	xhttp.onreadystatechange = function (){
		updateDiv();

		if(this.readyState == 4 && this.status == 200){

			//alert(this.responseText);
			updateDiv();
		}
	
}
}
function updateDiv()
{ 
    $( "#messageBox" ).load(window.location.href + " #messageBox" );
}