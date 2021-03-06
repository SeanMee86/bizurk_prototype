<div class="sidebar">
    <ul>
        <li class="sidebar_main"><a href="../dashboard">My Dashboard</a></li>
        <li class="sidebar_main" id="inventory_sidemenu"><a href="../inventory_main/index.php">Inventory</a>
            <ul>
            <?php
            $url = $_SERVER['PHP_SELF'];
            $base_url = "/bizurk_prototype/";
            $privileges = $_SESSION['privileges'];
            if(($url === $base_url."inventory_main/index.php" ||
                $url === $base_url."ship_receive/index.php" ||
                $url === $base_url."inventory_search/index.php" ||
                $url === $base_url."history_feature/index.php" ||
                $url === $base_url."update_product/index.php" ||
                $url === $base_url."add_product/index.php" ||
                $url === $base_url."delete_product/index.php" ||
                $url === $base_url."spread_sheet/index.php")){
            ?>
                <li class="sidebar_sub"><a href="../inventory_main/index.php">Inventory Search</a></li>
                <li class="sidebar_sub"><a href="../spread_sheet/index.php">Spread Sheet View</a></li>
                <li class="sidebar_sub"><a href="../history_feature/index.php">History</a></li>
                <?php
                    if($privileges['admin'] || $privileges['shipping']){
                ?>
                    <li class="sidebar_sub"><a href="../ship_receive/index.php">Shipping/Receiving</a></li>
                    <li class="sidebar_sub"><a href="../delete_product/index.php">Delete Product</a></li>
                    <li class="sidebar_sub"><a href="../add_product/index.php">Add/Update Product</a></li>
                    <?php };
                    }; ?>
            </ul>
        </li>
        <li class="sidebar_main">Messages</li>
        <li class="sidebar_main">Update Sales Leads</li>
    </ul>
</div>
<div class="inventory_container" <?php if($url === $base_url."history_feature/index.php"){echo 'style="max-width:100%"';};?> >
    <?php
    if($url !== $base_url."history_feature/index.php" &&
       $url !== $base_url."spread_sheet/index.php" ){?>
<div class="product_display"></div>
    <?php }; ?>
