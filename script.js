window.addEventListener("load", function() {
	// hide second textPath element below a specific screen width
	function hideText() {
		var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName("body")[0],
			x = w.innerWidth || e.clientWidth || g.clientWidth,
			screenWidth = 768,
			el = document.getElementsByClassName("text2")[0];

		if (x <= screenWidth) {
			el.style.display = "none";
		} else {
			el.style.display = "block";
		}
	}

	hideText();

	// animate textPath element
	var dur = 100;

	var tl = new TimelineMax({ repeat: -1 });
	tl.add([
		TweenMax.to(".text1", dur, {
			attr: { startOffset: "100%" },
			ease: Power0.easeNone
		}),
		TweenMax.to(".text2", dur, {
			attr: { startOffset: "0%" },
			ease: Power0.easeNone
		})
	]);
	tl.play();

	// used to add an event listener
	var addEvent = function(object, type, callback) {
		if (object == null || typeof object == "undefined") return;
		if (object.addEventListener) {
			object.addEventListener(type, callback, false);
		} else if (object.attachEvent) {
			object.attachEvent("on" + type, callback);
		} else {
			object["on" + type] = callback;
		}
	};

	addEvent(window, "resize", function(event) {
		hideText();
	});
});
