/**
 * Created by Yaroslav on 26.03.2017.
 */
$(document).ready(function(){
    var id;
    var ajaxUri = window.location.origin + window.location.pathname;

    $('.edit-entity').click(function () {
        var tile = $(this).closest('.one-tile');
        id = tile.attr('data-id');
        $('#first_name_ed').val( tile.find("div[data-area='first_name_ed']").text() );
        $('#last_name_ed').val( tile.find("div[data-area='last_name_ed']").text() );
        $('#birthdate_ed').val( tile.find("div[data-area='birthdate_ed']").text() );
        $('#description_ed').val( tile.find("div[data-area='description_ed']").text().trim() );

        if(tile.find("span[data-area='marital_status']").text()){
            $('#marital_status').prop('checked', true);
        } else {
            $('#marital_status_ed').prop('checked', false);
        }
        var radioID = tile.find("div[data-area='language_ed']").text();
        $('#'+radioID).prop('checked', true);

        var attrArr = tile.find('div[data-area]');
    });


    $('#addSend').click(function(){
        var str = $('#addForm').serialize();
        var url = ajaxUri + 'create/?' + str;

        $.ajax({
            url: url,
            success: function(response){
                (response)? location.reload() : false;
            }
        });
    });

    $('#update').click(function(){
        var str = $('#updateForm').serialize();
        var url = ajaxUri + 'update/?' + str + '&id='+id;

        $.ajax({
            url: url,
            success: function(response){
                (response)? location.reload() : false;
            }
        });


    });

    $('.btn-danger').click(function(){
        var id = $(this).closest('.one-tile').attr('data-id');
        var url = ajaxUri + 'delete/?' + '&id='+id;
        $.ajax({
            url: url,
            success: function(response){
                (response)? location.reload() : false;
            }
        });
    });

    $('.one-tile > a').click(function(event){
        event.preventDefault();
        if(!$(event.target).closest('.but-cont').length){
           window.location.href = $(this).attr("href");
        }
    });

});
