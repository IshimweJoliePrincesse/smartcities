
$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();
    var names = $("#names").val();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
      url: "api.php",
      method: "POST",
      data: {
        names: names,
        email: email,
        password: password,
      },
      success: function (response) {
        console.log(response);
        $("form")[0].reset();
        $(".table tbody").append(
          `<tr>
        <td>${names}</td>
        <td>${email}</td>
        <td>${password}</td>
        <td>
          <button class='delete' type='button'>Delete</button>
          <button class='edit' type='button'>Edit</button>
        </td>
      </tr>`
        );
        updatePaginationControls();
      },
    });
  });

  $("body").on("click", ".delete", function () {
    var $this = $(this);
    var $tr = $this.closest("tr");
    var names = $tr.find("td:eq(0)").text();
    var email = $tr.find("td:eq(1)").text();
    var password = $tr.find("td:eq(2)").text();
    $.ajax({
      url: "api.php",
      method: "DELETE",
      data: {
        names: names,
        email: email,
        password: password,
      },
      success: function (response) {
        $tr.remove();
        updatePaginationControls();
      },
    });
  });

  $("body").on("click", ".edit", function () {
    var $this = $(this);
    var $tr = $this.closest("tr");
    var names = $tr.find("td:eq(0)").text();
    var email = $tr.find("td:eq(1)").text();
    var password = $tr.find("td:eq(2)").text();
    $tr
      .find("td:eq(0)")
      .html("<input name='edit_text' value='" + names + "'>");
    $tr
      .find("td:eq(1)")
      .html("<input name='edit_email' value='" + email + "'>");
    $tr
      .find("td:eq(2)")
      .html("<input name='edit_password' value='" + password + "'>");
    $tr
      .find("td:eq(3)")
      .prepend("<button type='button' class='update'>Update</button>");
  });

  $("body").on("click", ".update", function () {
    var $this = $(this);
    var $tr = $this.closest("tr");
    var id = $tr.attr("data-id");
    var names = $tr.find("input[name='edit_text']").val();
    var email = $tr.find("input[name='edit_email']").val();
    var password = $tr.find("input[name='edit_password']").val();
    $.ajax({
      url: "api.php",
      method: "PUT",
      data: {
        id: id,
        names: names,
        email: email,
        password: password,
      },
      success: function (response) {
        console.log(response);
        $tr.find("td:eq(0)").text(names);
        $tr.find("td:eq(1)").text(email);
        $tr.find("td:eq(2)").text(password);
        $tr.attr("data-names", names);
        $tr.attr("data-email", email);
        $tr.attr("data-password", password);
        $this.remove();
      },
    });
  });
});
function searchUsers(query) {
  $(".table tbody tr")
    .hide()
    .filter(function () {
      return $(this).text().toLowerCase().indexOf(query.toLowerCase()) > -1;
    })
    .show();
}
$("#searchInput").on("input", function () {
  var query = $(this).val();
  searchUsers(query);
});

function paginateUsers(pageNumber, pageSize) {
  var startIndex = (pageNumber - 1) * pageSize;
  var endIndex = startIndex + pageSize;

  $(".table tbody tr").hide().slice(startIndex, endIndex).show();
}

var pageSize = 5;
var currentPage = 1;

function updatePaginationControls() {
  var totalRecords = $(".table tbody tr").length;
  var totalPages = Math.ceil(totalRecords / pageSize);

  var paginationControls = "";
  for (var i = 1; i <= totalPages; i++) {
    paginationControls += `<button class="paginationButton" data-page="${i}">${i}</button>`;
  }

  $("#paginationControls").html(paginationControls);

  $(".paginationButton").click(function () {
    currentPage = parseInt($(this).data("page"));
    paginateUsers(currentPage, pageSize);
  });

  paginateUsers(currentPage, pageSize);
}

updatePaginationControls(5);

