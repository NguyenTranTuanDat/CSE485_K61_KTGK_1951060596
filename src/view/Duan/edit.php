<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div style="color: red">
                <?php echo $error; ?>
            </div>
            <div class="col-md-8 ms-auto me-auto">
                <h4>Sửa Chương trình dự án KTTV BDKH</h4>
                <form class="row g-3 needs-validation" method="post" action="" novalidate>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Mã dự án</label>
                        <input type="text" class="form-control" name="maduan" id="validationCustom01" readonly value="<?php echo isset($_GET['daid']) ? $_GET['daid'] : $DA['maduan']?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Tên dự án</label>
                        <input type="text" class="form-control" name="tenduan" id="validationCustom01" value="<?php echo isset($_POST['tenduan']) ? $_POST['tenduan'] : $DA['tenduan']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Thời gian</label>
                        <input type="text" class="form-control" name="namthuchien" id="validationCustom02" value="<?php echo isset($_POST['namthuchien']) ? $_POST['namthuchien'] : $DA['namthuchien']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Lĩnh vực</label>
                        <input type="text" class="form-control" name="linhvuc" id="validationCustom02" value="<?php echo isset($_POST['linhvuc']) ? $_POST['linhvuc'] : $DA['linhvuc']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Nhiệm vụ</label>
                        <input type="text" class="form-control" name="nhiemvu" id="validationCustom02" value="<?php echo isset($_POST['nhiemvu']) ? $_POST['nhiemvu'] : $DA['nhiemvu']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Cơ quan thực hiện</label>
                        <input type="text" class="form-control" name="coquanthuchien" id="validationCustom02" value="<?php echo isset($_POST['coquanthuchien']) ? $_POST['coquanthuchien'] : $DA['coquanthuchien']?>" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" name="submit" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>