document.addEventListener("DOMContentLoaded", function () {
  const tableData = [
    { id: 1, name: "John Doe", email: "john@example.com" },
    { id: 2, name: "Jane Smith", email: "jane@example.com" },
    { id: 3, name: "Mike Johnson", email: "mike@example.com" },
    { id: 4, name: "John Doe", email: "john@example.com" },
    { id: 5, name: "Jane Smith", email: "jane@example.com" },
    { id: 6, name: "Mike Johnson", email: "mike@example.com" },
    { id: 7, name: "John Doe", email: "john@example.com" },
    { id: 8, name: "Jane Smith", email: "jane@example.com" },
    { id: 9, name: "Mike Johnson", email: "mike@example.com" },
    { id: 10, name: "John Doe", email: "john@example.com" },
    { id: 11, name: "Jane Smith", email: "jane@example.com" },
    { id: 12, name: "Mike Johnson", email: "mike@example.com" },
    { id: 13, name: "John Doe", email: "john@example.com" },
    { id: 14, name: "Jane Smith", email: "jane@example.com" },
    { id: 15, name: "Mike Johnson", email: "mike@example.com" },
  ];

  const tableBody = document.querySelector("tbody");
  const searchInput = document.getElementById("searchInput");
  const paginationDiv = document.getElementById("pagination");
  const deleteBtn = document.getElementById("deleteBtn");

  let currentPage = 1;
  const rowsPerPage = 5;

  function displayTableData(data) {
    if (data.length) {
      const startIndex = (currentPage - 1) * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;
      const paginatedData = data.slice(startIndex, endIndex);

      tableBody.innerHTML = "";

      paginatedData.forEach((item) => {
        const row = document.createElement("tr");
        row.innerHTML = `
              <td>${item.id}</td>
              <td>${item.name}</td>
              <td>${item.email}</td>
              <td><input type="checkbox" class="deleteCheckbox" data-id="${item.id}"></td>
          `;
        tableBody.appendChild(row);
      });
    } else {
      tableBody.innerHTML = "No data";
    }
  }

  function displayPagination(totalPages) {
    paginationDiv.innerHTML = "";

    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement("button");
      btn.innerText = i;
      btn.classList.add("pagination-btn");
      if (i === currentPage) {
        btn.classList.add("active");
      }
      btn.addEventListener("click", function () {
        currentPage = i;
        displayTableData(tableData);
        displayPagination(totalPages);
      });
      paginationDiv.appendChild(btn);
    }
  }

  function searchTable() {
    const searchText = searchInput.value.toLowerCase();
    const filteredData = tableData.filter((item) => {
      return (
        item.name.toLowerCase().includes(searchText) ||
        item.email.toLowerCase().includes(searchText)
      );
    });
    displayTableData(filteredData);
    const totalPages = Math.ceil(filteredData.length / rowsPerPage);
    displayPagination(totalPages);
  }

  function deleteRows() {
    const checkboxes = document.querySelectorAll(".deleteCheckbox:checked");
    checkboxes.forEach((checkbox) => {
      const id = parseInt(checkbox.getAttribute("data-id"));
      tableData.splice(
        tableData.findIndex((item) => item.id === id),
        1
      );
    });
    displayTableData(tableData);
    const totalPages = Math.ceil(tableData.length / rowsPerPage);
    displayPagination(totalPages);
  }

  searchInput.addEventListener("keyup", searchTable);
  deleteBtn.addEventListener("click", deleteRows);

  // Initial display
  displayTableData(tableData);
  const totalPages = Math.ceil(tableData.length / rowsPerPage);
  displayPagination(totalPages);
});
