/**
 * Created by kasun on 8/20/17.
 */
$(function(){
    $(".dropdown-menu li a").click(function(){
        console.log($(this).parents('.input-group'));
        $(this).parents('.input-group').find('.form-control').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents('.input-group').find('.form-control').val($(this).data('value'));
    });

});