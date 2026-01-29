document.addEventListener("DOMContentLoaded", function () {
  /** DOM Objects */
  const tabs = document.querySelectorAll(".menu-tabs .tab");
  const grid = document.querySelector(".menu-grid");

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      tabs.forEach((tb) => tb.classList.remove("active"));
      this.classList.add("active");

      const filter = this.dataset.filter;
      grid.classList.add("loading");

      fetch(menuAjax.ajaxurl, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          action: "filter_menu",
          category: filter,
        }),
      })
        .then((res) => res.text())
        .then((data) => {
          grid.innerHTML = data;
          grid.classList.remove("loading");
        })
        .catch((error) => {
          console.error("AJAX Error:", error);
          grid.classList.remove("loading");
        });
    });
  });
});
