
var localPath =  location.origin.includes('local') ? location.origin + '/used-car-listing/public' : location.origin; 

$(document).ready(function(){
    $('#edit-search').keyup(function(){
        
        var query = $(this).val();
        response = {'query':query};
        $.ajax({
            type: "POST",
            url: localPath + "/web/search-filter",
            data: {response:response},
            dataType: "json",
            success: function (msg) {
                console.log(msg);
            },
            erorr:function(e){
                console.log(e);
            }
        })
    });
});


form_update_datas = {};
$(document).ready(function(){
   
    $('#filter_form').change(function(e){
        e.preventDefault();
        var form_data = $(this).serializeArray();
        form_update_datas.make = [];
        form_update_datas.model = [];

        $.each(form_data,function(key,item){
            if(item.name = "make"){
               form_update_datas.make.push(item.value);
            }
       });
        if(form_data[form_data.length-1] &&  form_data[form_data.length-1].make != 'undefined'  ){
            form_data[form_data.length-1].value = form_update_datas.make.join('_');
        }
      

        console.log(form_update_datas);
        $.ajax({
            type: "POST",
            url: localPath + "/web/search-filter",
            data: form_data,
            dataType: "json",
            success: function (response) {
                $('#model_list').html(function(){
                    text = '';
                    $.each(response,function( make, value ) {
                       text += '<span class="make_name_'+make+'">' + make + '</span>';
                       $.each(value,function(key,value){
                         text +=  '<li class="model_list">' + value +' <span> ' + ' <input type="hidden" value="'+ make + '__' + value+'"> '+  '</span>  </li>';
                       });
                    });
                  
                    return text;
                }); 

                $('.model_list').click(function(){
                    if($(this).hasClass('selected')){
                        $(this).removeClass('selected');
                        form_update_datas.model.splice($.inArray($(this).find('input').attr('value'), form_update_datas.model), 1);
                    }
                    else{
                        $(this).addClass('selected');
                        form_update_datas.model.push( $(this).find('input').attr('value'));
                    }             
                })
            },
            erorr:function(e){
                console.log(e);
            }
        })
    });
});



var form_update_datas;
$(document).ready(function(){
    $('#filter_form').submit(function(e){
        e.preventDefault();
        var form_data = $(this).serialize();
        form_update_datas.make = [];
        updateFormData = '';
        console.log(form_update_datas);
        if(form_data.includes('make')) {
            const makeQuery = form_data.replace(/%20/g,'').match(/(?<=make\=)([^&#\s]*)/g).join('_');
            updateFormData += 'make=' + makeQuery ;
           
        }
        console.log(form_update_datas.model.length);
        if(form_update_datas.model.length > 0){
            updateFormData += '&model=' + form_update_datas.model.join('___');
         }
         console.log(updateFormData);

        $.ajax({
            type: "POST",
            url: localPath + "/web/admin/listing",
            data: updateFormData,
            dataType: "json",
            success: function (data) {
                $('ul.pagination').html(data.pager);
                $('.grid').hide().fadeIn().html(data.response).fadeIn('slow');
              
            },
            erorr:function(e){
                console.log(e);
            }
        })
    });
});


$(document).ready(function(){
    $('.delete').click(function(){
        var selector =  $(this).parent().parent();
        $.ajax({
            type: "POST",
            url: localPath + "/web/remove",
            data: {'data-id':$(this).attr('data-id')},
            dataType: "json",
            success: function (response) {
                if(response.success == true){
                    $(selector).fadeIn(300).fadeOut("normal", function() {
                        $(this).remove();
                    });
                }
            },
            erorr:function(e){
                console.log(e);
            }
        })  
    }); 
});


