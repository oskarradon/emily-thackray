$(function() {
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
});
