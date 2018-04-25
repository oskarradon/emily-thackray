$(function() {
  var dur = 100;
  // 	repDelay = 5;
  //
  // TweenMax.to("textPath", dur, {
  // 	attr: { startOffset: "100%" },
  // 	ease: Sine.easeInOut,
  // 	repeatDelay: repDelay,
  // 	repeat: -1,
  // 	yoyo: true
  // });

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
