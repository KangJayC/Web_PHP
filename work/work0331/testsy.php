<?php
    echo "<form method=post>";
    for($i=1;$i<6;$i++)
    {
        echo "ѧ��".$i."�ĳɼ�:<input type=text name='stu[]'><br/>";
    }
    echo "<input type=submit name=bt value='�ύ'>";
    echo "</form>";
    if(isset($_POST['bt']))
    {
        $sum=0;
        $k=0;
        $stu=$_POST['stu'];
        $num=count($stu);
        echo "������ĳɼ���:<br/>";
        foreach($stu as $score)
        {
            echo $score."<br/>";
            $sum=$sum+$score;
            if($score<60)
            {
                $sco[$k]=$score;
                $k++;
            }
        }
        echo "<br/>����60�ֵĳɼ���:<br/>";
        for($k=0;$k<count($sco);$k++)
            echo $sco[$k]."<br/>";
        $average=$sum/$num;
        echo"<br/>ƽ����Ϊ:$average";
}
?>
