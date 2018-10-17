let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

for (let country of countries){
	let newCoun = document.createElement("option");
	newCoun.textContent = country;
	document.querySelector("#countries").appendChild(newCoun);
}


function selectCity(){
	let c = document.querySelectorAll("#cities option");
	for(let item of c){
		item.remove();
	}
	for (let country in cities_by_country){
		let coun = document.getElementById("countries").value;
		console.log(coun);
		if(coun==country){
			for(let city of cities_by_country[coun]){
				let newCity = document.createElement("option");
				newCity.textContent = city;
				document.querySelector("#cities").appendChild(newCity);
				
			}
		}
	}

	
}

document.querySelector('#countries').addEventListener('change', selectCity);