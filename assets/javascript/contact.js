var spryName = new Spry.Widget.ValidationTextField("spryName", "none", {
    validateOn: ["blur", "change"]
});

var spryEmail = new Spry.Widget.ValidationTextField("spryEmail", "email", {
    validateOn: ["blur", "change"]
});

$(function () {
    $("#meetingDate").datepicker({
        dateFormat: "dd.mm.yy"
    });
});