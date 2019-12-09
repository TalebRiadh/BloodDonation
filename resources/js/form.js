
$("#wilaya").change(function(){
    // get ID of selected wilaya
    var wilayaID = $(this).val();
    //console.log(wilayaID)
    if(wilayaID){
        $.ajax({
            type: "GET",
            url: "/get-commune-list?wilaya_id="+wilayaID,
            success: function(res){
                if(res){

                    $('#commune').empty();
                    $.each(res,function(key,value){
                        $('#commune').append('<option value="'+key+'">'+value+'</option>')
                    });
                    //console.log(res)
                }else{
                    $('#commune').empty()
                }
            }
        })
    }else{
        $('#commune').empty()
    }
});
