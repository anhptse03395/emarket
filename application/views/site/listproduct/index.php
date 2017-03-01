<html >


<head>

	<link rel="stylesheet" type="text/css" href="<?php echo public_url('admin/crown') ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo public_url('admin') ?>/css/css.css" media="screen" />

</head>


<body >
	



	<div id="left_content" >
		<?php $this ->load->view('site/listproduct/left') ;  ?>
	</div>
	<div id ="rightSide">
		<div id="main_product" class="wrapper" width="100%"	>
			<div class="widget">
				<div class="title">
					
					<h6>
						Danh sách sản phẩm			
					</h6>
					<div class="num f12">Số lượng: <b></b></div>
				</div>

				<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">

					<thead class="filter"><tr><td colspan="6">
						<form method="get" action="<?php echo user_url('listproduct')?>" class="list_filter form">
							<table width="80%" cellspacing="0" cellpadding="0"><tbody>

								<tr>
									<td style="width:40px; color: red" class="label"><label for="filter_id">Mã số</label></td>
									<td class="item"><input type="text" style="width:40px;" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>

									<td style="width:40px;" class="label"><label for="filter_id">Tên</label></td>
									<td style="width:155px;" class="item"><input type="text" style="width:155px;" id="filter_iname" value="<?php echo $this->input->get('name')?>" name="name"></td>

									<td style="width:60px;" class="label"><label for="filter_status">Thể loại</label></td>
									<td class="item">
										<select name="catalog">
											<option value=""></option>
											<!-- kiem tra danh muc co danh muc con hay khong -->
											<?php foreach ($catalogs as $row):?>
												<?php if(count($row->subs) > 1):?>
													<optgroup label="<?php echo $row->name?>">
														<?php foreach ($row->subs as $sub):?>
															<option value="<?php echo $sub->id?>" <?php echo ($this->input->get('catalog') == $sub->id) ? 'selected' : ''?>> <?php echo $sub->name?> </option>
														<?php endforeach;?>
													</optgroup>
												<?php else:?>
													<option value="<?php echo $row->id?>" <?php echo ($this->input->get('catalog') == $row->id) ? 'selected' : ''?>><?php echo $row->name?></option>
												<?php endif;?>
											<?php endforeach;?>
										</select>
									</td>

									<td style="width:150px">
										<input type="submit" value="Lọc" class="button blueB">
										<input type="reset" onclick="window.location.href = '<?php echo user_url('listproduct')?>'; " value="Reset" class="basic">
									</td>

								</tr>
							</tbody></table>
						</form>
					</td></tr></thead>

					<thead>
						<tr>
							<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"> Hinh anh</td>
							
							<td>Tên</td>
						
							
						
						</tr>
					</thead>

					<tfoot class="auto_check_pages">
						<tr>
							<td colspan="6">
								<div class="list_action itemActions">
									
								</div>

								<div class="pagination">
									<?php echo $this->pagination->create_links()?>
								</div>
							</td>
						</tr>
					</tfoot>

					<tbody class="list_item">
						<?php foreach ($list as $row):?>
							<tr class="row_9">
								
								<td>
									<div class="image_thumb">
										<img height="100" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
										<div class="clear"></div>
									</div>

									<a target="_blank" title="" class="tipS" href="">
										<b><?php echo $row->name?></b>
									</a>

								
								</td>
								<td class="textC"><?php echo $row->name;  ?></td>

								
							</tr>
						<?php endforeach;?>
					</tbody>

				</table>
			</div>

		</div>
		

	</div>

	







	<link href="<?php echo public_url('user')?>/css/main.css" rel="stylesheet">
	<script src="<?php echo public_url('user')?>/js/jquery.js"></script>
	<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo public_url('user') ?>/js/main.js"></script>

</body>
</html>