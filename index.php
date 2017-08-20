<!DOCTYPE html>
<html>
<head>
	<title>我的留言版</title>
</head>
<body>
	<center>
		<?php 
		 # 导入自定义导航栏
		 include('navigation.php')
		?>

		<h3>添加留言</h3>
		
		<!-- 添加留言表单 -->
		<!-- table样式居中 -->
		<form action="doAdd.php" method="POST">
			<table width="400"  cellpadding="4">
				<tr>
					<td align="right">标题：</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td align="right">留言者：</td>
					<td><input type="text" name="author"></td>
				</tr>
				<tr>
					<td align="right" valign="top">留言内容：</td>
					<td><textarea name="content" rows="5" cols="30"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="提交">&nbsp&nbsp&nbsp&nbsp
						<input type="reset" value="重置">
					</td>
				</tr>
			</table>
		</form>

	</center>

</body>
</html>>





<?php




?>