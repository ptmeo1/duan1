<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">ĐĂNG KÝ TÀI KHOẢN</h3>
                    <form action="index.php?act=dangky" method="post">
                        
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="username" name="user" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" class="form-control" id="password" name="pass" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">tel:</label>
                            <input type="text" class="form-control" id="password" name="tel" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">address:</label>
                            <input type="text" class="form-control" id="password" name="address" required>
                        </div>

                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">Tôi đồng ý với các điều khoản bảo mật cá nhân</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="dangky">Đăng ký</button>
                            <button type="reset" class="btn btn-secondary">Nhập lại</button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <p>Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập ngay</a></p>
                        </div>
                        
                        <h2 class="text-center text-danger mt-3">
                        <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                        ?>
                        </h2>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
