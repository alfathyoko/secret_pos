<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function msg($msg, $type)
{
    $js = "
    toastr.clear();
    toastr.options = {
        closeButton: true,
        positionClass: 'toast-bottom-right',
        showDuration: '300',
        hideDuration: '1000',
        timeOut: '3000',
        extendedTimeOut: '1000',
        showEasing: 'swing',
        hideEasing: 'linear',
        showMethod: 'fadeIn',
        hideMethod: 'fadeOut'
    };
    setTimeout(function() {
        toastr[type](msg)
    }, 500);";
}
