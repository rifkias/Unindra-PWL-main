<?php 
  $uri = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<form action="<?php echo $uri ?>" method="get">
    <input type="hidden" name="page" value="whileLoop">
    <input type="text" name="digit">
    <button type="submit">Submit</button>
</form>
<?php 
if(isset($_GET['digit']) && (@$_GET['digit'] !== null && @$_GET['digit'] !== '') ){
    $max = $_GET['digit'];
}else{
    $max = 10;
}
if($max >= 100){
  echo "<script>alert('Max Greater Than 100 ')</script>";
  $max = 10;
}
echo "var max : $max <br>";
$i = 1;
while ($i <= $max) {
  echo $i.'<br>';
  $i++;
}