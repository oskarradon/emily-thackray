<<<<<<< HEAD
(function($) {
  "use strict";

  $(function() {
    // var textDiv = $(".blog-name"),
    //   sentence = textDiv.html().split(""),
    //   tl = new TimelineMax({ repeat: 10, repeatDelay: 0.4, yoyo: true });
    //
    // TweenLite.set(textDiv, {
    //   css: {
    //     perspective: 500,
    //     perspectiveOrigin: "50% 50%",
    //     transformStyle: "preserve-3d"
    //   }
    // });
    // textDiv.html("");
    //
    // $.each(sentence, function(index, val) {
    //   if (val === " ") {
    //     val = "&nbsp;";
    //   }
    //   var letter = $("<span/>", { id: "txt" + index })
    //     .html(val)
    //     .appendTo(textDiv);
    //   tl.to(
    //     letter,
    //     1,
    //     {
    //       autoAlpha: 1,
    //       ease: Back.easeOut,
    //       rotationX: 360,
    //       transformOrigin: "50% 50% -20"
    //     },
    //     index * 0.05
    //   );
    // });
    // $("textPath").each(function() {
    //   console.log($(this));
    //
    //   // TweenMax.from("textPath", 5, {
    //   //   attr: { startOffset: "100%" },
    //   //   delay: 1.5,
    //   //   repeat: -1,
    //   //   repeatDelay: 1,
    //   //   ease: Power4.easeIn
    //   // });
    // });
  });
})(jQuery);
=======
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
>>>>>>> 214e4c8e1a2adbf066b9e180abc1ae15ccef5f07
