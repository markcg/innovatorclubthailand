function notifyError(response) {
    $("#status").empty();
    if ($.isArray(response.error)) {
        $.each(response.error, function (index, item) {
            $("#status").append('<div class="alert alert-danger" role="alert">' + item + '</div>');
        });
    } else {
        $("#status").append('<div class="alert alert-danger" role="alert">' + response.error + '</div>');
    }
}
function notifySuccess() {
    $("#status").empty();
    $("#status").append('<div class="alert alert-danger" role="alert">แก้ไขเสร็จสิ้น</div>');
}
function readImage(input) {
    if (input.files && input.files[0]) {
        var FR = new FileReader();
        var result = "";
        FR.onload = function (e) {
            $("#Image").val(e.target.result);
        };
        FR.readAsDataURL(input.files[0]);
    }
}

