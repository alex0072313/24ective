import $ from 'jquery';
window.$ = window.jQuery = $;
require('jquery.mousewheel');
require('popper.js');
require('bootstrap');
require('lightbox2');
import IMask from 'imask';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    console.log('123');

    if($('.phone-mask').length){
        var i = 1;
        $('.phone-mask').each(function () {
            $(this).attr('id', 'phone-mask-f-'+i);
            var phoneMask = IMask(
                document.getElementById('phone-mask-f-'+i), {
                    mask: '+{7}(000)000-00-00'
                });
            i++;
        });
    }

    $('.parth_img').on('click', function() {
        $('.parth_image_preview').attr('src', $(this).data('img'));
        $('#parth_modal .modal-title').text($(this).attr('title'));
        $('#parth_modal').modal('show');
        return false;
    });

    if($('#whatsapp').length){
        $('#whatsapp .close').on('click', function () {
            $('body').removeClass('show_whatsapp');
        });
    }

    getwhatsapp();

});

//Всплыв. окно с журналом
function getwhatsapp () {

    var box = $('#whatsapp');

    if(box.length){

        var timeout = box.data('timeout') ? box.data('timeout') : 13000,
            closebtn = box.find('.close'),
            cookie = 'wasshow';

        function show() {
            //var res = checkcookie('getwhatsapp');

            //if(res === undefined){
                var date = new Date(new Date().getTime() + 86400 * 1000);
                document.cookie = "getwhatsapp="+cookie+"; path=/; expires="+date.toUTCString()+'"';
                $('body').addClass('show_whatsapp');
            //}

        };

        function close() {
            $('body').removeClass('show_whatsapp');
        };

        function checkcookie(name) {
            var matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        };

        setTimeout(function () {
            show();
        }, timeout);

        closebtn.on('click', function () {
            $('body').removeClass('show_whatsapp');
        });

    }

}

global.scroll_to_el = function(el, t = 1000) {
    $('html, body').animate({
        scrollTop: $(el).offset().top
    }, t);
    return false;
}
