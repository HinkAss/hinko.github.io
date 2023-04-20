<?php

session_start();

$cart = $_SESSION['cart'] ?? [];

?>

<div class="container">
  <h2>Корзина</h2>
  <table>
    <thead>
      <tr>
        <th>Наименование</th>
        <th>Цена</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cart as $item): ?>
        <tr>
          <td>
            <?php echo $item['name']; ?>
          </td>
          <td>
            <?php echo $item['price']; ?> руб.
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>