function addtocart(){
	var username=document.getElementById('username').innerHTML;
    if(username=="Sign In"){
      alert('You must log in first.');
      window.location.href="my-account.php";
    }
}