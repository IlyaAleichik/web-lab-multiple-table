
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>�������� ������ ������� ���������</title>
<style>
table.second.td {  width: 250px; margin: 0 auto;} 
.second.td td { width: 10%; text-align: center; border: 1px solid #cdc513; }</style> 
</head>
<body>
<?
echo "<table class='second td'>";
for ($tr =1; $tr <= $rows; $tr ++)
{
echo "<tr>"; 
  if(($tr == '1')){  $b ='<b>'; $end_b ='</b>'; } 
  for($td =1;$td <=$cols; $td++)
  {
  if(($tr != '1') &&  ($td == '1')){  $b ='<b>'; $end_b ='</b>'; } 
  echo "<td>" . $b .$tr * $td. $end_b ."</td>\n"; 
  if(($tr != '1') &&  ($td == '1')){  $b =''; $end_b =''; } 
  }
  $b =''; $end_b ='';
echo "</tr>\n";
}   
echo "</table>";
?>
</body>
</html>



foreach(glob('/path/to/dir/*.*') as $file)
{
    if(preg_match('~\\.php$~iu', $file))
        echo '<div style="color: green">', $file, '</div>';
    elseif(preg_match('~\\.txt$~iu', $file))
        echo '<div>', mb_substr(file_get_contents($file), 0, 30, 'UTF-8'), '</div>';
    elseif(preg_match('~\\.(?:jpe?g|gif|bmp)$~iu', $file))
        echo '<div>(��������)</div>';
    else
        echo '<div>����������� �����</div>';
}