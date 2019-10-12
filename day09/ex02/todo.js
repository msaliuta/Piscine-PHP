window.onload = function () {
	toDoList = [];

	var cook = document.cookie;
	if (cook) {
		var arr_cook = cook.split(";");
		arr_cook.forEach(function (elem) {
			elem    = elem.trim();
			elem    = elem.split("=");
			var div = document.createElement('div');
			div.addEventListener("click", remove);
			div.className = "ft_list";
			div.innerHTML = elem[1];
			div.id        = elem[0];
			document.getElementById("ft_list").insertBefore(div, document.getElementById('ft_list').firstChild);
		})
	}
	document.getElementById('btn').onclick = function () {

		var todo = prompt("TO DO");
		if (todo !== '' && todo !== null) {
			var temp    = {};
			temp.todo   = todo;
			var i       = toDoList.length;
			toDoList[i] = temp;
			out(toDoList);
		}
	}
}

function out() {
	var out = '';
	for (var key in toDoList) {
		out += toDoList[key].todo.replace(/[=;]/g, '');
		var div = document.createElement('div');
		div.addEventListener("click", remove);
		div.className = "ft_list";
		div.innerHTML = out;
		div.id        = new Date().getTime();
	}
	document.getElementById("ft_list").insertBefore(div, document.getElementById('ft_list').firstChild);
	document.cookie = div.id + "=" + out;
	toDoList        = [];
}

function remove() {
	if (confirm("ARE YOU SURE?")) {
		document.cookie = this.id + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
		this.parentNode.removeChild(this);
	}
}