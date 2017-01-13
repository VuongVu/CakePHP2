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

	function initDataTable() {
		dataTable = $('#searchResult').DataTable(options);
	}

	function attachClickHandler() {
		$('.btn-addrow').click(function() {
			var index = parseInt($(this).attr('id'));
			$(this).attr('index', index);
		});
	}

	$('.btn-addrow').click(function() {
		var index = $(this).attr('index');
		var newRow = '<tr>' + 
			'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
			'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
			'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
			'</tr>';
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