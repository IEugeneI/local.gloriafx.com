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
$(document).ready(function() {

    $('#hidemenu').on("click", function() {
        $(this).toggleClass("fa-list ");
        // $("#hidemenu").button("option", "label", "<span class="navbar - toggler - icon"></span>");
        $('.showhide').animate({opacity: 'toggle', width: 'toggle'}, 300);
        //  $('#content').toggleClass("contenttoggle");
        // $('#content').animate({left: '0px'});
        /*  $('this').toggle(function() {
         $('#content').animate({left: '0px'});
         });*/
        if ($('#content').css('left') == '258px') {
            $('#content').animate({left: '0px'});
        } else {
            $('#content').animate({left: '258px'});
        }
        ;
    });
    $('.contentdiv').mouseenter(function() {
        $(this).find('.footercontent').css('display', 'block');
    });
    $('.contentdiv').mouseleave(function() {
        $(this).find('.footercontent').css('display', 'none');
    });
    /* $('#placeholder').mouseleave(function() {
     alert('123');
     });
     $('#placeholder').crossSlide({
     sleep: 2,
     fade: 1
     }, [
     {src: '../../public/image/content/VFX & Beauty/Disney Pusney COsney/background/1.jpg'},
     {src: '../../public/image/content/VFX & Beauty/Disney Pusney COsney/background/2.jpg'},
     {src: '../../public/image/content/VFX & Beauty/Disney Pusney COsney/background/3.jpg'},
     ]);*/
    $('.imgdiv').on("click", function() {
        var k;
        k = $(this).find('img').attr('src');

        $("#ima").attr("src", k);

    });

    $('.videobutton').on("click", function() {
        $('.mymodaldialogvideo').css('display', 'block');
        $('#video').attr('src', a);

    });
    $(document).mouseup(function(e) { // событие клика по веб-документу
        var div = $(".mymodaldialogvideo"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
            $(".mymodaldialogvideo").css('display', 'none');
            $('#video').attr('src', '');
        }
    });


    $('.leadershipmd').mouseenter(function() {
        $(this).find('.footerleadership').css('display', 'block');
    });
    $('.leadershipmd').mouseleave(function() {
        $(this).find('.footerleadership').css('display', 'none');
    });
    $('.leadershipmdblock').mouseenter(function() {
        $(this).find('.footerleadership').css('display', 'block');
    });
    $('.leadershipmdblock').mouseleave(function() {
        $(this).find('.footerleadership').css('display', 'none');
    });


});

