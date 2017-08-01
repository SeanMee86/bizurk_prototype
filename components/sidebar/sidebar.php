<div class="sidebar">
    <ul>
        <li class="sidebar_main"><a href="../dashboard">My Dashboard</a></li>
        <li class="sidebar_main" id="inventory_sidemenu"><a href="../inventory_feature/index.php">Inventory</a>
            <?php if(($_SERVER['PHP_SELF'] === "/bizurk_prototype/inventory_feature/index.php" ||
                $_SERVER['PHP_SELF'] === "/bizurk_prototype/inventory_feature/ship_receive.php" ||
                $_SERVER['PHP_SELF'] === "/bizurk_prototype/inventory_feature/inventory_search.php") &&
                ($_SESSION['privileges']['admin'] || $_SESSION['privileges']['shipping'])){;?>
            <ul>
                <li class="sidebar_sub">History</li>
                <li class="sidebar_sub"><a href="../inventory_feature/ship_receive.php">Updater</a></li>
                <li class="sidebar_sub">New Product</li>
            </ul>
            <?php }; ?>
        </li>
        <li class="sidebar_main">Messages</li>
        <li class="sidebar_main">Update Sales Leads</li>
    </ul>
</div>
<div class="inventory_container">
<div class="product_display"></div>
