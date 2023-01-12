// // script.js
// const form = document.getElementById("search-form");
// const resultsDiv = document.getElementById("results");
// const searchTerm = document.getElementById("search-term");

// form.addEventListener("submit", (event) => {
//     event.preventDefault();
//     const searchTerm = form.searchTerm.value;
//  } );

//     // Retrieve the JSON file using an HTTP request
//     const xhr = new XMLHttpRequest();
//     xhr.open("GET", "courses_and_jobs.json");
//     xhr.onload = () => {
//         if (xhr.status === 200) {
//             const json = JSON.parse(xhr.responseText);

//             // Search for courses and jobs in the JSON file
//             const courses = searchCourses(searchTerm, json);
//             const jobs = searchJobs(searchTerm, json);
      
//             // Filter the jobs array to only include jobs related to the search course
//             const filteredJobs = jobs.filter((job) => {
//                 return job.related_course === searchTerm;
//             });

//             // Clear the results div
//         }
//     }


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}