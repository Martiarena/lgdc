
// Fixed SideBar
function offset(elt) {
  let rect = elt.getBoundingClientRect(); 
  let bodyElt = document.body;
  return {
    top: rect.top + bodyElt .scrollTop,
    left: rect.left + bodyElt .scrollLeft
  }
}

window.addEventListener("load", function(){
  if(document.getElementById("sidebar")){
    const sidebar = document.getElementById("sidebar");
    const footer = document.getElementById("disclaimer");
    const top = offset(sidebar).top;
    const footTop = offset(footer).top;
    const maxY = footTop - sidebar.offsetHeight

    window.addEventListener("scroll", function(){
      let y = document.scrollingElement.scrollTop;
      if (y > top) {
        if (y < maxY) {
          sidebar.classList.add("fixed")
          sidebar.removeAttribute('style');
        } else {
          sidebar.classList.remove("fixed")
          sidebar.setAttribute('style', 'position: absolute; top: '+(maxY - top)+'px');
        }
      } else {
        sidebar.classList.remove("fixed")
      }
    })
  }
});