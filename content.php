<div class="container">
    <div style="height: 30px;">
        <!-- Halaman Depan -->
    </div>
</div>
<?php
$hal = $_GET['hal'];
if (!empty($hal)) {
    include_once $main[$hal];
} else {
    include_once "home.php";
}
?>