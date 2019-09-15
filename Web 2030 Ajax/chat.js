$(document).ready(function(){
    $("#chatBtn").click(function(){

        var id = $("#userID").val();
        var text = $("#chat").val();

        $.ajax({
            method: "post",
            url: "data.php",
            data: {
                userName:id,
                message:text,
                type: "display"
            },
            success: function(){
                $("#chat").val('');
            }
        })

    });
});
setInterval(function(){
    $("#viewChats").load("displayChat.php");
},1000);

function deleteChat () {
    $.ajax({
        method: "post",
        url : "clearChat.php",
        data : {
            type:"delete"
        }
    })
}
function recentChat() {
    $.ajax({
        method: "post",
        url : "recentChat.php",
        data : {
            type:"recent"
        }
    })
}