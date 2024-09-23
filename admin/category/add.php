<div class="row">
<div class="page-heading">
                <h3>Quản lý danh mục</h3>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row margin10">
                        Mã loại <br>
                        <input type="text" name="category_id" disabled>
                    </div>
                    <div class="row margin10">
                        Tên loại <br>
                        <input type="text" name="category_name">
                    </div>
                    <div class="pt-2">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>