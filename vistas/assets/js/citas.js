document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: "es",
    height: 310,
    hiddenDays: [0],

    slotLabelFormat: {
      hour: "numeric",
      minute: "2-digit",
      omitZeroMinute: false,
      meridiem: "short",
    },

    initialView: "timeGridFourDay",
    initialDate: "2024-08-28",
    allDaySlot: false,

    slotDuration: "02:00:00",
    slotMinTime: "08:00:00",
    slotMaxTime: "22:00:00",

    titleFormat: { year: "numeric", month: "short", day: "numeric" },
    views: {
      timeGridFourDay: {
        type: "timeGrid",
        duration: { days: 4 },
      },
    },
    events: [
      {
        title: "Tu cita",
        start: "2024-08-21 12:00:00",
        end: "2024-08-21 14:00:00",
        backgroundColor: "#028FA2",
        borderColor: "#028FA2",
      },
      {
        title: "Ocupado",
        start: "2024-08-21 14:00:00",
        end: "2024-08-21 16:00:00",
        backgroundColor: "#252728",
        borderColor: "#252728",
      },
      {
        title: "Ocupado",
        start: "2024-08-22 10:00:00",
        end: "2024-08-22 12:00:00",
        backgroundColor: "#252728",
        borderColor: "#252728",
      },
      {
        title: "Ocupado",
        start: "2024-08-23 08:00:00",
        end: "2024-08-23 10:00:00",
        backgroundColor: "#252728",
        borderColor: "#252728",
      },
      {
        title: "Ocupado",
        start: "2024-08-24 12:00:00",
        end: "2024-08-24 14:00:00",
        backgroundColor: "#252728",
        borderColor: "#252728",
      },
      {
        title: "Ocupado",
        start: "2024-08-20 16:00:00",
        end: "2024-08-20 18:00:00",
        backgroundColor: "#252728",
        borderColor: "#252728",
      },
    ],
  });
  calendar.render();
});
