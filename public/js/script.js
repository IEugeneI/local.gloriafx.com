/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var k = 0;

$('.menu').on("click", function() {
    if ($(this).find('li').css('display') == 'block') {
        $(this).find('li').css('display', 'none');
        $('.menu').find('li').css('display', 'none');
    } else if (k == 1) {

        $('.menu').find('li').css('display', 'none');

        $(this).find('li').css('display', 'block');
        k = 0;

    } else {
        $('.menu').find('li').css('display', 'none');
        $(this).find('li').css('display', 'block');
        k = 1;
    }

});
$('#buttonhor').on("click", function() {
    if ($('.menuhor').css('display') == 'block') {
        $('.menuhor').css('display', 'none');
    } else {
        $('.menuhor').css('display', 'block');
    }
});
$('.menuhor').on("click", function() {
    if ($(this).find('li').css('display') == 'block') {
        $(this).find('li').css('display', 'none');
        $('.menu').find('li').css('display', 'none');
    } else if (k == 1) {

        $('.menuhor').find('li').css('display', 'none');

        $(this).find('li').css('display', 'block');
        k = 0;

    } else {
        $('.menuhor').find('li').css('display', 'none');
        $(this).find('li').css('display', 'block');
        k = 1;
    }

});
