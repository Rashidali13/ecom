$(document).on('mouseenter', '#main .side-bar .sidebar-nav ul li .cata-drop-down ul li a', function () {
    $('#main .side-bar .sidebar-nav ul li .cata-drop-down ul li .sub-dropdown .text-info .text-bar .block p').text($(this).attr('title'));
}).on('mouseleave', '#main .side-bar .sidebar-nav ul li .cata-drop-down ul li a', function () {
    $('#main .side-bar .sidebar-nav ul li .cata-drop-down ul li .sub-dropdown .text-info .text-bar .block p').text('');
});
$(function() {
    $('#main .side-bar .sidebar-nav ul li .cata-drop-down ul li .event').mouseenter(function() {
        $('#main .side-bar .sidebar-nav ul li .cata-drop-down ul li .sub-dropdown .text-info .text-bar .add').addClass("inverse");
    }).mouseleave(function () {
        $('#main .side-bar .sidebar-nav ul li .cata-drop-down ul li .sub-dropdown .text-info .text-bar .add').removeClass("inverse");
    });
});