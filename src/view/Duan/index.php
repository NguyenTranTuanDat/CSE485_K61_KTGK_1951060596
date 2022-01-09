<?php
require 'view/template/header.php';
//file hiển thị thông báo lỗi
require_once 'view/commons/message.php';
?>
<main>
    <div class="container">
        <div class="row">
            <div class="">
                <p><?php echo isset($_GET['tt']) ? $_GET['tt'] : ''?></p>
            </div>
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Chi tiết Chương trình dự án KTTV BDKH</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=duan&action=add"><button class="btn btn-primary">Thêm người hiến máu</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã dự án</th>
                            <th scope="col">Tên dự án</th>
                            <th scope="col">Lĩnh vực</th>
                            <th scope="col">Nhiệm vụ</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Cơ quan thực hiện</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dan as $da) {
                            $urlEdit =
                            "index.php?controller=duan&action=edit&daid=" . $da['maduan'];
                            $urlDelete =
                            "index.php?controller=duan&action=delete&daid=" . $da['maduan'];
                        ?>
                            <tr>
                                <!-- <th scope="row"><?php echo $da['da_id'] ?></th> -->
                                <td><?php echo $da['maduan'] ?></td>
                                <td><?php echo $da['tenduan'] ?></td>
                                <td><?php echo $da['namthuchien'] ?></td>
                                <td><?php echo $da['linhvuc'] ?></td>
                                <td><?php echo $da['nhiemvu'] ?></td>
                                <td><?php echo $da['coquanthuchien'] ?></td>
                                <td><a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>