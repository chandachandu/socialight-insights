var CACHE_NAME = "socialight_insights";

var CACHE_RESOURCES = [
	'assets/img/404.jpg',
	'assets/img/app.png',
	'assets/img/bulb.png',
	'assets/img/aceesdenide.png',
	'assets/img/app-icon.png',
	'assets/img/favicon.png',
	'assets/img/insights.png',

	'assets/css/bootstrap.min.css',
	'assets/css/bootstrap.min.css.map',
	'assets/css/font-awesome.min.css',
	'assets/css/fonts.css',
	'assets/css/global.css',

	'assets/js/main.js',
	'assets/js/home.js',
	'assets/js/bootstrap.min.js',
	'assets/js/bootstrap.min.js.map',
	'assets/js/jquery-3.5.1.min.js',z


	'assets/fonts/Montserrat-Black.ttf',
	'assets/fonts/Montserrat-Bold.ttf',
	'assets/fonts/Montserrat-ExtraBold.ttf',
	'assets/fonts/Montserrat-Light.ttf',
	'assets/fonts/Montserrat-Medium.ttf'
];

self.addEventListener("install", function(event) {
	event.waitUntil(
		caches.open(CACHE_NAME).then(function(cache) {
			return cache.addAll(CACHE_RESOURCES);
		})
	);
});

self.addEventListener("fetch", function(event) {
	event.respondWith(
		caches.match(event.request).then(function(response) {
			if (response) {
				return response;
			}

			return fetch(event.request).then(function(res) {
				if (!res || res.status !== 200) {
					return res;
				}

				var resCache = res.clone();
				caches.open(CACHE_NAME).then(function(cache) {
					cache.put(event.request, resCache);
				});
				return res;
			});
		})
	);
});

self.addEventListener("activate", function(event) {
	
});