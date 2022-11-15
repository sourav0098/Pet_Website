// Toggling the sidebar menu
$(document).ready(function () {
  $("#sideBarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

// No of users according to city graph
const city = [
  "Toronto",
  "Etobicoke",
  "Brampton",
  "Mississauga",
  "North York",
  "Scarborough",
  "Woodbridge",
  "Oakville",
  "Markham",
];

const usersData = {
  labels: city,
  datasets: [
    {
      label: "Number of users registered by city",
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(34, 47, 62, 0.2)",
        "rgba(33, 140, 116, 0.2)",
        "rgba(201, 203, 207, 0.4)",
      ],
      borderColor: [
        "rgb(255, 99, 132)",
        "rgb(255, 159, 64)",
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)",
        "rgb(54, 162, 235)",
        "rgb(153, 102, 255)",
        "rgb(34, 47, 62)",
        "rgb(33, 140, 116)",
        "rgb(201, 203, 207)",
      ],
      borderWidth: 1,
      data: [127, 87, 75, 112, 80, 67, 45, 59, 88],
    },
  ],
};

const config1 = {
  type: "bar",
  data: usersData,
  options: {
    plugins: {
      legend: {
        display: false,
      },
      title: {
        display: true,
        text: "Number of users according to city",
        font: {
          size: 16,
        },
      },
    },
  },
};

const barChart = new Chart(document.getElementById("chart1"), config1);

// No. of pets according to animal type
const petData = {
  labels: ["Dog", "Cat", "Rabbit", "Fish", "Other"],
  datasets: [
    {
      label: "",
      data: [180, 150, 21, 75, 83],
      backgroundColor: [
        "rgba(255, 99, 132, 0.8)",
        "rgba(255, 159, 64, 0.8)",
        "rgba(255, 205, 86, 0.8)",
        "rgba(75, 192, 192, 0.8)",
        "rgba(54, 162, 235, 0.8)",
      ],
      hoverOffset: 4,
    },
  ],
};

const config2 = {
  type: "polarArea",
  data: petData,
  options: {
    plugins: {
      title: {
        display: true,
        text: "Number of pets according to animal type",
        font: {
          size: 16,
        },
      },
    },
  },
};

const doughnutChart = new Chart(document.getElementById("chart2"), config2);

// Adopted/Not Adopted
const adoptedData = {
  labels: ["Adopted", "Not Adopted"],
  datasets: [
    {
      label: "",
      data: [43, 150],
      backgroundColor: ["rgba(255, 99, 132, 0.8)", "rgba(255, 159, 64, 0.8)"],
      hoverOffset: 4,
    },
  ],
};

const config3 = {
  type: "doughnut",
  data: adoptedData,
  options: {
    plugins: {
      title: {
        display: true,
        text: "Adopted Pets v/s Non Adopted Pets",
        font: {
          size: 16,
        },
      },
    },
  },
};

const pieChart = new Chart(document.getElementById("chart3"), config3);

// Pets Adopted according to date
const petsDataByDate = {
  labels: ["Oct 15", "Oct 16", "Oct 17", "Oct 18", "Oct 19", "Oct 20"],
  datasets: [
    {
      label: "Adopted Pet",
      data: [8, 11, 7, 9, 7,13],
      fill: false,
      borderColor: "rgb(75, 192, 192)",
      tension: 0.1,
    },
  ],
};

const config4 = {
  type: "line",
  data: petsDataByDate,
  options: {
    plugins: {
      title: {
        display: true,
        text: "Number of pets adopted according to date",
        font: {
          size: 16,
        },
      },
      legend: {
        display: false,
      },
    },
  },
};

const lineChart = new Chart(document.getElementById("chart4"), config4);
