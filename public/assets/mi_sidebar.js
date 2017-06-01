/**
 * Resize function without multiple trigger
 * 
 * Usage:
 * $(window).smartresize(function(){  
 *     // code here
 * });
 */



// Sidebar
$(document).ready(function() {
    // TODO: This is some kind of easy fix, maybe we can improve this
	 let CURRENT_URL = window.location.href.split('?')[0];
     let SIDEBAR = $('.nav-list');

    SIDEBAR.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('active');



});
