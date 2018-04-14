$(function() {
  // var for # of projects

  function changeSnake() {
    let numOfProjects = $("main svg text textPath").length;
    console.log(numOfProjects);

    setOffset(numOfProjects);
    setFontSize(numOfProjects);
    setHeight(numOfProjects);
    setMargins(numOfProjects);
  }

  function setOffset(x) {}

  function setFontSize(x) {}

  function setHeight(x) {}

  function setMargins(x) {}

  changeSnake();

  // depending on the number of projects
  // set offset of textPath element
  // set font-size of .text-snake text element
  // set height of .text-snake element
  // set left and top margin of .text-snake element
});
