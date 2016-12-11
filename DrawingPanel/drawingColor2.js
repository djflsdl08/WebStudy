for(var i=8;i<16;i++) {
		document.write("<td id='"+ colorName[i] +"' onclick='f(this.id)'>");
		document.write("</td>");
	}
	for(var i=0;i<17;i++) {
		var tdColor = document.getElementById(colorName[i]);
		tdColor.style.background = colorName[i];
	}