console.log("JS dela");

const calendar = document.getElementById("calendar");
const monthYear = document.getElementById("monthYear");
const hiddenDate = document.getElementById("selectedDate");
const hiddenTime = document.getElementById("selectedTime");

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
    btn.type = "button";
    btn.textContent = day;
    btn.classList.add("day");

    btn.addEventListener("click", () => {

  document
    .querySelectorAll(".day")
    .forEach(d => d.classList.remove("selected"));

  btn.classList.add("selected");

  // shrani datum
  const fullDate =
    `${year}-${month + 1}-${day}`;

  hiddenDate.value = fullDate;

  console.log("Izbran datum:", hiddenDate.value);

  document
    .getElementById("timeSelect")
    .classList.remove("d-none");
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




const timeButtons = document.querySelectorAll(".time-btn");

let selectedTime = null;

timeButtons.forEach(button => {
  button.addEventListener("click", () => {

    // odstrani selected iz vseh
    timeButtons.forEach(btn => btn.classList.remove("selected"));

    // dodaj selected na kliknjenega
    button.classList.add("selected");

    // shrani čas
    selectedTime = button.textContent;

    console.log("Izbran čas:", selectedTime);
    hiddenTime.value = selectedTime;
  });
});

// start
renderCalendar(currentDate);