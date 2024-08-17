document.addEventListener("DOMContentLoaded", function () {
  let calendarEl = document.getElementById("calendar");

  if (calendarEl) {
    let calendar = new FullCalendar.Calendar(calendarEl, {
      height: 350,
      slotDuration: "02:00",
      slotMinTime: "08:00",
      slotMaxTime: "22:00",
      initialDate: "2024-08-14",
      initialView: "timeGridWeek",
      hiddenDays: [0],
      headerToolbar: {
        left: "prev,next",
        center: "title",
        right: "",
      },
      events: [
        {
          start: "2024-08-14T10:00:00",
          end: "2024-08-14T12:00:00",
          backgroundColor: "#028FA2",
          borderColor: "#028FA2",
        },
        {
          start: "2024-08-17T08:00:00",
          end: "2024-08-17T10:00:00",
          backgroundColor: "#252728",
          borderColor: "#252728",
        },
      ],
    });

    calendar.render();
  }
});
