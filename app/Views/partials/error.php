<?php
if (session('validation')) {
    ?>
    <div class="alert alert-danger " >
        <?php echo session('validation'); ?>
    </div>
    <br>
    <?php
}
?>