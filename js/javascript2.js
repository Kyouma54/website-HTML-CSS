var entrada = document.querySelector('h1')

/* funçao anonima */
entrada.onclick = function(){
	entrada.textContent = 'JavaScript!'
}
/* -STRINGS- */
/*strings sao imutaveis*/
var minha_string = "Javascript"

var tamanho = minha_string.length
console.log(tamanho)

minha_string = minha_string.replace("script", "script!")
console.log(minha_string)

/*cor cinza como string*/
var tamanhoTexto = "10"
console.log(tamanhoTexto)

/*cor azul quando é int*/
tamanhoTexto = parseInt(tamanhoTexto)
console.log(tamanhoTexto) 

/*Permite Concatenação e tambem operações aritmeticas com numeros*/
console.log(minha_string + "HTML E CSS")

var resultado = 10 + 'string'
/*Não eh possivel subtração*/
resultado = 10 - 'string' //NaN Not a Number
/*resultado == NaN     //False */
var boolean = isNaN(resultado) // true
console.log(resultado)
console.log(boolean)


/* -Numbers- */
/*numeros tambem são imutaveis*/
var numero = 1000
/*aumenta duas casas dps da virgula e como string*/
var numero_string = numero.toFixed(2)
console.log(numero_string)

/* -Arrays- */
var array = ['Typescript', 'Angular', [0,1,2,3]]
console.log(array)
console.log(array[2])

/*colocará string na ultima posição, poderia array[3] = "string" */
array.push("pushano o chimarrao")

console.log(array)

/* Blocos de Repetição */
var palavras = ["Java", "Netscape"]

for(var i=0; i<palavras.length; i++){
	alert(palavras[i])
}

var contador = 1
while(contador<=10){
	console.log(contador)
	contador++
}

/* Funções Temporais */
function minha_funcao(){
	alert("Hello World!")
}

/*executa uma vez daqui a 10000 milisegundos ou 10s*/
setTimeout(minha_funcao, 10000)

/*executa infinitamente no intervalo de 10 em 10s*/
var time = setInterval(minha_funcao, 10000)

/*clearInterval(time) encerra o intervalo infinito*/