

$('input[type=file]').each(function() {
    $(this).on('change', () => {
        if($(this).val()) {
            const element = $(this).parent().find('span.identifier')
            const x = $(this).val().split("\\");
            element.text(x[x.length - 1]).show()
        }
    });
});

// dd
