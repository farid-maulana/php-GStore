<div id="container">
  <div class="badan">
    <h2>Keranjang Belanja Anda</h2>

    <?php
    $sid = $_SESSION['username'];
    $subtotal = 0;
    $total = 0;
    $query = "SELECT p.product_name, p.product_image, p.product_price, c.id, c.amount
              FROM product p INNER JOIN cart c
              ON c.product_id = p.product_id
              WHERE c.session_id = '$sid'";
    $result = mysqli_query($connect, $query); 
    $row = mysqli_num_rows($result);
    if ($row == 0) {
      echo "<h1 align='center'>TIDAK ADA PESANAN</h1>";	
    } else {			
      while ($data = mysqli_fetch_array($result)) {
        $id = $data['id'];
		?>
        <!-- Product #1 -->
        <div class="item">
          <div class="buttons">
            <a href="delete-from-cart.php?id=<?php echo $id; ?>" title="Delete <?php echo $data['product_name']; ?>"><span class="delete-btn"></span></a>
          </div>
          
          <div class="image">
            <img src="img/<?php echo $data['product_image']; ?>" alt="<?php echo $data['product_name']; ?>">
          </div>

          <div class="description">
            <span><?php echo $data['product_name']; ?></span>
          </div>

          <div class="quantity">
            <a href="update-amount.php?act=minus&id=<?php echo $id; ?>" class="btn minus-btn" type="button" name="button">
              <img src="minus.svg" alt="" />
            </a>
            <span><?php echo $data['amount']; ?></span>
            <a href="update-amount.php?act=plus&id=<?php echo $id; ?>" class="btn plus-btn" type="button" name="button">
              <img src="plus.svg" alt="" />
            </a>
          </div>
          <?php
          $subtotal = $data['product_price']*$data['amount'];
          $total = $total + $subtotal;
          ?>
          <div class="subtotal-price">Rp <?php echo number_format($subtotal,2,',','.'); ?></div>
        </div>
    <?php
      }
      echo "<div class='total-price'>Rp ".number_format($total,2,',','.')."</div>";
      echo "<a class='checkout-btn' href='index.php?menu=checkout'>Check Out</a>";
    }
    ?>
  </div>
</div>