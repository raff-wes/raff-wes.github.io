const setTheme = theme => document.documentElement.className = theme;

// const topElement = document.querySelector('#top');
// const colorElement = document.querySelector('#color');

document.addEventListener('DOMContentLoaded', function () {
  //console.log("coś");
  //id("top").addEventListener("click", scrolltop);
  //id("colors").addEventListener("change", eventTest());
});

window.onscroll = function () {
  stickyFunction();
  scrollFunction();
  scrollIndicatorFunction();
};

const topElement = document.querySelector('#top');

topElement.addEventListener('click', (event) => {
  id("settingsBar").scrollIntoView({
    behavior: "smooth"
  });
});

const colorsElement = document.querySelector('#colors');

colorsElement.addEventListener('click', (event) => {
  setTheme(`${event.target.value}`);
});

  //const selectElement = document.querySelector('#colors');

  // selectElement.addEventListener('change', (event) => {
  //   alert(`${event.target.value}`);
  // });




  function stickyFunction() {
    var header = document.getElementById("sticky");
    var sticky = header.offsetTop;
    //console.log(sticky);
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      id("top").style.display = "block";
      id("title_1").style.fontSize = "150%";
      id("title_1").style.paddingTop = "1%";
      id("title_1").style.paddingBottom = "1%";
      id("title_2").style.display = "none";
    } else {
      id("top").style.display = "none";
      id("title_1").style.fontSize = "300%";
      id("title_1").style.paddingTop = "2%";
      id("title_1").style.paddingBottom = "0%";
      id("title_2").style.display = "block";
    }
  }

  function scrollIndicatorFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    id("myBar").style.width = scrolled + "%";
  }
  /*if(topElement){
    topElement.addEventListener('click', () => {
      id("settingsBar").scrollIntoView({
        behavior: "smooth"
      });
    });
  }*/
  // if(colorElement){
  //   colorElement.addEventListener('change', () => {
  //     setTheme(id("color").value);
  //   });
  // }


function scrolltop() {
  id("settingsBar").scrollIntoView({
    behavior: "smooth"
  });
}








function eventTest() {
  alert("Działa!");
}

function id(id) { return document.getElementById(id); }























