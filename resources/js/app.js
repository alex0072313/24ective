import $ from 'jquery';
window.$ = window.jQuery = $;
require('jquery.mousewheel');
require('popper.js');
require('bootstrap');
import IMask from 'imask';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    console.log('123');

    if($('.phone-mask').length){
        $('.phone-mask').each(function () {
            if($(this).attr('id')){
                var phoneMask = IMask(
                    document.getElementById($(this).attr('id')), {
                        mask: '+{7}(000)000-00-00'
                    });
            }
        });
    }

});
