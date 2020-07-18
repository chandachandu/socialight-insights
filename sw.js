var CACHE_NAME = "socialight_insights";

var CACHE_RESOURCES = [
	'assets/css/bootstrap.min.css',
	'assets/css/bootstrap.min.css.map',
	'assets/js/main.js',
	'assets/js/home.js'
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