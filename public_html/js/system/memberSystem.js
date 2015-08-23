var memberSystem = {
    login: function (form) {
        $(form).find("#submit").on("click", function () {
            var email = $(form).find("#email").val();
            var password = $(form).find("#password").val();
            console.log(email + " " + password);
            $.ajax({
                url: "/member/api/login",
                method: "POST",
                data: {
                    Email: email,
                    Password: password,
                },
                dataType: "json",
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                }
            }).done(function (response) {
                if (response.status) {
                    if (response.data.SetUp) {
                        window.location.href = "/member/set-up";
                    } else {
                        window.location.href = "/member/manage";
                    }
                } else {
                    $("#status").empty();
                    if ($.isArray(response.error)) {
                        $.each(response.error, function (index, item) {
                            $("#status").append('<div class="alert alert-danger" role="alert">' + item + '</div>');
                        });
                    } else {
                        $("#status").append('<div class="alert alert-danger" role="alert">' + response.error + '</div>');
                    }
                }
            });
        });
    },
    register: function (form) {
        $(form).find("#submit").on("click", function () {
            var email = $(form).find("#email").val();
            var password = $(form).find("#password").val();
            console.log(email + " " + password);
            $.ajax({
                url: "/member/api/new",
                method: "POST",
                data: {
                    Email: email,
                    Password: password,
                },
                dataType: "json",
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                }
            }).done(function (response) {
                if (response.status) {
                    window.location.href = "/member/login";
                } else {
                    $("#status").empty();
                    if ($.isArray(response.error)) {
                        $.each(response.error, function (index, item) {
                            $("#status").append('<div class="alert alert-danger" role="alert">' + item + '</div>');
                        });
                    } else {
                        $("#status").append('<div class="alert alert-danger" role="alert">' + response.error + '</div>');
                    }
                }
            });
        });
    },
};

