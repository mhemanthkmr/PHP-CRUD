<pre>
<?php 

$con = mysqli_connect("localhost","mhemanthkmr","hemanth123" ,"phpcrud");
if($con)
{
    // print_r($con);
    echo "Successs";
}
else 
{
    echo "Failed";
}
$query = "SELECT * FROM student";
$query_run = mysqli_query($con,$query);
// $row = mysqli_fetch_array($query_run);
// print_r($row);
$count_query = "SELECT COUNT(id) FROM student";
$query_run = mysqli_query($con,$query);
$count = mysqli_query($con,$count_query);
echo $query_run['num_rows'] ;
?>
</pre>