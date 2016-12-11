var colorName = ["maroon","red","orange","yellow","olive",
				 "purple","fuchsia","white","lime","green",
				 "navy","aqua","teal","black","silver","gray"];
	for(var i=0;i<8;i++) {
		document.write("<td id='"+ colorName[i] +"' onclick='f(this.id)'>");
		document.write("</td>");
	}