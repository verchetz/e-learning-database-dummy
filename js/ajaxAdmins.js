//admin login
function adminLogin() {
    event.preventDefault();
    let adminEmail = $("#adminEmail").val();
    let adminPass = $("#adminPass").val();
  
    $.ajax({
      url: "queryData/checkAdmins.php",
      method: "POST",
      data: {
        adminEmail: adminEmail,
        adminPass: adminPass,
      },
      success: function (data) {
        console.log(data);
        if (data == 1) {
          $(".statusAdminLogin").html("<span class='spinner-border text-success'></span>");
          setTimeout(() => {
            window.location.href = "./page1.php";
          }, 900);
        } else if(data  ==  0) {
          $(".statusAdminLogin").html("<span class='text-danger'>Wrong</span>");
          console.log("something  wrong");
        }
      },
    });
  }