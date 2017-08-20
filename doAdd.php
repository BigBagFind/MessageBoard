<!DOCTYPE html>
<html>
<head>
	<title>我的留言版</title>
</head>
<body>
	<center>
		<?php 
		 # 导入导航栏
		 include('navigation.php')
		?>

		<h3>添加留言</h3>
		
		<?php 
			# 从post表单中取出提交的字段
			$title = $_POST['title'];
			$author = $_POST['author'];
			$content = $_POST['content'];
			$ip = $_SERVER['REMOTE_ADDR'];

			# 当前提交的时间
			$addtime = time();

			# 按照##XX##XX格式拼接字段
			$message = $title.'##'.$author.'##'.$content.'##'.$ip.'##'.$addtime.'@@@';

			# 取出本地留言版已有的内容
			$info = file_get_contents('messageBoard.txt');

			# 覆盖留言版文本内容
			file_put_contents('messageBoard.txt', $info . $message);

			# 成功提示
			echo '留言成功!谢谢！';
		?>

	</center>

</body>
</html>>





<?php




?>