var listSystem = {
    memberGroupList: function (select) {
        $.ajax({
            url: "/category/api/member-group",
            method: "GET",
            dataType: "json"
        }).done(function (response) {
            $(select).empty();
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
            $.each(response, function (key, item) {
                $(select).append("<option value=" + item.id + ">" + item.Name + "</option>");
            });
        });
    },
    provinceList: function (select) {
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
};/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


