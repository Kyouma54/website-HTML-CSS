function alterar(){
	var msg = document.querySelector("h1")
	msg.textContent = "Alterei"
}

function alterar2(){
	var msg = document.querySelector("h1")
	msg.textContent = "Javascript"
}

var titulo = document.querySelector("input[type=button]")

titulo.onclick = alterar

titulo.ondblclick = alterar2