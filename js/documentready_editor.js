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
    /*$("#sortable").sortable({
        stop: function(event, ui) {
            //alert("New position: " + ui.item.index());
        }
    });
    $("#sortable").disableSelection();*/

    // Show/hide for elements (header, footer etc)
    $(document).on('click', '.elementHeader', function(event){
        event.preventDefault();
        $(this).next('.element').slideToggle('slow', 'swing', function() {
            // Switch the minus and the plus when the toggle is finished
            $(this).prev('.elementHeader').find('.icon').first().toggleClass("glyphicon glyphicon-minus");
            $(this).prev('.elementHeader').find('.icon').first().toggleClass("glyphicon glyphicon-plus");
        });
    });

    // Hide all elements initially
    /*$('.element').each(function() {
        $(this).hide();
        $(this).prev('.elementHeader').find('.icon').first().toggleClass("glyphicon glyphicon-minus");
        $(this).prev('.elementHeader').find('.icon').first().toggleClass("glyphicon glyphicon-plus");
    })*/

    $('#save').click(function() {

        var formResults = '';
        $.post("save.php", {
            sectionsdata: formResults,
            value: 'test2'
        })

            // Alert return data
            .done(function (data) {
                alert( "Data Loaded: " + data );
            });

        return false;
    });
});