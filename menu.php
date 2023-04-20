<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<?php
include 'function/connect.php';

$sql = "SELECT * FROM pizzas";
$result = $conn->query($sql);

?>
<head><link rel="stylesheet" href='css/style.css'></head>
<div class="product_pizza">
  <?php
  $id = 0;
  while ($row = $result->fetch_assoc()):
    $id++;
    ?>
    <div class="product_item_pizza">
      <img class="product_icon_pizza" src="<?= $row["image"] ?>" alt="">
      <h4 class="product_title_pizza">
        <?= $row["name"] ?>
      </h4>
      <div class="product_text_pizza">
        <?= $row["description"] ?>
      </div>
      <nav class="btn">
      <a href="#" class="btn_pizza add-to-cart-modal" data-id="<?= $id ?>" data-name="<?= $row["name"] ?>" data-price="<?= $row["price"] ?>">Выбрать</a>
      </nav>
    </div>
  <?php endwhile; ?>

  <script>
  $(document).ready(function() {
    let cartItems = {};

    $('.btn_pizza').on('click', function(event) {
      event.preventDefault();
      let id = $(this).data('id');
      let name = $(this).data('name');
      let price = $(this).data('price');
      let img = $(this).closest('.product_item_pizza').find('.product_icon_pizza').attr('src');

      if (!cartItems[id]) {
        cartItems[id] = {
          id: id,
          name: name,
          price: price,
          img: img,
          quantity: 1
        };
      } else {
        cartItems[id].quantity++;
      }

      renderCart();
    });

    $('.close').on('click', function() {
      $('#cart-modal').hide();
    });

    function renderCart() {
      let cartContent = '';
      let totalPrice = 0;

      for (let key in cartItems) {
        let item = cartItems[key];
        totalPrice += item.price * item.quantity;

        cartContent += `
          <div class="cart-item">
            <div class="cart-item-img">
              <img src="${item.img}" alt="${item.name}">
            </div>
            <div class="cart-item-details">
              <div class="cart-item-name">${item.name}</div>
              <div class="cart-item-price">${item.price} руб.</div>
              <div class="cart-item-quantity">${item.quantity}</div>
            </div>
          </div>
        `;
      }

      $('#cart-items').html(cartContent);
      $('#cart-total').text(totalPrice);
      $('#cart-modal').show();
    }
  });
</script>


</div>
