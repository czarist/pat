document.addEventListener("DOMContentLoaded", () => {

	const quoteList = document.getElementById('quote-list');
	const iframeQuote = document.getElementById('iframe-quote');
	const locationSelect = document.getElementById('location-select');


	function loadIframe(lat, lon, scala) {
		quoteList.innerHTML =
			`<div class="col-12 d-flex justify-content-center align-items-center">
				<iframe id="iframe-quote" src="https://dadosabertos.ana.gov.br/datasets/4b7b20091fb940d492a1ebc85dfa88bb_0/explore?location=${lat}%2C${lon}%2C${scala}" frameborder="0"></iframe>
			</div>`;
	}

	loadIframe(-14.072992, -49.003376, 4.56)

	function changeLocationByValue(value) {
		if (value == 'norte') {
			loadIframe(-4.323841, -56.544814, 5.96);
		} else if (value == 'nordeste') {
			loadIframe(-10.701344, -41.600314, 5.96);
		} else if (value == 'centro-oeste') {
			loadIframe(-15.334496, -51.441814, 5.96);
		} else if (value == 'sudeste') {
			loadIframe(-20.439494, -41.509189, 5.96);
		} else if (value == 'sul') {
			loadIframe(-26.477131, -49.254814, 5.96);
		}
	}

	locationSelect.onchange = function () {
		changeLocationByValue(this.value);
	}

	jQuery(document).ready(function ($) {

	});
});
