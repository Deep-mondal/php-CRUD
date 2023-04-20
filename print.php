<?php
require('');
$conn=mysqli_connect("localhost","root","","intrenship") or die("404");
$result=mysqli_query($conn,"SELECT FROM regn");
if(mysqli_num_rows($result)>0){
    $html.='<table>';
        $html.='<tr><th>Name</th><th>Phone</th><th>City</th></tr>';
        while($row=mysqli_Fetch_assoc($res)){
            $html.='<tr><td>.$row['NAME']</td><td>.$row['NAME']</td><td>.$row['NAME']</td></tr>';
        }
    $html.='</table>';
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$fie=time().'.pdf';
$mpdf->output($file,'D');
?>