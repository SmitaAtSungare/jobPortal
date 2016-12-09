function add(result,id){
	$(result+' li').each(function(i,l){
		$("#"+this.id).on('click',function(){				
			var data = this.id.split('-');
			$(id).val($(this).attr('value'));
			$(id+'H').val(data[1]);
		});
	});
}
function sendRequest(value,id) {	
	var result = '#'+id.replace(/Bar/g,'')+'Result',
		name = id.replace(/Bar/g,''),
		bar = '#'+id,
		drop = '#'+id.replace(/Bar/g,'')+'Drop';

	$(drop).show('fold');

	if(name === 'exp'){
		d = 1;
		var results = [];
		for(var i = 0;i <= 20; i++){

			d = parseInt(d,0);
			if(i==0){
				results.push('<li value = "Fresher" id = "'+name+'-Fresher">Fresher</li><li id="'+name+'-'+d+'" value="'+i+' - '+d+' Years">'+i+' - '+d+' Years</li>');
			}else{
				results.push('<li id="'+name+'-'+d+'" value="'+i+' - '+d+' Years">'+i+' - '+d+' Years</li>');
			}
			d++;
		}
		$(result).html(results);

		add(result,bar); //add value to input
	}else{
		$(bar).addClass('inputLoading');		
		$.ajax({
			url : '/getresult',
			data :{data : value, for : name},
			type : 'POST',
			dataType: 'json',
			success : function(data){
				var results = [];
				var value = '';
				$.each(data,function(key,value){
					if(name === 'skills'){
						results.push('<li id = "'+name+'-'+value.skill_id+'" value = "'+value.skill_title+'" >'+value.skill_title+'</li>');
					}
					if(name === 'location'){
						results.push('<li id = "'+name+'-'+value.city_id+'" value = "'+value.city_name+'" >'+value.city_name+'</li>');
					}
				});
				$(bar).removeClass('inputLoading');
				$(result).html(results);
				add(result,bar); //add value to input
			}
		});
	}
}
var inputIds = ['#skillsBar', '#locationBar', '#expBar'],
	ids = inputIds.join(',');

$(document).ready(function(e){

	$(ids).on('blur',function () {
		var id = this.id.replace(/Bar/g,'');
		$('#'+id+'Drop').hide('fold');
	});

});

$(ids).on('keyup focus', function(e){
	e.stopPropagation();	
	sendRequest(this.value,this.id);
});
$('#searchBtn').on('click',function (e) {
	var path = window.location.pathname;
		values = {};
		values['skill'] = $('#skillsBarH').val();
		values['location'] = $('#locationBarH').val();
		values['exp'] = $('#expBarH').val();	
		skill = $('#skillsBar').val() !== '' ? 'Skill-'+$('#skillsBar').val()+'-'+values['skill']+'/' : '';
		city = $('#locationBar').val() !== '' ? 'City-'+$('#locationBar').val()+'-'+values['location']+'/' : '';
		exp = $('#expBar').val() !== '' ? 'Experience-'+$('#expBar').val()+'-'+values['exp']+'/' : '';
		url = '/job/search/'+skill+city+exp;	
	window.location.href = url;

});