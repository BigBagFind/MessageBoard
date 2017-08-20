<!DOCTYPE html>
<html>
<head>
	<title>我的留言版</title>
</head>
<body>
	<center>
		<?php 
		 # 倒入导航栏
		 include('navigation.php')
		?>

		<h3>删除留言</h3>
		<?php
		# 执行删除指定id的留言信息

			# 获取删除留言的id
			$id = $_GET['id'];

			# 获取文本内的留言信息
			$info = file_get_contents('messageBoard.txt');

			# 获取文本内的留言信息
			$messageList = explode('@@@', $info);

			# 使用unset删除指定id的留言
			unset($messageList[$id]);

			# 还原留言信息为字符串
			$newInfo = implode('@@@', $messageList);

			# 写入留言文件
			file_put_contents('messageBoard.txt', $newInfo);
			echo "删除成功";
		?>
		
	</center>

</body>
</html>>
