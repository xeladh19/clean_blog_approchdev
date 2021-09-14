/*
    ./public/js/posts/index.js
*/

var offset = 4;

$(function () {
    $('#older-posts').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: '?ajax=older-posts',
            data: {
                offset: offset,
            },
            method: 'get',
            success: function (reponsePHP) {
                $('#list-posts').append(reponsePHP).find('post-preview:nth-last-child(-n+10)').hide().fadeIn();
                offset += 4;
            },
            error: function () {
                alert('Problème durant la transaction !');
            },
        });
    });
});
