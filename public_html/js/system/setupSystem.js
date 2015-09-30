var setupSystem = {
    initialize: function () {
        listSystem.memberGroupList(".memberGroup");
        listSystem.memberRoleList(".memberRole");
        listSystem.projectStateList(".projectState");
        listSystem.industryList(".industry");
        listSystem.provinceList(".province");
    },
    nextProcess: function () {
        window.scrollTo(0, 0);
        $("#status").empty();
    },
    addProfile: function () {
        $.ajax({
            url: "/member/api/profile",
            method: "POST",
            dataType: "json",
            data: {
                Function: "Add",
                MemberId: $("#MemberId").val(),
                ProjectState: $("#projectState").val(),
                MemberGroup: $("#memberGroup").val(),
                PartnerGroup: $("#partnerGroup").val(),
                Location: $("#Location").val(),
                Age: $("#age").val(),
                IsStudent: 0
            }
        }).done(function (response) {
            if (response.status) {
                $("#status").empty();
                $("#profileNext").css("display", "inline-block");
                $("#status").append('<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อย กรุณากดปุ่ม ต่อไป</div>');
                $("#progressBar").width("16%");
            } else {
                notifyError(response);
            }
        });
    },
    addRole: function () {
        var join;
        var joined;
        if ($("#OpenToJoin").prop("checked")) {
            join = 1;
        } else {
            join = 0;
        }
        if ($("#ReadyToJoin").prop("checked")) {
            joined = 1;
        } else {
            joined = 0;
        }
        $.ajax({
            url: "/member/api/joining",
            method: "POST",
            dataType: "json",
            data: {
                Function: "Add",
                MemberId: $("#MemberId").val(),
                OpenToJoin: join,
                ReadyToJoin: joined,
            }
        }).done(function (response) {
            if (response.status) {
                $.ajax({
                    url: "/member/api/role",
                    method: "POST",
                    dataType: "json",
                    data: {
                        Function: "Add",
                        MemberId: $("#MemberId").val(),
                        FirstRole: $("#FirstRole").val(),
                        SecondRole: $("#SecondRole").val(),
                        ThirdRole: $("#ThirdRole").val(),
                    }
                }).done(function (response) {
                    if (response.status) {
                        $("#status").empty();
                        $("#joinNext").css("display", "inline-block");
                        $("#status").append('<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อย กรุณากดปุ่ม ต่อไป</div>');
                        $("#progressBar").width("32%");
                    } else {
                        notifyError(response);
                    }
                });
            } else {
                notifyError(response);
            }
        });
    },
    addSkill: function () {
        $.ajax({
            url: "/member/api/skill",
            method: "POST",
            dataType: "json",
            data: {
                Function: "Add",
                MemberId: $("#MemberId").val(),
                Finance: $("#financeH").val(),
                Managing: $("#manageH").val(),
                Marketing: $("#marketH").val(),
                ProductM: $("#managePH").val(),
                Sales: $("#salesH").val(),
                Technical: $("#technicH").val(),
                //
                FinanceNeed: $("#financeN").val(),
                ManagingNeed: $("#manageN").val(),
                MarketingNeed: $("#marketN").val(),
                ProductMNeed: $("#managePN").val(),
                SalesNeed: $("#salesN").val(),
                TechnicalNeed: $("#technicN").val(),
            }
        }).done(function (response) {
            if (response.status) {
                $("#status").empty();
                $("#skillNext").css("display", "inline-block");
                $("#status").append('<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อย กรุณากดปุ่ม ต่อไป</div>');
                $("#progressBar").width("58%");
            } else {
                notifyError(response);
            }
        });
    },
    addExperience: function () {
        $.ajax({
            url: "/member/api/experience",
            method: "POST",
            dataType: "json",
            data: {
                Function: "Add",
                MemberId: $("#MemberId").val(),
                FirstIndustry: $("#FirstIndustry").val(),
                FirstExperience: $("#FirstExperience").val(),
                SecondIndustry: $("#SecondIndustry").val(),
                SecondExperience: $("#SecondExperience").val(),
                ThirdIndustry: $("#ThirdIndustry").val(),
                ThirdExperience: $("#ThirdExperience").val(),
            }
        }).done(function (response) {
            if (response.status) {
                $.ajax({
                    url: "/member/api/need",
                    method: "POST",
                    dataType: "json",
                    data: {
                        Function: "Add",
                        MemberId: $("#MemberId").val(),
                        Investment: $("#Investment").val(),
                        TimeCommit: $("#TimeCommit").val(),
                        PartnerFirstRole: $("#PartnerFirstRole").val(),
                        PartnerSecondRole: $("#PartnerSecondRole").val(),
                        PartnerThirdRole: $("#PartnerThirdRole").val(),
                    }
                }).done(function (response) {
                    if (response.status) {
                        $("#status").empty();
                        $("#expNext").css("display", "inline-block");
                        $("#status").append('<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อย กรุณากดปุ่ม ต่อไป</div>');
                        $("#progressBar").width("74%");
                    } else {
                        notifyError(response);
                    }
                });
            } else {
                notifyError(response);
            }
        });
    },
    addContact: function () {
        $.ajax({
            url: "/member/api/contact",
            method: "POST",
            dataType: "json",
            data: {
                Function: "Edit",
                MemberId: $("#MemberId").val(),
                Mobile: $("#Mobile").val(),
                Skype: $("#Skype").val(),
                Line: $("#Line").val(),
            }
        }).done(function (response) {
            if (response.status) {
                $.ajax({
                    url: "/member/api/social",
                    method: "POST",
                    dataType: "json",
                    data: {
                        Function: "Edit",
                        MemberId: $("#MemberId").val(),
                        Facebook: $("#Facebook").val(),
                        Twitter: $("#Twitter").val(),
                        Google: $("#Google").val(),
                    }
                }).done(function (response) {
                    if (response.status) {
//                        $("#status").empty();
//                        $("#contactNext").css("display", "inline-block");
//                        $("#status").append('<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อย กรุณากดปุ่ม ต่อไป</div>');
//                        $("#progressBar").width("100%");
                        window.location.href = "/member/profile/" + response.data.MemberId;
                    } else {
                        notifyError(response);
                    }
                });
            } else {
                notifyError(response);
            }
        });
    },
    addDetail: function () {
        $.ajax({
            url: "/member/api/detail-with-encoded",
            method: "POST",
            dataType: "json",
            data: {
                Function: "Add",
                MemberId: $("#MemberId").val(),
                Firstname: $("#FirstName").val(),
                Lastname: $("#LastName").val(),
                Location: $("#Location").val(),
                Image: $("#Image").val(),
                About: $("#About").val(),
                Video: $("#Video").val(),
            }
        }).done(function (response) {
            if (response.status) {
                $.ajax({
                    url: "/member/api/complete",
                    method: "POST",
                    dataType: "json",
                    data: {
                        MemberId: $("#MemberId").val(),
                    }
                }).done(function (response) {
                    if (response.status) {
                        //console.log(response.data);
                        window.location.href = "/member/profile/" + response.data.MemberId;
//                        $("#status").empty();
//                        $("#detailNext").css("display", "inline-block");
//                        $("#status").append('<div class="alert alert-success" role="alert">บันทึกข้อมูลเรียบร้อย กรุณากดปุ่ม ต่อไป</div>');
//                        $("#progressBar").width("100%");
                    } else {
                        notifyError(response);
                    }
                });
            } else {
                notifyError(response);
            }
        });
    },
    addImage: function (obj) {
        readImage(obj);
        $.ajax({
            url: "/member/api/image-encoded",
            method: "POST",
            dataType: "json",
            data: {
                MemberId: $("#MemberId").val(),
                Image: $("#Image").val(),
            }
        }).done(function (response) {
            if (response.status) {
                $("#status").append('<div class="alert alert-success" role="alert">บันทึกรูปภาพเรียบร้อย</div>');
            } else {
                notifyError(response);
            }
        });
    },
};