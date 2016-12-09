$(document).ready(function(e){

    $('#selectCity1').on('blur',function () {  
        $('#selectCity1').removeClass('inputLoading');      
        $('#citiesDrop1').hide('blind'); 
    });

});

function selectCities(id){   
    var selectCity = $('#selectCity'+id),
        showCity = $('#showCity'+id),           
        backResult = $('#backResult'+id),
        addCity = $('#addCity'+id),
        hiddenCity = $('#hiddenCity'+id),
        citiesDrop = $('#citiesDrop'+id);

        citiesDrop.show('fold');
        $(selectCity).addClass('inputLoading');
        $(this).val('');
            
    selectCity.on('keyup',function(){                       
        $.ajax({
            url : 'getcities',
            type : 'post',
            data : {data : this.value},
            dataType: 'json',
            success : function(data){ 

                var results = [];
                var value = '';
                if($.isEmptyObject(data)){                    
                    results.push('<li id = "addOtherCity" value = "Other" >Other</li>');
                }else{
                    $.each(data,function(key,value){                                            
                        results.push('<li id = "'+value.city_id+'" value = "'+value.city_name+'" >'+value.city_name+'</li>');                   
                    });
                }
                $(selectCity).removeClass('inputLoading');
                
                $(backResult).html(results);
                $('#backResult1 li').each(function(i){
                    
                    $("#"+this.id).on('click',function(){
                        citiesDrop.hide('blind');                        
                        selectCity.val($(this).attr('value'));
                        hiddenCity.val(this.id);                           
                        if(this.id == 'addOtherCity'){
                            showCity.hide('blind');
                            addCity.show('blind');
                        }else {
                            showCity.hide('blind');
                            selectCity.val($(this).attr('value'));
                            hiddenCity.val(this.id);                            
                        }               

                    });
                });                
            }
        });
    });
}
$('#addCity1').show('blind');
function statesData(id,countryId){  
    var states = $('#states'+id);    
    // states.addClass('loadingState');

    $.ajax({
        url : 'getstates', 
        type : 'post',
        data : {data : countryId}, 
        dataType : 'json',
        success : function(data){             
            var results = [];
            var value = '';                
            results.push('<option value="-1">--State--</option>');
            $.each(data,function(key,value){                                            
                results.push('<option id = "'+value.state_id+'" value = "'+value.state_id+'" >'+value.state_name+'</option>');
            });
            
        states.prop('disabled',false).html(results);
        // states.removeClass('loadingState');
        }
    });
}
function cityName(id){
    $('#cityname'+id).prop('disabled', false).focus();
}   
function addCities(id){
    var addCityBtn = $('#addCityBtn'+id),
        btnIcon = $('#btnIcon'+id),
        addCity = $('#addCity'+id),
        hiddenCity = $('#hiddenCity'+id),
        selectCity = $('#selectCity'+id);
    
    addCityBtn.addClass('loadingState');
    btnIcon.hide();
    var co = {};
    co['country'] = $('#country'+id).val();
    co['state'] = $('#states'+id).val(); 
    co['city'] = $('#cityname'+id).val();
    // console.log(co);
    $.ajax({
        url : 'addcity', 
        data : {data : co, _token : $('meta[name="_token"]').attr('content')},
        dataType : 'JSON', 
        type : 'POST',        
        success: function(data){            
            addCity.hide('blind');              
            hiddenCity.val(data);
            selectCity.val(co['city']);
            // $('#country'+id).re();
            // co['state'] = $('#states'+id).val(); 
            // co['city'] = $('#cityname'+id).val();
        }
    });
}

function checkCity(id,cityName){
    var addCityBtn = $('#addCityBtn'+id),
        cityname = $('#cityname'+id);
    if(cityName > ''){
        addCityBtn.show();
    }else{
        addCityBtn.hide();
    }
}
