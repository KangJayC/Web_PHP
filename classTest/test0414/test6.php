<!-- HTML5表单 -->
<form enctype="multipart/form-data" action="" method="post">
	<input type="file" name="myFile">
	<input type="submit" name="up" value="上传文件">
</form>
<!-- PHP代码 -->
<?php
	if(isset($_POST['up']))
	{
		if($_FILES['myFile']['type']=="image/gif" )				//判断文件格式是否为GIF
        //if($_FILES['myFile']['type']=="image/gif" || $_FILES['myFile']['type']=="image/jpeg" || $_FILES['myFile']['type']=="image/png")
		{
			if($_FILES['myFile']['error']>0)					//判断上传是否出错
				echo "错误：".$_FILES['myFile']['error'];		//输出错误信息
			else
			{
				$tmp_filename=$_FILES['myFile']['tmp_name'];	//临时文件名
				$filename=$_FILES['myFile']['name'];			//上传的文件名
				$dir="../test0414/test/html/";							//上传后文件的位置
				if(is_uploaded_file($tmp_filename))				//判断是否通过HTTP POST上传
				{
					//上传并移动文件
					if(move_uploaded_file($tmp_filename, "$dir.$filename"))
					{
						echo "文件上传成功！";
						//输出文件大小
						echo "文件大小为：". ($_FILES['myFile']['size']/1024)."KB";
					}
					else
						echo "上传文件失败！";
				}
			}
		}
		else
		{
			echo "文件格式非GIF图片！";
		}
	}
?>