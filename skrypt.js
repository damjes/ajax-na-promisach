const artykuly = document.getElementById('artykuly');
var odile = 3;

function wiecej() {
	let url = 'json.php?odile=' + odile
	fetch(url)
		.then(response => response.json())
		.then(json => {
			for(let i in json) {
				let artykul = json[i]
				div = document.createElement('div')
				div.innerHTML = '<h2>' + artykul['liczba'] + '</h2>'
				div.innerHTML += '<p>' + artykul['nazwa'] + '</p>'
				artykuly.appendChild(div);
			}
			odile += 3;
		})
}