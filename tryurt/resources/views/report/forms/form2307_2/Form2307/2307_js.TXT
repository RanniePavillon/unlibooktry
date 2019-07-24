$(function(){
	$('input[name="item1FromM"],' + 
		' input[name="item1FromD"],' +
		' input[name="item1FromY"],' +
		/* ' input[name="item1ToM"],' +
		' input[name="item1ToD"],' +
		' input[name="item1ToY"],' + */
		' input[name="item2[]"],' +
		' input[name="item3"],' +
		' input[name="item4"],' +
		/* ' input[name="item4A"],' + 
		 ' input[name="item5"],' +
		' input[name="item5A"],' + */
		' input[name="item6[]"],' +
		' input[name="item7"],' +
		' input[name="item8"],' +
		' input[name="item8A"],' +
		' input[name="type"],' +
		' input[name="atc"],' +
		' input[name="firstMonth"],' +
		' input[name="secondMonth"],' +
		' input[name="thirdMonth"],' +
		' input[name="total"],' +
		' input[name="taxWithheld"]'
	).prop('readonly',true);
})