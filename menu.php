<?php
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$menuItems = $db->getMenuItems();
?>
<nav class="mainmenu mobile-menu">
    <ul>
        <?php
        foreach ($menuItems as $key => $menuItem) {
            ?>
            <li class="nav-item">
                <a href="<?php echo $menuItem['file_path']; ?>" class="nav-link">
                    <?php echo $menuItem['meno']; ?> </a>
            </li>
            <?php
        }
        ?>
    </ul>
</nav>
