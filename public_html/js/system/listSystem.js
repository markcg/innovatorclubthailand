var listSystem = {
    memberGroupList: function (select) {
        $.ajax({
            url: "/category/api/member-group",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $(select).empty();
            $(select).append("<option></option>");
            $.each(response, function (key, item) {
                $(select).append("<option value=" + item.id + ">" + item.Name + "</option>");
            });
        });
    },
    industryList: function (select) {
        $.ajax({
            url: "/category/api/industry",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $(select).empty();
            $(select).append("<option></option>");
            $.each(response, function (key, item) {
                $(select).append("<option value=" + item.id + ">" + item.Name + "</option>");
            });
        });
    },
    memberRoleList: function (select) {
        $.ajax({
            url: "/category/api/member-role",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $(select).empty();
            $(select).append("<option></option>");
            $.each(response, function (key, item) {
                $(select).append("<option value=" + item.id + ">" + item.Name + "</option>");
            });
        });
    },
    projectStateList: function (select) {
        $.ajax({
            url: "/category/api/project-state",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $(select).empty();
            $(select).append("<option></option>");
            $.each(response, function (key, item) {
                $(select).append("<option value=" + item.id + ">" + item.Name + "</option>");
            });
        });
    },
    memberStatusList: function (select) {
        $.ajax({
            url: "/category/api/member-status",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $(select).empty();
            $(select).append("<option></option>");
            $.each(response, function (key, item) {
                $(select).append("<option value=" + item.id + ">" + item.Name + "</option>");
            });
        });
    },
    provinceAutocomplete: function (select) {
        $.ajax({
            url: "/category/api/province",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $source = [];
            $.each(response, function (key, item) {
                $source.push({labe: item.id, value: item.PROVINCE_NAME});
                $source.push({labe: item.id, value: item.PROVINCE_NAME_ENG});
            });
            $(select).autocomplete({
                source: $source,
                minLength: 2,
            });
        });
    },
    provinceList: function (select, defaultValue) {
        $.ajax({
            url: "/category/api/province",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $source = [];
            $.each(response, function (key, item) {
                $(select).empty();
                $(select).append("<option></option>");
                $.each(response, function (key, item) {
                    $(select).append("<option value=" + item.PROVINCE_ID + ">" + item.PROVINCE_NAME + "</option>");
                });
                if (defaultValue !== null) {
                    $(select).val(defaultValue);
                }
            });
        });
    },
}; /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


