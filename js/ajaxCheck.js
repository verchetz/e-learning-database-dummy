//tunggu di render semua
$(document).ready(function(){ //pendaftaran/register
    //cek email sudah ada atau belum
    $(".email").on("keypress blur", function () {
        let email = $(".email").val();

        $.ajax({
            url:'queryData/checkUser.php',
            method: 'POST',
            data: {
                cekemail: "cekemail",
                email: email,
            },
            success:function (data) {
                console.log(data);
                if (data != 0) { //berarti ada gmail sesuai parameter di database
                    $(".validEmail").html("<span class='text-danger'>Email already used!</span>");
                    $(".submitButt").attr("disabled", true);
                }else if(data == 0){//0 berarti gada gmail di database
                    $(".validEmail").html("<span class='text-danger'>good!</span>");
                    $(".submitButt").attr("disabled", false);
                }
            },
        });
    });
});

//login
function userLogin(){
    event.preventDefault();
    let username = $("#username").val();
    let email = $("#email").val();

    $.ajax({
        url: 'queryData/checkUser.php',
        method: 'POST',
        data: {
            username: username,
            email: email,
        },
        success:function(data){
            console.log(data);
        }
    });
}