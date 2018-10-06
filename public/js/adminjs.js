$(document).ready(function() {
// $('.admmenu').on("click", function() {
    var host = location.href;
    var a = host.split('/');
    var lastsegment = a[a.length - 1];
    if ((lastsegment != 'admin') && (lastsegment != '')) {
//    var k;
//   k = $(this).attr('name');
        $('.adminrightblock').css('display', 'none');
        $('#' + lastsegment).css('display', 'block');
    }
    ;
// });
    jQuery('.changemenu').click(function() {
        var k = $(this).attr('id');
        jQuery('.changename').val(k);
        f = $(this).attr('data');
        jQuery('.idmenu').val(f);
    });
    jQuery('.changecontent').click(function() {
        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        director = $(this).attr('data-director');
        producer = $(this).attr('data-producer');
        work = $(this).attr('data-word');
        menu = $(this).attr('data-menu');
        jQuery('.id').val(id);
        jQuery('.name').val(name);
        jQuery('.director').val(director);
        jQuery('.producer').val(producer);
        jQuery('.work').val(work);
        jQuery('.updatecontent').val(menu);
    });
    jQuery('.changesecondmenu').click(function() {
        var k = $(this).attr('id');
        jQuery('.changenamesecondmenu').val(k);
        f = $(this).attr('data');
        jQuery('.secondidmenu').val(f);
        g = $(this).attr('name');
        jQuery('.changenamemainmenu').val(g);
        j = $(this).attr('data-http');
        jQuery('.changehttpmenuclass').val(j);
    });
    jQuery('.twonmenu').click(function() {
        $(this).data('clicked', true);
    });
    $('.secondmenus').on("click", function() {
        if ($('.twonmenu').css('display') == 'none') {
            $('.twonmenu').css('display', 'block');
            $('.twonmenu').data('clicked', false);
        } else {
            if (jQuery('.twonmenu').data('clicked')) {
                $('.twonmenu').css('display', 'block');
                $('.twonmenu').data('clicked', false);
            } else {
                $('.twonmenu').css('display', 'none');
            }
        }
    });
    jQuery('.twonmenumain').click(function() {
        $(this).data('clicked', true);
    });
    $('.secondmenusmain').on("click", function() {
        if ($('.twonmenumain').css('display') == 'none') {
            $('.twonmenumain').css('display', 'block');
            $('.twonmenumain').data('clicked', false);
        } else {
            if (jQuery('.twonmenumain').data('clicked')) {
                $('.twonmenumain').css('display', 'block');
                $('.twonmenumain').data('clicked', false);
            } else {
                $('.twonmenumain').css('display', 'none');
            }
        }
    });
    jQuery('.twomenucontent').click(function() {
        $(this).data('clicked', true);
    });
    $('.menucontent').on("click", function() {
        if ($('.twomenucontent').css('display') == 'none') {
            $('.twomenucontent').css('display', 'block');
            $('.twomenucontent').data('clicked', false);
        } else {
            if (jQuery('.twomenucontent').data('clicked')) {
                $('.twomenucontent').css('display', 'block');
                $('.twomenucontent').data('clicked', false);
            } else {
                $('.twomenucontent').css('display', 'none');
            }
        }
    });

    jQuery('.blogmenu').click(function() {
        $(this).data('clicked', true);
    });
    $('.blogm').on("click", function() {
        if ($('.blogmenu').css('display') == 'none') {
            $('.blogmenu').css('display', 'block');
            $('.blogmenu').data('clicked', false);
        } else {
            if (jQuery('.blogmenu').data('clicked')) {
                $('.blogmenu').css('display', 'block');
                $('.blogmenu').data('clicked', false);
            } else {
                $('.blogmenu').css('display', 'none');
            }
        }
    });

    jQuery('.leadershipadm').click(function() {
        $(this).data('clicked', true);
    });
    $('.leadership').on("click", function() {
        if ($('.leadershipadm').css('display') == 'none') {
            $('.leadershipadm').css('display', 'block');
            $('.leadershipadm').data('clicked', false);
        } else {
            if (jQuery('.leadershipadm').data('clicked')) {
                $('.leadershipadm').css('display', 'block');
                $('.leadershipadm').data('clicked', false);
            } else {
                $('.leadershipadm').css('display', 'none');
            }
        }
    });

    jQuery('.updateblog').click(function() {
        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        text = $(this).parent().siblings(":last").prev().prev().prev().text();
        datte = $(this).attr('data-date');
        http = $(this).attr('data-http');
        fulltext = $(this).parent().siblings(":last").text()
        jQuery('.id').val(id);
        jQuery('.name').val(name);
        jQuery('.text').val(text);
        jQuery('.http').val(http);
        jQuery('.fulltext').val(fulltext);
        jQuery('.calendar').val(datte);
        var height = $("body").height();
        height = height + 220;
        $("body").animate({"scrollTop": height}, "slow");
    });


    jQuery('.updateleadership').click(function() {
        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        position = $(this).attr('data-position');
        http = $(this).attr('data-http');
        jQuery('.id').val(id);
        jQuery('.name').val(name);
        jQuery('.http').val(http);
        jQuery('.position').val(position);
        var height = $("body").height();
        height = height + 220;
        $("body").animate({"scrollTop": height}, "slow");
    });


});
