$(function() {
    $(".textEditor").htmlarea({
        // Override/Specify the Toolbar buttons to show
        toolbar: [
            ["bold", "italic", "underline"],
            ["h2", "h3", "h4", "p"],
            ["link", "unlink"],
            ["html"],
            [{
                // This is how to add a completely custom Toolbar Button
                css: "custom_disk_button",
                text: "Save",
                action: function(btn) {
                    $.post("save.php", {
                        sectionId: this.getTextareaId(),
                        sectionData: this.toHtmlString()
                    })

                        // Alert return data
                        .done(function (data) {
                            //alert( "Data Loaded: " + data );
                        });
                }
            }]
        ],

    });
});
