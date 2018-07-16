var ajaxform = {
    addObservation: function () {
        var n = $("#ajax-document .document-form").length;

        $.ajax({
            type: "GET",
            url: baseUrl + 'site-project-visits/get-observation-form',
            data: {
                'i': n
            },
            success: function (res) {
                $("#ajax-document").append(res)
            }
        })
    },


    addFloatForm: function (url, container) {

        var n = $("#" + container + " .document-form").length;

        console.log(container + 'n is - ', n);

        $.ajax({
            type: "GET",
            url: url,
            data: {
                'i': n
            },
            success: function (res) {
                $("#" + container).append(res)
            }
        })
    },
    addOperationForm: function (url, container) {
        var n = $("#ajax-document-operation .document-form").length;
        $.ajax({
            type: "GET",
            url: url,
            data: {
                'i': n
            },
            success: function (res) {
                $("#" + container).append(res)
            }
        })
    },

    removeFloatForm: function (aid, url) {
        $.ajax({
            type: 'GET',
            url: url,
            data: {'aid': aid},
            success: function (data) {
                if (data == 1) {
                    $("#" + 'observation_' + aid).remove();
                }
            }
        });
    },

    removeBlankFloatForm: function (id) {
        if (id == '0') {
            alert('You Must have at least one blank product form.');
            return false;
        } else {
            $("#" + id).remove();
        }

    },
    removeDbForm: function (url, id) {
        $.ajax({
            type: 'GET',
            url: url,
            data: {'id': id},
            success: function (data) {
                if (data == 1) {
                    $("#" + id).remove();
                }
            }
        });

    },
    removeNonConfForm: function (url, id) {
        $.ajax({
            type: 'GET',
            url: url,
            data: {'id': id},
            success: function (data) {
                if (data == 1) {
                    $("#" + id).remove();
                }
            }
        });

    },
    loaderStart: function () {
        $('#overlay').show();

    },
    loaderEnd: function () {
        $('#overlay').hide();
    },


};