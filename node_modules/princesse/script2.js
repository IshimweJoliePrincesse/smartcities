// document.addEventListener("DOMContentLoaded", function () {
//   loadPrince();
//   var student = document.getElementById("student");
//   student.addEventListener("submit", function (event) {
//     event.preventDefault();
//     addStudent();
//   });
// });

// function loadPrince() {
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         displayPrince(JSON.parse(xhr.responseText));
//       } else {
//         console.error("Failed to load prince.");
//       }
//     }
//   };
//   xhr.open("GET", "api1.php", true);
//   xhr.send();
// }

// function displayPrince(prince) {
//   var studentList = document.getElementById("studentList");
//   studentList.innerHTML = "";
//   prince.forEach(function (student) {
//     var studentDiv = document.createElement("div");
//     studentDiv.innerHTML = `
//         <p>ID: ${student.id}</p>
//         <p>first_name: ${student.first_name}</p>
//         <p>last_name: ${student.last_name}</p>
//         <p>email: ${student.email}</p>
//         <button type="button" onclick="editStudent(${student.id})">Edit</button>
//         <button type="button" onclick="deleteStudent(${student.id})">Delete</button>
//         <hr>
//       `;
//     studentList.appendChild(studentDiv);
//   });
// }
// function addStudent() {
//   var first_name = document.getElementById("firstname").value;
//   var last_name = document.getElementById("lastname").value;
//   var email = document.getElementById("email").value;

//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         loadPrince();
//       } else {
//         console.error("Failed to add student.");
//       }
//     }
//   };
//   xhr.open("POST", "api1.php", true);
//   xhr.setRequestHeader("Content-Type", "application/json");
//   xhr.send(
//     "first_name=" + first_name + "&last_name=" + last_name + "&email=" + email
//   );
//   function editStudent(id) {
//     var first_name = prompt("Enter the new first_name:");
//     var last_name = prompt("Enter the new last_name:");
//     var email = prompt("Enter the new email:");

//     var xhr = new XMLHttpRequest();
//     xhr.onreadystatechange = function () {
//       if (xhr.readyState === XMLHttpRequest.DONE) {
//         if (xhr.status === 200) {
//           loadPrince();
//         } else {
//           console.error("Failed to edit student.");
//         }
//       }
//     };

//     xhr.open("PUT", "api1.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.send(
//       "id=" +
//         id +
//         "&first_name=" +
//         first_name +
//         "&last_name=" +
//         last_name +
//         "&email=" +
//         email
//     );
//   }
// }
// function deleteStudent(id) {
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         loadPrince();
//       } else {
//         console.error("Failed to delete student.");
//       }
//     }
//   };
//   xhr.open("DELETE", "api1.php", true);
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//   xhr.send("id=" + id);
// }
