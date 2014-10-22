$(document).ready(function () {
    // Color picker options
    $('.color-box').colpick({
        colorScheme:'light',
        layout:'hex',
        onChange:function(hsb,hex,rgb,el) {
            $(el).css('background-color', '#'+hex);
        },
        onSubmit:function(hsb,hex,rbg,el) {
            $(el).colpickHide();
        }
    })
    // Color picker initial style
    $('.color-box').each(function() {
        var color = $(this).data("color");
        $(this).css('background-color', '#'+color);
        $(this).colpickSetColor(color, true);
    })

    // Sorting for menu items
    $("#sortable").sortable({
        stop: function(event, ui) {
            //alert("New position: " + ui.item.index());
        }
    });
    $("#sortable").disableSelection();

    // Show/hide for elements (header, footer etc)
    $(document).on('click', '.elementHeader', function(event){
        event.preventDefault();
        $(this).find('.icon').first().toggleClass("glyphicon glyphicon-plus");
        $(this).find('.icon').first().toggleClass("glyphicon glyphicon-minus");
        //$(this).toggleClass("icon glyphicon glyphicon-plus");
        //$(this).toggleClass("icon glyphicon glyphicon-minus");
        $(this).next('.element').toggle();
    });

    // Hide all elements initially
    $('.elementHeader').each(function() { $(this).click(); })
});