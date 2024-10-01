<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            ?>
            <!-- Logged in user view -->
            <div class="card shadow-sm p-4">
                <h3 class="text-center mb-4">Xin chào, <?=$user?></h3>
                <div class="list-group">
                    <a href="index.php?act=quenmk" class="list-group-item list-group-item-action">Quên mật khẩu?</a>
                    <a href="index.php?act=edit_taikhoan" class="list-group-item list-group-item-action">Cập nhật thông tin tài khoản</a>
                    <a href="index.php?act=mybill" class="list-group-item list-group-item-action">Đơn hàng của tôi</a>
                    <?php if($role == 1){ ?>
                        <a href="admin.php" class="list-group-item list-group-item-action">Trang quản trị</a>
                    <?php } ?>
                    <a href="index.php?act=thoat" class="list-group-item list-group-item-action">Đăng xuất</a>
                </div>
            </div>

            <?php
            } else {
            ?>
            <!-- Login form view -->
            <div class="card shadow-sm p-4">
                <h3 class="text-center mb-4">ĐĂNG NHẬP</h3>
                <form action="index.php?act=dangnhap" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên người dùng:</label>
                        <input type="text" class="form-control" name="user" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu:</label>
                        <input type="password" class="form-control" name="pass" required>
                    </div>
                    <div class="text-end mb-3">
                        <a href="index.php?act=quenmk" class="text-decoration-none">Quên mật khẩu?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="dangnhap" class="btn btn-primary btn-block">ĐĂNG NHẬP</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky" class="text-decoration-none">Đăng kí ngay</a></p>
                    </div>
                </form>
            </div>
            <?php } ?>
            <!-- Notification section -->
            <h2 class="text-center text-danger mt-3">
                <?php
                    if(isset($thongbao) && ($thongbao != "")){
                        echo $thongbao;
                    }
                ?>
            </h2>
        </div>
    </div>
</div>
