<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>

<div class="container" style="width: 100%">
	<div class="row">
		

    <div class="col-md-12">
      <h4>Danh Sach Tin Dang</h4>
      <div class="table-responsive">


        <table id="mytable" class="table table-bordred table-striped">

         <thead>

           <th><input type="checkbox" id="checkall" /></th>
           <td class="image">Hinh Anh</td>
           <td class="description">Description</td>
           <th>Edit</th>

           <th>Delete</th>
         </thead>
         <tbody>
           <?php foreach ($list as $row):?>
             <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td class="cart_description">
                <a href=""><img  height="50"  src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt=""></a>
              </td>
              <td class="cart_description">
                <b> <a href=""> <?php echo $row->product_name?></b>
              </td>
              <td> <a class="tipS" title="Chỉnh sửa" href="<?php echo user_url('profile/edit/'.$row->id)?>">
              <img src="<?php echo public_url('admin/images')?>/icons/color/edit.png">
            </a></td>
              <td><a class="tipS verify_action" title="Xóa" href="<?php echo user_url('profile/del/'.$row->id)?>">
                <img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
              </a></td>
            </tr>
          <?php endforeach;?>








        </tbody>
        
      </table>

      <div class="clearfix"></div>
      <ul class="pagination pull-right">
        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
      </ul>

    </div>

  </div>
</div>
</div>




<script type="text/javascript">
  $(document).ready(function(){
    $("#mytable #checkall").click(function () {
      if ($("#mytable #checkall").is(':checked')) {
        $("#mytable input[type=checkbox]").each(function () {
          $(this).prop("checked", true);
        });

      } else {
        $("#mytable input[type=checkbox]").each(function () {
          $(this).prop("checked", false);
        });
      }
    });
    
    $("[data-toggle=tooltip]").tooltip();
  });
</script>