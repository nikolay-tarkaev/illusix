$('#createIngredientModalSubmit').click(function(){
    var inputIngredientName = $('#inputIngredientName').val();
    $('#inputIngredientName').removeClass('input-error');
    $('#createIngredientModalResult').addClass('hidden');
    inputIngredientName = $.trim(inputIngredientName);
    if(inputIngredientName == ""){
        $('#inputIngredientName').addClass('input-error');
    } else {
        $.ajax({
            url: '/ingredients/store?name=' + inputIngredientName,
            success: function(msg){
                var result = jQuery.parseJSON(msg);
                if(result.success){
                    $('#createIngredientModal').modal('hide');
                    $('#inputIngredientName').val('');
                    setTimeout(function(){
                        location.reload();
                    }, 500);
                } else {
                    $('#createIngredientModalResult').text('Ошибка! Попробуйте ещё раз.');
                    $('#createIngredientModalResult').removeClass('hidden');
                }
            }
        });
    }
});