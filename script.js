$(function() {
	var dur = 5,
		delayBetween = 0.2;

	TweenMax.staggerTo(
		"textPath",
		dur,
		{
			attr: { startOffset: "100%" },
			ease: Power1.easeOut,
			repeat: -1
		},
		delayBetween
	);
});
