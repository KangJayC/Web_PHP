<!-- HTML5�� -->
<form enctype="multipart/form-data" action="" method="post">
	<input type="file" name="myFile">
	<input type="submit" name="up" value="�ϴ��ļ�">
</form>
<!-- PHP���� -->
<?php
	if(isset($_POST['up']))
	{
		if($_FILES['myFile']['type']=="image/gif" )				//�ж��ļ���ʽ�Ƿ�ΪGIF
        //if($_FILES['myFile']['type']=="image/gif" || $_FILES['myFile']['type']=="image/jpeg" || $_FILES['myFile']['type']=="image/png")
		{
			if($_FILES['myFile']['error']>0)					//�ж��ϴ��Ƿ����
				echo "����".$_FILES['myFile']['error'];		//���������Ϣ
			else
			{
				$tmp_filename=$_FILES['myFile']['tmp_name'];	//��ʱ�ļ���
				$filename=$_FILES['myFile']['name'];			//�ϴ����ļ���
				$dir="../test0414/test/html/";							//�ϴ����ļ���λ��
				if(is_uploaded_file($tmp_filename))				//�ж��Ƿ�ͨ��HTTP POST�ϴ�
				{
					//�ϴ����ƶ��ļ�
					if(move_uploaded_file($tmp_filename, "$dir.$filename"))
					{
						echo "�ļ��ϴ��ɹ���";
						//����ļ���С
						echo "�ļ���СΪ��". ($_FILES['myFile']['size']/1024)."KB";
					}
					else
						echo "�ϴ��ļ�ʧ�ܣ�";
				}
			}
		}
		else
		{
			echo "�ļ���ʽ��GIFͼƬ��";
		}
	}
?>