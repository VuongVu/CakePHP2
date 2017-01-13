$(document).ready(function() {
	var options = {
		'scrollY': 200,
		'scrollX': true,
		'bFilter': false,
		'bInfo': false,
		'bPaginate': false,
		'bAutoWidth': false
	};

	var dataTable;

	var newRow = '<tr>' + 
			'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
			'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
			'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
			'</tr>';

	function initDataTable() {
		dataTable = $('#searchResult').DataTable(options);
	}

	function attachClickHandler() {
		$('.btn-addrow').click(function() {
			var rowIndex = parseInt($(this).attr('id'));
		});
	}

	$('.btn-addrow').click(function() {
		var index = $(this).attr('index');

		dataTable.destroy();
		$("#searchResult tbody tr").eq(index).after(newRow);    
	    initDataTable();
	    attachClickHandler();
		
		// dataTable.row.add([
		// 	'','','','','','','','','','','','','','','','','','',''
		// ]).draw();
	});

	initDataTable();
	attachClickHandler();
});