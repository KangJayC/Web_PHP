<style type="text/css">
table,div,td{
    text-align:center;
}
table{
    margin:0 auto;
}
p{
    font-size:18px;
    color:#FF0000;
}
</style>
<form name=fr1 method=post>
    <table border=1>
    <tr>
        <td><div>ѧ��</div></td>
        <td><div>����</div></td>
        <td><div>�ɼ�</div></td>
    </tr>
<?php
    for($i=0;$i<5;$i++)  //ѭ�����ɱ����ı���
    {
?>
    <tr>
        <td><input type=text name="XH[]"></td>
        <td><input type=text name="XM[]"></td>
        <td><input type=text name="CJ[]"></td>
    </tr>
<?php }?>
        <tr>
            <td colspan="3">
                <input type="submit" name="bt_stu" value="�ύ">
            </td>
        </tr>
    </table>
</form>
<p align=center>ע�⣺ѧ��ֵ�����ظ�</p><br/>
<!--- ����������� -->
<?php
    if(isset($_POST['bt_stu']))  //�жϰ�ť�Ƿ񱻰���
    {
        $XH=$_POST['XH'];  //��������ѧ�ŵ�ֵ��������$XH
        $XM=$_POST['XM'];  //��������������ֵ��������$XM
        $CJ=$_POST['CJ'];  //�������гɼ���ֵ��������$CJ
        array_multisort($CJ,$XH,$XM);  //������������������$CJΪ��Ҫ����
        for($i=0;$i<count($XH);$i++)
            $sum[$i]=array($XH[$i],$XM[$i],$CJ[$i]);  //�����������ֵ���һ����ά����$sum
		echo "<div>�����ɼ�������:</div>";
		//�����ײ�
        echo "<table border=2><tr><td>ѧ��</td><td>����</td><td>�ɼ�</td></tr>";
        foreach($sum as $value)  //ʹ��foreachѭ����������$sum
        {
            list($stu_number,$stu_name,$stu_score)=$value;//ʹ��list()�����������е�ֵ��������
			//����������
            echo "<tr><td>$stu_number</td><td>$stu_name</td><td>$stu_score</td></tr>";
        }
        echo "<table><br/>";  //���β��
        reset($sum);  //����$sum�����ָ��
        while(list($key,$value)=each($sum))  //ʹ��whileѭ����������
        {
            list($stu_number,$stu_name,$stu_score)=$value;
            if($stu_number==181101)  //��ѯ�Ƿ���ѧ��Ϊ181101��ֵ
            {
                echo "<p align=center>";
                echo $stu_number."������Ϊ: ".$stu_name.",";
                echo "�ɼ�Ϊ��".$stu_score;
                break;  //�ҵ���ѭ������
            }
        }
    }
?>