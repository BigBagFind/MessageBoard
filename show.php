<!DOCTYPE html>
<html>
<head>
	<title>我的留言版</title>
	<script type="text/javascript">

		// 确认删除提示框
		function js_doDel(id) {
			if (confirm('确定要删除吗?')) {
			    // 重定向到指定删除页面
				window.location='del.php?id=' + id;
			}
		}
	</script>
</head>
<body>
	<center>
		<?php 
		 # 导入导航栏
		 include('navigation.php')
		?>

		<h3>查看留言</h3>

		<table border="1" width="700">
			<tr>
				<th>留言标题</th>
				<th>留言人</th>
				<th>留言内容</th>
				<th>IP地址</th>
				<th>留言时间</th>
				<th>操作</th>
			</tr>
			<?php 
			// 获取留言信息，解析后输出到表格中

				# 从留言txt中获取留言信息
				$info = file_get_contents('messageBoard.txt');

				# 去除留言内容最后的三个@@@符号
				# rtrim 字符串右侧修剪
				$info = rtrim($info, '@');

				# 以@@@符号拆分留言信息，拆分成留言数组
					$messageList = explode("@@@", $info);

					# 遍历留言数组，对每条留言做再次解析
					# 
					foreach ($messageList as $key => $messageStr) {
						$messageArray = explode('##', $messageStr);
						echo "<tr>";
						echo "<td>{$messageArray[0]}</td>";
						echo "<td>{$messageArray[1]}</td>";
						echo "<td>{$messageArray[2]}</td>";
						echo "<td>{$messageArray[3]}</td>";
						echo "<td>".date('Y-m-d H:i:s',$messageArray[4])."</td>";

						# 获取删除的对应id-> $Key
						// echo "<td> <a href='del.php?id={$key}'>删除<a\> </td>";
						echo "<td> <a href='javascript:js_doDel({$key})'>删除<a\> </td>";
						
						echo "<tr\>";
				}
			?>
		</table>

	</center>

</body>
</html>>
