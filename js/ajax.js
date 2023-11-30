
function add() {
    let names = $(".names").val();
    let username = $(".username").val();
    let email = $(".email").val();

    // console.log(names);
    // console.log(username);
    // console.log(email);
    $.ajax({
        url:'queryData/addUser.php',
        method: 'POST',
        data: {
            signup: 'signup',
            names: names,
            username: username,
            email: email
        },
        success:function(data){
            console.log(data);
        }
    })
}