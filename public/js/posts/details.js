/*
../www/js/posts/details.js
*/

$(function () {
    $('.editable').dblclick(function () {
        var contenu = $(this).html();
        switch ($(this).attr('data-type')) {
            case 'text':
                var code = '<input type="text" class="input"/>';
                break;
            case 'textarea':
                var code = '<textarea class="input"><textarea/>';
                break;
        }

        $(this).html(code).find('.input').val(contenu);
    });
    $('main').on('blur', 'input', function () {
        var that = $(this); // Afin de pouvoir réaliser la réponse dans le if

        $.ajax({
            url: '?ajax=updateField',
            data: {
                id: $(this).closest('.post-details').attr('data-id'),
                field: $(this).closest('.editable').attr('data-field'),
                value: $(this).val(),
            },
            method: 'get',
            success: function (reponsePHP) {
                if (reponsePHP == 1) {
                    that.closest('.editable').html(that.val()); //Je remets le contenu initial dedans via cette ligne (au niveau de la modification d'un titre/sousTitre).
                    notify('Modification sauvegardée !', 'success');
                } else {
                    notify('Problème durant la sauvegarde !', 'danger');
                }
            },
            error: function () {
                alert('Problème durant la transaction !');
            },
        });
    });
});
