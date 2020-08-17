var inputRange = document.querySelector("[name=tamanho]")
var outputRange = document.querySelector('[name=valortamanho]')

function mostraTamanho(){
	outputRange.value = inputRange.value
	outputRange.textContent = event.target.value
}

inputRange.oninput = mostraTamanho

inputRange.onchange = mostraTamanho