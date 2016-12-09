$('#bookMark').on('click',function(){
	$(this).toggleClass('red gray');
});
// Menu Hide and Show
var otherFilter = $('#otherFilter'),
    showLeftB  = $('#showLeft');
    
$('#showLeft, #fade3, #otherFilter').on('click', function(){  
	if(this.id == 'otherFilter'){
	  	showLeftB.show();
	  	otherFilter.hide();
	}else{
	  	showLeftB.hide();
	  	otherFilter.show();
	}            
	$('#cbp-spmenu-s1').toggleClass('cbp-spmenu-open')    
	$('#fade3').toggleClass('fadede');    
});
//End of Menu Hide and Show
values = {};
values['day'] = [];
values['type'] = [];
values['salary'] = [];
values['location'] = [];
values['education'] = [];
values['industry'] = [];
i = 0;
$('#accordion ul li input[type="checkbox"]').each(function(a,b){

	$('#'+b.id).on('click',function(){			
		var data = this.value.split('-'),
		type = data[0],
		value = data[1];		
			// console.log(value);		
		if(!$('#'+this.id).is(':checked')){
			values[type].push(data[1]);						
			i++;
			// console.log(values);
		}else{			
			index = values[type].indexOf(data[1]);
			if(index!=-1){
			   values[type].splice(index, 1);
			}
			// console.log(values);
		}			

		$.ajax({
			url : '/sidebar',
			data : values,
			type : 'post',
			dataType : 'json',
			success : function(data){				
				if(data.length > 0){
					var res = [];			
					for (var property in data) {
					    if (data.hasOwnProperty(property)) {				    
					    	val = data[property];
					    	val = '<div class="location_box1">'
								    +'<h6>'
								      	+'<a href="location_single.html">'+data[property].title+'</a>'
								      	+'<i class="fa fa-bookmark gray" id = "bookMark"></i>'
								      	+'<span class="m_1">Posted on'+data[property].date+' </span>'
								    +'</h6>'
								    +'<div class="clearfix"></div>'
								    +'<h4>'
								      	+'<a href="#">'+data[property].emp+'</a> |'
								      	+'<b><i class="fa fa-map-marker" aria-hidden="true"></i>'
								      	+data[property].city
								      	+'</b>'
								    +'</h4>'
								    +'<div class="clearfix"></div>'
								    +'<div class="job-detail">'
								      	+'<p>'+data[property].description+'</p>'
								      	+'<div class="job-skills">'
								        	+'<span class="skil"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Skills :</span>'
								        	+'<p>'
								        	+data[property].skill
								        	+'</p>'
								      	+'</div>'
								    +'</div>'
								    +'<button class="apply">Apply</button>'
								    +'<div class="job-salary" style="margin-top:-10px; margin-bottom:0px;">'
								      	+'<span>'
								        	+'<i class="fa fa-inr" aria-hidden="true"></i> :'
								      	+'</span>'+data[property].salary
								      	+'<span class="exp">'
								        	+'<b>Experience : '+data[property].exp+'</b> years'
								      	+'</span>'
								    +'</div>'
								    +'<div class="clearfix"> </div>'
								+'</div>'
								+'<div class="clearfix"> </div>';

					    	res.push(val);
					    }
					}				
					$('#jobs').html(res);					
				}else{
					$('#jobs').html('No Record Found');
				}
			}
		});
	});
});
