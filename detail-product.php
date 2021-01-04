<div id="container">
    <div class="badan">

        <?php
        $product_id = $_GET['id'];
        $query = "SELECT * FROM product WHERE product_id = $product_id";
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_array($result)) {
        ?>
                <h2><?php echo $data['product_name']; ?></h2>
                <div class="item-detail">                    
                    <div class="detail-img">
                        <img src="img/<?php echo $data['product_image']; ?>" alt="<?php echo $data['product_name']; ?>">
                    </div>

                    <div class="detail-desc">
                        <p><?php echo nl2br(htmlspecialchars($data['product_desc'])); ?></p>
                        <h3>Rp <?php echo number_format($data['product_price'],2,',','.'); ?></h3>
                        <?php
                        if (isset($_SESSION['status'])) {
                        ?>
                            <a class="tombol tombol-beli" href="insert-to-cart.php?id=<?php echo $data['product_id']; ?>">Beli</a>
                        <?php
                        } else {
                        ?>
                            <a class="tombol tombol-beli" href="#" onclick="alert('Anda belum login')">Beli</a>
                        <?php
                        }
                        ?>
                    </div>
        <?php
            }
        }
        ?>
    </div>
</div>