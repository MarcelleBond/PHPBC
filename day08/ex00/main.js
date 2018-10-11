function rolldice() {
	var die1 = document.getElementById("die1");
	var die2 = document.getElementById("die2");
	var status = document.getElementById("status");
	var d1 = Math.floor(Math.random() * 6) + 1;
	die1.innerHTML = d1;
	status.innerHTML = "You rolled "+d1+"."

}
