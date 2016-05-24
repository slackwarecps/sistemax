/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
   //Ready
    $("#sel_tabelas").on('change', sel_tabelas_change);
    $("#tacampos").on('click', function() {
        $("#tacampos").select();
    });    
    
    
    $('#btn1').on('click', function() {
        $(".alert").alert();
        //alert('opa');
    });
});

function teste() {
    $(".alert").alert('close');    
}

function sel_tabelas_change() {    
    $("#tacampos").load('mostra_tabelas.php?c=getcampos&t=' + $("#sel_tabelas").val());
    $("#taform").load('mostra_tabelas.php?c=getformulario&t=' + $("#sel_tabelas").val());
}