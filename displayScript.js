// document.addEventListener("DOMContentLoaded", function () {
//   loadJolie();
// });
// function loadJolie() {
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         var clientList = document.getElementById("clientList");
//         clientList.innerHTML = "";
//         displayJolie(JSON.parse(xhr.responseText));
//       } else {
//         console.error("Failed to load jolie.");
//       }
//     }
//   };
//   xhr.open("GET", "api.php", true);
//   xhr.send();
// }
// function displayJolie(jolie) {
//   var clientList = document.getElementById("clientList");
//   clientList.innerHTML = "";
//   jolie.forEach(function (client) {
//     var clientDiv = document.createElement("div");
//     clientDiv.innerHTML = `

//     <p>ID: ${client.id}</p>
//     <p>first_name: ${client.first_name}</p>
//     <p>last_name: ${client.last_name}</p>
//     <p>email: ${client.email}</p>
//     <p>password: ${client.password}</p>
//     <p>confirm_password: ${client.confirm_password}</p>
//       <button onclick="editClient(${client.id})">Edit</button>
//       <button onclick="deleteClient(${client.id})">Delete</button>
//       <button onclick="goback()">Go back</button>
//       <hr>
//     `;
//     clientList.appendChild(clientDiv);
//   });
// }
// function addClient() {
//   var first_name = document.getElementById("firstname").value;
//   var last_name = document.getElementById("lastname").value;
//   var email = document.getElementById("email").value;
//   var password = document.getElementById("password").value;
//   var confirm_password = document.getElementById("confirmpassword").value;
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         loadJolie();
//       } else {
//         console.error("Failed to add client.");
//       }
//     }
//   };
//   xhr.open("POST", "api.php", true);
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//   xhr.send(
//     "first_name=" +
//       first_name +
//       "&last_name=" +
//       last_name +
//       "&email=" +
//       email +
//       "&password=" +
//       password +
//       "&confirm_password=" +
//       confirm_password
//   );
// }
// function editClient(id) {
//   var first_name = prompt("Enter the new firstname:");
//   var last_name = prompt("Enter the new lastname:");
//   var email = prompt("Enter the new email:");
//   var password = prompt("Enter the new password:");
//   var confirm_password = prompt("enter the new confirm password:");

//   var xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         loadJolie();
//       } else {
//         console.error("Failed to edit client.");
//       }
//     }
//   };

//   xhr.open("PUT", "api.php", true);
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//   xhr.send(
//     "id=" +
//       id +
//       "&first_name=" +
//       first_name +
//       "&last_name=" +
//       last_name +
//       "&email=" +
//       email +
//       "&password=" +
//       password +
//       "&confirm_password=" +
//       confirm_password
//   );
// }
// function deleteClient(id) {
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         loadJolie();
//       } else {
//         console.error("Failed to delete client.");
//       }
//     }
//   };
//   xhr.open("DELETE", "api.php", true);
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//   xhr.send("id=" + id);
// }

// function goback() {
//   window.location.href = "register.html";
// }
