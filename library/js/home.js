document.addEventListener("DOMContentLoaded", () => {

	const quoteList = document.getElementById('quote-list');
	const iframeQuote = document.getElementById('iframe-quote');

	function loadIframe(lat, lon) {
		quoteList.innerHTML =
			`<div class="col-12 d-flex justify-content-center align-items-center">
				<iframe id="iframe-quote" src="https://dadosabertos.ana.gov.br/datasets/4b7b20091fb940d492a1ebc85dfa88bb_0/explore?location=${lat}%2C${lon}%2C4.56" frameborder="0"></iframe>
			</div>`;
	}

	loadIframe(-14.072992, -49.003376)


	jQuery(document).ready(function ($) {

	});
});
