<style>
    /* Title styling */
.formtitle h1 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

/* Table container styling */
.formdsloai {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
    text-align: center; /* Ensures content in each column is centered */
}

/* Ensure all columns take up equal space */
table th, table td {
    width: 25%; /* Each column will take 25% of the table width */
}

table th {
    background-color: #435ebe;
    color: white;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Checkbox alignment */
td:first-child {
    text-align: center;
    width: 5%; /* Ensures that the checkbox column is narrower */
}

/* Button styling inside the table */
table input[type="button"] {
    padding: 5px 10px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

table input[type="button"]:hover {
    background-color: #0056b3;
}

/* Bottom action buttons styling */
.pt-2 {
    text-align: center;
    margin-top: 20px;
}

.pt-2 input[type="button"] {
    padding: 10px 20px;
    margin-right: 10px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.pt-2 input[type="button"]:hover {
    background-color: #0056b3;
}

/* "Nhập thêm" button with a different color */
.pt-2 a input[type="button"] {
    background-color: #28a745;
}

.pt-2 a input[type="button"]:hover {
    background-color: #218838;
}

/* Margin between elements */
.row.margin10 {
    margin-bottom: 15px;
}

</style>
<div class="row">
            <div class="row formtitle margin10">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="GO">
            </form>
            <div class="row formcontent">
                <div class="row margin10 formdsloai">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>

                        <?php
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=".$id;
                                $xoasp = "index.php?act=xoasp&id=".$id;
                                $imgpath = "./upload/".$img;
                                if(is_file($imgpath)){
                                    $img = "<img src ='".$imgpath."' height='80'>";
                                }
                                else{
                                    $img = "Không có hình";
                                }
                                echo '
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$img.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$luotxem.'</td>
                                        <td ><center class="d-flex" ><a class="pe-2"  href="'.$suasp.'"><input  type="button" value="Sửa"></a>  <a  href="'.$xoasp.'"><input class="bg-danger" type="button" value="Xóa"></center></td></a>
                                    </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="pt-2">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>