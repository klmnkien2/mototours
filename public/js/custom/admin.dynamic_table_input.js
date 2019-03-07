$(document).ready(function () {

    // Add new row to the table of fields
    $('.addInputRow').click(function (e) {
        var tableId = $(e.currentTarget).data('generatorId');
        var lineId = $(e.currentTarget).data('lineId');
        var line = $(lineId).html();
        var table = $(tableId);
        table.append(line);

        $(document).trigger('dynamic-datepicker-prepare');
    });

    // Remove row from the table of fields
    $(document).on('click', '.rem', function () {
        $(this).parent().parent().remove();
    });

    $(document).on('dynamic-datepicker-prepare', function() {
        $('.dynamic-datepicker:visible').datepicker({
            autoclose: true,
            dateFormat: "dd-mm-yy"
        });
    }).trigger('dynamic-datepicker-prepare');
});