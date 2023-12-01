//tunggu di render semua
// $(document).ready(function(){
//     //cek email sudah ada atau belum
//     $(".email").on("keypress blur", function () {
//         let email = $(".email").val();

//         $.ajax({
//             url:'queryData/addUser.php',
//             method: 'POST',
//             data: {
//                 email: email,
//             },
//             success:function (data) {
//                 console.log(data);
//             }
//         });
//     });
// });


function add() {
    let regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}/i;
    let names = $(".names").val();
    let username = $(".username").val();
    let email = $(".email").val();

    if(!regex.test(email) && email.trim() != ""){
        $(".validEmail").html("<span class='text-danger'>Invalid email</span>");
        $(".email").focus();
        return false;
    }else if(names.trim() == ""){
        $(".validName").html("<span class='text-danger'>Please put name</span>");
        $(".names").focus();
        return false;
    }else if(username.trim() == ""){
        $(".validUsername").html("<span class='text-danger'>Please put usernamename</span>");
        $(".username").focus();
        return false;
    }else if(email.trim() == ""){
        $(".validEmail").html("<span class='text-danger'>Please put email</span>");
        $(".email").focus();
        return false;
    }else{
        $.ajax({
            url:'queryData/addUser.php',
            method: 'POST',
            dataType: 'json',
            data: {
                names: names,
                username: username,
                email: email
            },
            success:function(data){
                console.log(data);
                if(data == "yes"){
                    alert("Sukses");
                    console.log("suksses");
                }else if(data == "no"){
                    alert("gagal");
                }
            }
        })
        //jika nama kosong
    }


    // if (names.trim() == "") {
    //     $(".validName").html("<span class='text-danger'>Invalid name</span>");
    //     $(".names").focus();
    //     return false;
    // }else{
    //     $(".validName").html("<span class='text-danger'></span>");
    // }
    // if(username.trim() == ""){
    //     $(".validUsername").html("<span class='text-danger'>Invalid usernamename</span>");
    //     $(".username").focus();
    //     return false;
    // }else{
    //     $(".validUsername").html("<span class='text-danger'></span>");
    // } 
    // if(email.trim() == ""){
    //     $(".validEmail").html("<span class='text-danger'>Invalid email</span>");
    //     $(".email").focus();
    //     return false;
    // }else{
    //     $(".validEmail").html("<span class='text-danger'></span>");
    // }
    // $.ajax({
    //     url:'queryData/addUser.php',
    //     method: 'POST',
    //     dataType: 'json',
    //     data: {
    //         names: names,
    //         username: username,
    //         email: email
    //     },
    //     success:function(data){
    //         console.log(data);
    //         if(data == "yes"){
    //             $("#successRegis").html("<span>Registration success</span>");
    //             console.log("suksses");
    //         }else if(data == "no"){
    //             $("#successRegis").html("<span>Registration failed</span>");
    //         }
    //     }
    // })
    // console.log(names);
    // console.log(username);
    // console.log(email);
}