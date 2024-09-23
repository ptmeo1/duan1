<div class="page-heading">
                <h3>Danh sách danh mục</h3>
            </div>
            <div class="row formcontent">
                <div class="row margin10 formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>

                        <?php
                            foreach($listcate as $cate){
                                extract($cate);
                               
                                echo '
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$category_id.'</td>
                                        <td>'.$category_name.'</td>
                                        <td><center><a href=""><input type="button" value="Sửa"></a>  <a href=""><input type="button" value="Xóa"></center></td></a>
                                    </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="pt-2">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>