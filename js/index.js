var banners = ["img/destaque-home.png", "img/destaque-home-2.png"]
var bannerAtual = 0

function trocaBanner(){
	bannerAtual = (bannerAtual + 1) % 2
	document.querySelector('.destaque img').src = banners[bannerAtual]
}

var timer = setInterval(trocaBanner, 4000)
var controle = document.querySelector(".pause")

controle.onclick = function(){
	if(controle.className == 'pause'){
		clearInterval(timer)
		controle.className = 'play'
	}
	else{
		timer = setInterval(trocaBanner, 4000)
		controle.className = 'pause'
	}

	return false
}

/*
document.querySelector(".container").onclick = function(){}

addEventListener utilizado para definir varios eventos em uma tag
document.querySelector(".container").addEventListener('click', function(){ })

utilizado do IE8 pra baixo
document.querySelector(".container").attachEvent('onclick', function(){ })
}


*/