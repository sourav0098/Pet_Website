(function () {
  "use strict";

  var elToggle = document.querySelector(".js-password-show-toggle"),
    passwordInput = document.getElementById("floatingPassword");

  elToggle.addEventListener("click", (e) => {
    e.preventDefault();

    if (elToggle.classList.contains("active")) {
      passwordInput.setAttribute("type", "password");
      elToggle.classList.remove("active");
    } else {
      passwordInput.setAttribute("type", "text");
      elToggle.classList.add("active");
    }
  });
})();
