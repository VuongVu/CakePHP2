<?php  
	echo $this->Html->css('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css');
	echo $this->Html->script('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js');
?>

<div class="container">
	<div class="row">
		<!-- SEARCH CONDITIONS FORM START -->
		<?php 
			echo $this->Form->create(
				'Customer', 
				array(
					'action' => 'search',
					'class' => 'form-horizontal',
					'inputDefaults' => array(
						'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
						'div' => array('class' => 'form-group'),
				        'label' => array('class' => 'control-label'),
				        'between' => '<div class="col-sm-4">',
				        'after' => '</div>',
				        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
					)
				)
			);
			echo $this->Form->input(
				'company', 
				array(
					'type' => 'text',
					'label' => array(
						'text' => '会社',
						'class' => 'control-label col-sm-2'
					), 
					'class' => 'form-control',
					'div' => array(
						'class' => 'form-group'
					)
				)
			);
			echo $this->Form->input(
				'department', 
				array(
					'type' => 'text',
					'label' => array(
						'text' => '部署',
						'class' => 'control-label col-sm-2'
					), 
					'class' => 'form-control',
					'div' => array(
						'class' => 'form-group'
					)
				)
			);
			echo $this->Form->input(
				'name', 
				array(
					'type' => 'text',
					'label' => array(
						'text' => '名前',
						'class' => 'control-label col-sm-2'
					), 
					'class' => 'form-control',
					'div' => array(
						'class' => 'form-group'
					)
				)
			);
			echo $this->Form->input(
				'cube_emp', 
				array(
					'type' => 'text',
					'label' => array(
						'text' => 'CUBE担当者',
						'class' => 'control-label col-sm-2'
					), 
					'class' => 'form-control',
					'div' => array(
						'class' => 'form-group'
					)
				)
			);
			echo $this->Form->end(
				array(
					'label' => '絞り込み',
					'class' => 'btn btn-primary col-sm-1',
					'div' => array(
						'class' => 'form-group'
					) 
				)
			);
		?>
		<!-- SEARCH CONDITIONS FORM END -->
	</div>
</div>

<hr style="height:1px;border:none;color:#333;background-color:#333;" />

<!-- SEARCH RESULT START -->
<div class="container-fluid">
	<div class="col-sm-1">
		<?php  
        	echo $this->Html->link('保存', 
        		array(
        			'action' => '#'
        		),
        		array(
        			'class' => 'btn btn-primary',
        			'style' => 'margin-left: 65px; width: 100px'
        		)
        	)       
		?>
	</div>


	<div class="col-sm-12">
		<div class="table-responsive">
			<table id="searchResult" class="table table-bordered table-hover table-condensed display" style="visibility: visible; margin-top: 10px" cellspacing="0" width="100%">
				<thead style="text-align: center">
		            <tr>
		                <th rowspan="2" style="min-width: 60px;">No</th>
		                <th rowspan="2" style="min-width: 100px;"></th>
		                <th rowspan="2" style="min-width: 120px;">会社</th>
		                <th rowspan="2" style="min-width: 50px;">部署1</th>
		                <th rowspan="2" style="min-width: 50px;">部署2</th>
		                <th rowspan="2" style="min-width: 50px;">役職</th>
		                <th rowspan="2" style="min-width: 50px;">名前</th>
		                <th rowspan="2" style="min-width: 50px;">郵便番号</th>
		                <th rowspan="2" style="min-width: 50px;">住所1</th>
		                <th rowspan="2" style="min-width: 50px;">住所2</th>
		                <th rowspan="2" style="min-width: 50px;">住所3</th>
		                <th rowspan="2" style="min-width: 80px;">電話番号（会社）</th>
		                <th rowspan="2" style="min-width: 80px;">電話番号（内線）</th>
		                <th rowspan="2" style="min-width: 80px;">電話番号（携帯）</th>
		                <th rowspan="2" style="min-width: 50px;">CUBE担当者</th>
		                <th colspan="2" style="min-width: 100px;">45期</th>
		                <th colspan="2" style="min-width: 100px;">44期</th>
		            </tr>
		            <tr>
		            	<th style="min-width: 50px;">送付</th>
		            	<th style="min-width: 50px;">担当</th>
		            	<th style="min-width: 50px;">送付</th>
		            	<th style="min-width: 50px;">担当</th>
		            </tr>
		        </thead>
				<tbody>
					<?php $rowIndex = 0; ?>
					<?php foreach ($customers as $customer): ?>				
		           	<tr id="<?php echo $customer['Customer']['id'] ?>">
		           		<td>
		           			<div style="position: absolute;">
		           				<a id="<?php echo $rowIndex++; ?>" class="btn btn-xs btn-success btn-addrow" style="background: none; border: none; padding: 15px 0; margin-left: -8px; margin-bottom: -33px; position: relative;">
                                    <span class="glyphicon glyphicon-plus" style="color: #18bc9c"></span>
                                </a>
		           			</div>
		           			<?php echo $customer['Customer']['id'] ?>
		           		</td>
		           		<td>
		           			<?php 
		           				echo $this->Html->link(
		           					'顧客情報', 
		           					array(
		           						'action' => '#'
		           					),
		           					array(
		           						'class' => 'btn btn-info btn-table'
		           					)
		           				) 
		           			?>
		           			<?php 
		           				echo $this->Html->link(
		           					'営業情報', 
		           					array(
		           						'action' => '#'
		           					),
		           					array(
		           						'class' => 'btn btn-info btn-table'
		           					)
		           				) 
		           			?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['company'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['department_1'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['department_2'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['position'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['name'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['postal_code'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['address_1'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['address_2'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['address_3'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['phone_company'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['phone_extension'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['phone_mobile'] ?>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['cube_tantousha'] ?>
		           		</td>
		           		<td>
		           			<div class="checkbox">
		           				<?php if ($customer['Customer']['soufu'] == TRUE): ?>
		           					<label><input type="checkbox" checked="true" name=""></label>
		           				<?php else: ?>
		           					<label><input type="checkbox" name=""></label>
		           				<?php endif ?>
		           			</div>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['tantou'] ?>
		           		</td>
		           		<td>
		           			<div class="radio">
		           				<?php if ($customer['Customer']['soufu'] == TRUE): ?>
		           					<label><input type="radio" checked="true" name=""></label>
		           				<?php else: ?>
		           					<label><input type="radio" name=""></label>
		           				<?php endif ?>
		           			</div>
		           		</td>
		           		<td>
		           			<?php echo $customer['Customer']['tantou'] ?>
		           		</td>
		           	</tr>
		           <?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var options = {
			'scrollY': 200,
			'scrollX': true,
			'bFilter': false,
			'bInfo': false,
			'bPaginate': false,
			'bAutoWidth': false
		};

		var dataTable = $('#searchResult').DataTable(options);

		var newRow = '<tr>' + 
				'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
				'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
				'<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' + '<td></td>' +
				'</tr>';

		$('.btn-addrow').click(function() {
			var currentPage = dataTable.page();
			var rowIndex = $(this).attr('id'),
				rowCount = dataTable.data().length - 1,
				insertedRow = dataTable.row(rowCount).data(),
        		tempRow;
			
			dataTable.row.add([
				'','','','','','','','','','','','','','','','','','',''
			]).draw();

			for(var i = rowCount; i > rowIndex; i--){
				tempRow = dataTable.row(i - 1).data();
				dataTable.row(i).data(tempRow);
        		dataTable.row(i - 1).data(insertedRow);
			}

			dataTable.page(currentPage).draw(false);
		});
	});
</script>