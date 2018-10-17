function f() {
	var v1=document.getElementById('s11').value;
	var v2=document.getElementById('s12').value;
	var v3=document.getElementById('s13').value;
	var v4=document.getElementById('s21').value;
	var v5=document.getElementById('s22').value;
	var v6=document.getElementById('s23').value;
	var v7=document.getElementById('s31').value;
	var v8=document.getElementById('s32').value;
	var v9=document.getElementById('s33').value;
	document.getElementById("result").innerHTML= 
	(Number(v1)*Number(v5)*Number(v9))+(Number(v2)*Number(v6)*Number(v7))+(Number(v3)*Number(v4)*Number(v8)) - (Number(v3)*Number(v5)*Number(v7)) 
		- (Number(v1)*Number(v6)*Number(v8)) - (Number(v2)*Number(v4)*Number(v9))

}
let btn=document.getElementById("determinant");
btn.addEventListener("click",f);