<div id="container">
  <div class="badan">
    <h2>Check Out</h2>

    <form action="transaction.php" method="post">
        <div align="center">
            <fieldset>
                <legend>Tujuan Pengiriman</legend>
                <p>
                    <label for="full-name" class="label"> Full Name </label>
                    <input class="input-checkout" required placeholder="Input Name" id="full-name" name="full_name" type="text"/>
                </p>
                <p>
                    <label for="alamat" class="label"> Address </label>
                    <textarea required placeholder="Address" id="address" name="address" type="text"></textarea>
                </p>
                <p>
                    <label for="telpon" class="label"> Phone Number </label>
                    <input class="input-checkout" required placeholder="Phone Number" id="telpon" name="phone_number" type="text"/>
                </p>
            </fieldset>
        </div>
        <div align="center">
            <fieldset>
                <legend>Detail Pesanan</legend>
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
                            <div class="image">
                                <img src="img/<?php echo $data['product_image']; ?>" alt="<?php echo $data['product_name']; ?>">
                            </div>

                            <div class="description">
                                <span><?php echo $data['product_name']; ?></span>
                            </div>

                            <div class="quantity">
                                <span><?php echo $data['amount']; ?></span>
                            </div>
                            <?php
                            $subtotal = $data['product_price']*$data['amount'];
                            $total = $total + $subtotal;
                            ?>
                            <div class="subtotal-price">Rp <?php echo number_format($subtotal,2,',','.'); ?></div>
                        </div>
                <?php
                    }
                    echo "<div class='total-checkout'>Rp ".number_format($total,2,',','.')."</div>";
                }
                ?>
            </fieldset>
        </div>
        <button type="submit">Check Out</a>
    </form>
</div>