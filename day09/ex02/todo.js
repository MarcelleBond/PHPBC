
function add() {
	var todo = prompt("TO DO");
	var list = document.getElementById('ft_list');
	if (todo != null)
	{
		document.cookie
		var item = document.createElement('p');
		item.addEventListener('click',droptodo)
		item.innerText = todo;
		list.insertBefore(item,list.firstChild)
	}
}

function droptodo() {
	if (confirm("Do you wnat to remove this TO DO"))
		this.parentElement.removeChild(this);
}