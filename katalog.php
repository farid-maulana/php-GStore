<div id="container">
    <div class="badan">
        <h2>Katalog Produk</h2>

        <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_array($result)) {
        ?>
                <div class="list-produk">
                    <img src="img/<?php echo $data['product_image']; ?>" alt="<?php echo $data['product_name']; ?>">
                    <h4><?php echo $data['product_name']; ?></h4>
                    <h5>Rp <?php echo number_format($data['product_price'],2,',','.'); ?></h5>

                    <a class="tombol tombol-detail" href="index.php?menu=detail&id=<?php echo $data['product_id']; ?>">Detail</a> 
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