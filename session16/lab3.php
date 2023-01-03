<?php 
// bat dau doc noi dung ben trong
	ob_start();
?>
<h1>hello world </h1>
<?php 
	$str = "<h1>Hello 2022</h1>";
	echo $str;
 ?>
<!--  doc noi dung ben tren va gan vao bien $contents (chu khong hien thi len man hinh -->
 <?php $content = ob_get_contents(); ?>
 <!-- lam rong bo dem : bo dem co gì thi se hien thi lên -->
 <?php ob_get_clean(); ?>
  <!-- hien hi noi dung cua bien content  -->
  <?php echo $content; ?>