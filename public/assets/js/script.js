$(document).ready(function(){
    $("#btn-send").mouseover(function(){
        if (!$("input[name=music]").val() || !$("input[name=artist]").val()) {
            alert("Campos vazios !")
        } 
    })
})
