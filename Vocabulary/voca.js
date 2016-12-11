var eng = document.getElementById("eng");
var kor = document.getElementById("kor");

function store() {
	if(!window.localStorage) {
		alert("로컬 스토리지를 지원하지 않습니다.");
		return;
	}
	var val = localStorage.getItem(eng.value);
	if(val==null)
		localStorage.setItem(eng.value,kor.value);
	else {
		var change = confirm(eng.value+"가 이미 있습니다. 수정하시겠습니까?");
		if(change==true)
			localStorage.setItem(eng.value,kor.value);
	}
}

function search() {
	if(!window.localStorage) {
		alert("로컬 스토리지를 지원하지 않습니다.");
		return;
	}
	var val = localStorage.getItem(eng.value);
	if(val==null)
		alert(eng.value+"는 없는 단어입니다.");
	else
		kor.value=val;
}

function erase() {
	if(!window.localStorage) {
		alert("로컬 스토리지를 지원하지 않습니다.");
		return;
	}
	var val = localStorage.getItem(eng.value);
	if(val==null)
		alert(eng.value+"는 없는 단어입니다.");
	else
		localStorage.removeItem(eng.value);
}

function viewAll() {
	window.open("viewAll.html","_blank");
}