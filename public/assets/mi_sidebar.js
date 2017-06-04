
// Sidebar
$(document).ready(function() {
    console.log('testman');
    let CURRENT_URL = window.location.href.split('?')[0];
    let SIDEBAR = $('#sidebar .sidebar-menu');
    let target = SIDEBAR.find('a[href="' + CURRENT_URL + '"]').parent('li');
    target.addClass('active');
    let targetlu = target.parent('ul').eq(0);
    if(targetlu.hasClass('submenu')){

        targetlu.parent('li').addClass('active open');

    }

});
