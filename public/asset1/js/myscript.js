feather.replace();

$(document).ready(function(){
    "use strict";
    

    $('.ft-tab').click(function(){
        var href = $(this).attr('href');
        if($('#notification-box').is(':visible')){
            $('#notification-box').toggleClass('show');
        }
        if($('#user-area-box').is(':visible')){
            $('#user-area-box').toggleClass('show');
        }
        
        $('.ft-tab').each(function(){
            var thistab = $(this) ;
                thistab.removeClass('activeTab');
        });
        $(this).addClass('activeTab');

        // switch page
        $('.tab_page').each(function(){
            var thistab = $(this) ;
            // console.log(thistab.attr('id'));
            if('#'+thistab.attr('id') === href){
                thistab.removeClass('noshow');
                thistab.addClass('visible_tab');
            }
            else{
                thistab.removeClass('visible_tab');
                thistab.addClass('noshow');
            }
        });
    });

    $('#customSwitch1').change(function(){

        if($(this).prop("checked") == true){
            var theme = $('.theme');
            theme.addClass('day');
            theme.removeClass('night');
            // $('#switchlabel').html('Day mode enabled');
        }
        else{
            var theme = $('.theme');
            theme.addClass('night');
            theme.removeClass('day');
            // $('#switchlabel').text('Night mode enabled');
        }
    });
    
    $('#notification-area').click(function(){
        if($('#user-area-box').is(':visible')){
            $('#user-area-box').toggleClass('show');
        }
        $('#notification-box').toggleClass('show');
    });

    $('#user-area').click(function(){
        if($('#notification-box').is(':visible')){
            $('#notification-box').toggleClass('show');
        }
        $('#user-area-box').toggleClass('show');
    });
    

    $('#addmyfeed').click(function(){
        alert('oya');
    });

    
    

});