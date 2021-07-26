$(document).ready(function () {
    var i = 1,
      counter = 0,
      place = 0;
    var animatedIn = "animate__backInRight";
    var animatedOut = "animate__backOutLeft";
    var animated = "animate__animated";
    var slideIn = "backInRight";
    var slideOut = "backOutLeft";
    var animatedInP = "animate__backInLeft";
    var animatedOutP = "animate__backOutRight";
    var slideInP = "backInLeft";
    var slideOutP = "backOutRight";
    var Childs = $("#slider section").length;
    const animateCSS = (element, animation, prefix = "animate__") =>
      new Promise((resolve, reject) => {
        const animationName = `${prefix}${animation}`;
        const node = document.querySelector(element);
        node.classList.add(`${prefix}animated`, animationName);
      });
    for (counter = Childs; counter > 0; counter--) {
      $("#slider section:nth-child(" + counter + ")").css("zIndex", (place += 1));
      // this if you want to slideing in or right with fade
      if (counter != 1) {
        $("#slider section:nth-child(" + counter + ")").css("opacity", "0");
      }
    }
    $(".next").click(function () {
      var cur = "#slider section:nth-child(" + i + ")";
      var next = "#slider section:nth-child(" + (i + 1) + ")";
      var firstChild = "#slider section:nth-child(1)";
      if (i == 1) {
        if ($(cur).hasClass(animatedOut) || $(cur).hasClass(animatedOutP)) {
          $(cur).removeClass();
          animateCSS(cur, slideIn);
        } else if ($(cur).hasClass(animatedIn) || $(cur).hasClass(animatedInP)) {
          $(cur).removeClass();
          animateCSS(cur, slideOut);
        } else {
          animateCSS(cur, slideOut);
        }
        if ($(next).hasClass(animatedOut) || $(next).hasClass(animatedOutP)) {
          $(next).removeClass();
          animateCSS(next, slideIn);
        } else if (
          $(next).hasClass(animatedIn) ||
          $(next).hasClass(animatedInP)
        ) {
          $(next).removeClass();
          animateCSS(next, slideOut);
        } else {
          animateCSS(next, slideIn);
        }
        i += 1;
      } else if (i == Childs) {
        $(cur).removeClass();
        animateCSS(cur, slideOut);
        i = 1;
        $(firstChild).removeClass();
        animateCSS(firstChild, slideIn);
      } else {
        if ($(cur).hasClass(animatedOut) || $(cur).hasClass(animatedOutP)) {
          $(cur).removeClass();
          animateCSS(cur, slideIn);
        } else {
          $(cur).removeClass();
          animateCSS(cur, slideOut);
        }
        if ($(next).hasClass(animatedIn) || $(next).hasClass(animatedInP)) {
          $(next).removeClass();
          animateCSS(next, slideOut);
        } else {
          $(next).removeClass();
          animateCSS(next, slideIn);
        }
        i += 1;
      }
    });
    $(".prev").click(function () {
      console.log(i);
      var cur = "#slider section:nth-child(" + i + ")";
      var prev = "#slider section:nth-child(" + (i - 1) + ")";
      var lastChild = "#slider section:nth-child(" + Childs + ")";
      if (i == 1) {
        if ($(cur).hasClass(animatedOut) || $(cur).hasClass(animatedOutP)) {
          $(cur).removeClass();
          animateCSS(cur, slideInP);
        } else if ($(cur).hasClass(animatedIn) || $(cur).hasClass(animatedInP)) {
          $(cur).removeClass();
          animateCSS(cur, slideOutP);
        } else {
          animateCSS(cur, slideOutP);
        }
        if (
          $(lastChild).hasClass(animatedOut) ||
          $(lastChild).hasClass(animatedOutP)
        ) {
          $(lastChild).removeClass();
          animateCSS(lastChild, slideInP);
        } else if (
          $(lastChild).hasClass(animatedIn) ||
          $(lastChild).hasClass(animatedInP)
        ) {
          $(lastChild).removeClass();
          animateCSS(lastChild, slideOutP);
        } else {
          animateCSS(lastChild, slideInP);
        }
        i = Childs;
      } else if (i == 2) {
        if ($(cur).hasClass(animatedOut) || $(cur).hasClass(animatedOutP)) {
          $(cur).removeClass();
          animateCSS(cur, slideInP);
        } else {
          $(cur).removeClass();
          animateCSS(cur, slideOutP);
        }
        if ($(prev).hasClass(animatedIn) || $(prev).hasClass(animatedInP)) {
          $(prev).removeClass();
          animateCSS(prev, slideOutP);
        } else {
          $(prev).removeClass();
          animateCSS(prev, slideInP);
        }
        i -= 1;
      } else {
        if ($(cur).hasClass(animatedOut) || $(cur).hasClass(animatedOutP)) {
          $(cur).removeClass();
          animateCSS(cur, slideInP);
        } else {
          $(cur).removeClass();
          animateCSS(cur, slideOutP);
        }
        if ($(prev).hasClass(animatedIn) || $(prev).hasClass(animatedInP)) {
          $(prev).removeClass();
          animateCSS(prev, slideOutP);
        } else {
          $(prev).removeClass();
          animateCSS(prev, slideInP);
        }
        i -= 1;
      }
    });
  });