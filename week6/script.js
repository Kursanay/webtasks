function clickButton(e){
	let ele = e.currentTarget.parentNode;
	ele.setAttribute('data-status','done');
}

let all_buttons = document.querySelectorAll('#tasks button');
for (let button of all_buttons){
    button.addEventListener('click', clickButton);
}