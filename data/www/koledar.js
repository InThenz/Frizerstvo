console.log("JS dela");

const calendar = document.getElementById("calendar");
const monthYear = document.getElementById("monthYear");

let currentDate = new Date();

function renderCalendar(date) {
  calendar.innerHTML = "";

  const year = date.getFullYear();
  const month = date.getMonth();

  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  const monthNames = [
    "Januar", "Februar", "Marec", "April",
    "Maj", "Junij", "Julij", "Avgust",
    "September", "Oktober", "November", "December"
  ];

  monthYear.textContent = `${monthNames[month]} ${year}`;

  // prazni dnevi
  for (let i = 0; i < firstDay; i++) {
    const empty = document.createElement("div");
    calendar.appendChild(empty);
  }

  for (let day = 1; day <= daysInMonth; day++) {
    const btn = document.createElement("button");
    btn.textContent = day;
    btn.classList.add("day");

    btn.addEventListener("click", () => {
      document.querySelectorAll(".day").forEach(d => d.classList.remove("selected"));
      btn.classList.add("selected");

      document.getElementById("timeSelect").classList.remove("d-none");
    });

    calendar.appendChild(btn);
  }
}

// navigacija
document.getElementById("prevMonth").onclick = () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar(currentDate);
};

document.getElementById("nextMonth").onclick = () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar(currentDate);
};

// start
renderCalendar(currentDate);