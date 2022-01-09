<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8 ms-atuo me-auto">
                <?php
                if(isset($_GET['error'])){
                    echo "<h4>Lỗi gì đó hãy kiểm tra lại!</h4>";
                }else{
                    header("location: index.php?controller=duan&action=index");
                }
                ?>
            </div>
        </div>
    </div>
</main>