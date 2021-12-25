<?php
 include "template/header.php"
;
?>




<form action="3str.php?id=<?= $_GET['id'] ?>" method="POST">
	<input name="name"value="<?= $user['name'] ?>">
	<input name="price"value="<?= $user['age'] ?>">
	<input name="img"value="<?= $user['salary'] ?>">
    <input type="submit">
</form>

<?php
	$id = $_GET['id'];
?>

<?php
	$query = "SELECT * FROM kfc_products WHERE id=$id";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($result);
?>



<table>
  <tr>
    <td>Идентификатор</td>
    <td>Наименование</td>
    <td>Цена</td>
  </tr>
  <?php
    $sql = mysqli_query (  'SELECT `ID`, `Name`, `Price` FROM `kfc_products`');
    while ($result = mysqli_fetch_array($sql)) {
      echo "<tr><td>{$result['ID']}</td>
      <td>{$result['Name']}</td>
      <td>{$result['Price']} ₽</td>
      </tr>";
    }
  ?>
</table>

<?php







?>
         