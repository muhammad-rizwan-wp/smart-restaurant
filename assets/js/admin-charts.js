document.addEventListener("DOMContentLoaded", function () {
  if (typeof Chart === "undefined") return;

  const dailyCtx = document.getElementById("dailyChart");
  const monthlyCtx = document.getElementById("monthlyChart");

  if (!dailyCtx || !monthlyCtx) return;

  new Chart(dailyCtx, {
    type: "line",
    data: {
      labels: dailyData.map((d) => d.sales_date),
      datasets: [
        {
          label: "Daily Sales",
          data: dailyData.map((d) => d.total),
          borderWidth: 2,
        },
      ],
    },
  });

  new Chart(monthlyCtx, {
    type: "bar",
    data: {
      labels: monthlyData.map((d) => d.month),
      datasets: [
        {
          label: "Monthly Sales",
          data: monthlyData.map((d) => d.total),
          borderWidth: 1,
        },
      ],
    },
  });
});
