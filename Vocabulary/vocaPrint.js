var area = document.getElementById("area");
var str = "<table>";
for(var i=0;i<localStorage.length;i++) {
	str += "<tr>";
	var key = localStorage.key(i);
	var value = localStorage.getItem(key);
	str +="<td id='num'>"+(i+1)+"</td>";
	str += "<td id='key'>"+ key + "</td> ";
	str += "<td>"+ value + "</td> ";
	str += "</tr>";
}
str += "</table>";
area.innerHTML = str;