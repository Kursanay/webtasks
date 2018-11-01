var url = "http://demo4296963.mockable.io/listCars";
var loadingButton = document.querySelector("button");
var img = document.querySelector("#loading");
var arrayOfCards;

function onStreamProcessed(text) {
  console.log(text);

  arrayOfCards = new Array();
  arrayOfCards = JSON.parse("[" + text + "]")[0];
  console.log(arrayOfCards);
  
  var cards = document.querySelector("#cards");

  arrayOfCards.forEach(element => {
  var card = document.createElement("div");
  var title = document.createElement("p");
  var price = document.createElement("p");

  title.innerHTML = element.maker + " " + element.model;
  price.innerHTML = element.price;

  title.classList.add("title");
  price.classList.add("price");

  card.appendChild(title);
  card.appendChild(price);

  card.classList.add("card");

  cards.appendChild(card);
  });

  img.style = "";
  loadingButton.textContent = "Loaded";
}

function onResponse(response) {
  console.log(response.status);
  return response.text();
}
function onFail(error) {
  console.log("Error " + error);
  loadingButton.textContent = response.status + "Some error has occur";
}

loadingButton.addEventListener("click", function(e) {
  loadingButton.textContent = "Loading...";
  img.style = "display: block"

  fetch(url).then(onResponse, onFail).then(onStreamProcessed);
});