<?php
/* @var $this yii\web\View */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<div id="chon-demo">
<h1>demo1/index</h1>
<select id="chon" name="chon" onchange="onchan(this.value)">
	<option value="0">-chon-</option>

	<option value="1">hiển thị 1</option>

	<option value="2">hiển thị 2</option>
	<option value="3">hiển thị 3</option>

	
</select>
<br/>
<input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

<div id="demo">
<?php 
  foreach ($data as $key => $value) {
  
 ?>
	<p><?php echo $value['TenT2']; ?></p>
	<?php } ?>

</div>
</div>
<script>
		var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/";


function onchan(val)

{

 $.ajax({
        url : url1+"demo1/limit",// gửi ajax đến file result.php
        type : "post",
        data:{id:val}, // chọn phương thức gửi là post
        success : function (data){
         $("#chon-demo").html($(data).find('#chon-demo'));
       }
  
});

}

</script>