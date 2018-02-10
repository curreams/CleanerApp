$("#cleanerName").change(function(event){
	$.get("registers/"+event.target.value+"",function(response,state){
		var flatName;
		var date;
		var table;
		$('#regTable tr').not(':first').remove();
		for(i=0;i<response.length;i++){
			$.ajax({
				url: "flats/"+response[i].flat_id+"",
				type: "get",
				async: false,
				success: function(response2,state2){
							flatName = response2[0].number;
							}
			});
			date = response[i].register_date;
			table += '<tr><td>' + flatName + 
                    '</td><td>' + date + '</td></tr>';	
		}
		$('#regTable tr').first().after(table);
	});
});