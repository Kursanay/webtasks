function f3(){
		var tableRef = document.getElementById('students');
		if(document.getElementById("name").value==""){
			document.getElementById("name").style.border = "5px solid blue";

		}else if(document.getElementById("surname").value==""){
			document.getElementById("surname").style.border = "5px solid red";	
		
		}else if(document.getElementById("faculty").value=="-1"){
			document.getElementById("faculty").style.border="5px solid red";
		}else{
			// Insert a row in the table at the last row
			var newRow   = tableRef.insertRow();
			// Insert a cell in the row at index 0
			var newCell1  = newRow.insertCell(0);
			var newCell2  = newRow.insertCell(1);
			var newCell3  = newRow.insertCell(2);
			var newText1  = document.createTextNode(document.getElementById("name").value);
			var newText2  = document.createTextNode(document.getElementById("surname").value);
			var newText3  = document.createTextNode(document.getElementById("faculty").value);
			newCell1.appendChild(newText1);
			newCell2.appendChild(newText2);	
			newCell3.appendChild(newText3);	
			newCell3.style.fontWeight = "bold";	
		}
}



var btn=document.getElementById("addStudent")
btn.addEventListener("click", f3);
