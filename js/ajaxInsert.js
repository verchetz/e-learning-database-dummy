//menambahkan data
function add() {
    event.preventDefault();
    let regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}/i;
    let names = $(".names").val();
    let username = $(".username").val();
    let email = $(".email").val();

  if (!regex.test(email) && email.trim() != "") {
    $(".validEmail").html("<span class='text-danger'> Invalid email</span>");
    $(".email").focus();
    return false;
  } else if (names.trim() == "") {
    $(".validName").html("<span class='text-danger'> Please put name</span>");
    $(".names").focus();
    return false;
  } else if (username.trim() == "") {
    $(".validUsername").html("<span class='text-danger'> Please put usernamename</span>");
    $(".username").focus();
    return false;
  } else if (email.trim() == "") {
    $(".validEmail").html("<span class='text-danger'> Please put email</span>");
    $(".email").focus();
    return false;
  } else {
    $.ajax({
      url: "queryData/addUser.php",
      method: "POST",
      dataType: "json",
      data: {
        names: names,
        username: username,
        email: email,
      },
      success: function (data) {
        console.log(data);
        if (data == "yes") {
          $(".names").val("");
          $(".username").val("");
          $(".email").val("");
          $("#successRegis").html("<span class='spinner-border text-success'></span>");
          setTimeout(() => {
            window.location.href = "./page1.php";
          }, 900);
        } else if (data == "no") {
            $("#successRegis").html("<span>Registration failed</span>");
        }
      },
    });
  }
  // console.log(names);
  // console.log(username);
  // console.log(email);
}
