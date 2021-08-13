var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

let base_url = "http://" + window.location.hostname;

$("#single-client").click(function () {

  const singleClientUrl = base_url + "/admin/single-client"
  window.location = singleClientUrl;
})
$("#single-service").click(function () {

  const singleClientUrl = base_url + "/admin/single-service-type"
  window.location = singleClientUrl;
})

$('#cleaning-check-box').click(function () {
  if ($(this).prop("checked") == true) {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
      keyboard: false
    })
    myModal.show()
  }
  else if ($(this).prop("checked") == false) {
    console.log("Checkbox is unchecked.");
  }
});

$('#security-check-box').click(function () {
  if ($(this).prop("checked") == true) {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
      keyboard: false
    })
    myModal.show()
  }
  else if ($(this).prop("checked") == false) {
    console.log("Checkbox is unchecked.");
  }
});
$('#maintenance-check-box').click(function () {
  if ($(this).prop("checked") == true) {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
      keyboard: false
    })
    myModal.show()
  }
  else if ($(this).prop("checked") == false) {
    console.log("Checkbox is unchecked.");
  }
});
