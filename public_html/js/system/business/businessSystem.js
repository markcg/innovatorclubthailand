function createBusiness(id, category) {
    $.ajax({
        url: '/business/api/create',
        method: 'POST',
        data: {
            'MemberId': id,
            'Category': category
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            window.location.href = "/business/manage/" + response.data.businessId;
        } else {
            notifyError(response);
        }
    });
}
function editName(id, name) {
    $.ajax({
        url: '/business/api/name',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Name': name
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            $('#name').val(name);
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editDescription(id, description) {
    $.ajax({
        url: '/business/api/description',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Description': description
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editCategory(id, category) {
    $.ajax({
        url: '/business/api/category',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Category': category
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editLocation(id, location) {
    $.ajax({
        url: '/business/api/location',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Location': location
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editImage(id, image_blob) {
    $.ajax({
        url: '/business/api/image-encode',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Image': image_blob
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editVideo(id, video) {
    $.ajax({
        url: '/business/api/video',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Video': video
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editWebsite(id, website) {
    $.ajax({
        url: '/business/api/website',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Website': website
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}
function editDetail(id, detail) {
    $.ajax({
        url: '/business/api/detail',
        method: 'POST',
        data: {
            'BusinessId': id,
            'Detail': detail
        },
        dataType: 'json',
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
            console.log(thrownError);
        }
    }).done(function (response) {
        if (response.status) {
            notifySuccess();
        } else {
            notifyError(response);
        }
    });
}

var businessSystem = {
    initialize: function () {
        $('#submitName').click(function () {
            editName($('#businessId').val(), $('#name').val());
        });
        $('#Location').change(function () {
            editLocation($('#businessId').val(), $('#Location').val());
        });
        $('#submitImage').click(function () {
            $('#displayImage').attr('src', $('#Image').val());
            editImage($('#businessId').val(), $('#Image').val());
        });
        $('#submitDesc').click(function () {
            editDescription($('#businessId').val(), $('#Description').val());
        });
        $('#submitVideo').click(function () {
            editVideo($('#businessId').val(), $('#Video').val());
        });
        $('#submitDetail').click(function () {
            var data = CKEDITOR.instances.editor1.getData();
            editDetail($('#businessId').val(), data);
        });
    }
};