<!-- Cấu trúc mảng
key   key1     key2    key1     key2
value value1   value2  value1   value2
-key dùng dể phân biệt các phân tử mảng
-value giá trị phân tử mảng
-(key, value)là cặp tt đặc trưng của mỗi phần tử trong mảng
$myarray = array('key1'=>'value 1','key2 ==> value 2')
chú ye: key đc taoh nên bổi giá trị của chuỗi hoặc số nguyên -->-
<style>
    table,
    th,
    td {
        border: 1px solid;
    }

    .loader {
        border: 16px solid #f3f3f3;
        /* Light grey */
        border-top: 16px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 12px;
        height: 12px;
        animation: spin 0.1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<?php
$error = array();
#$list_odd = array(1, 2, 3);là viết tắt cho $list_odd = array(1 ==> 1,3 ==>  2,3 ==>  3);
$list_odd = array(1, 2, 3);
echo "<pre>";
print_r($list_odd);
echo "</pre>"; ?>
<?php
// tạo mảng vs danh sách khàng
$info = array(
    'id' => 'ungnhodanh',
    'name' => 'danh ung',
    'pass' => 'danhtamxuan',
);
echo "<pre>";
print_r($info);
echo "</pre>";
// THÊM PHẦN TỬ CHO MẢNG
// $info = array(
//     'id' => 'ungnhodanh',
//     'name' => 'danh ung',
//     'pass' => 'danhtamxuan',
// );
// MUỐN THÊM PHẦN TỬ KEY XÁC ĐỊNH THÌ
// $['key muốn thêm']='value muốn thêm';
// $list_odd = array(1, 2, 3);
// THÊM PHẦN TỬ KEY MẶC ĐỊNH
// $list_odd[] = 11;
#lưu trữ thêm số đt vào $info
$info['phone'] = '0905628930';
#thêm phần tử có key mặc định(viết tắt)
$list_odd[] = '11';
#sau khi thêm phần tử vào thì echo lại để xuất dữ liệu
echo "<pre>";
print_r($info);
print_r($list_odd);
echo "</pre>";
#LẤY GIÁ TRỊ MẢNG
#cách lấy và xuất dữ liệu key trong mảng ta có 
echo $info['name'];
#cách lấy số nguyên tố đầu tiên 
echo $list_odd[0];
#CẬP NHẬP CHUỔI THÔNG TIN MẢNG
// $info = array(
//     'id' => 'ungnhodanh',
//     'name' => 'danh ung',
//     'pass' => 'danhtamxuan',
// );
$info['name'] = 'danh ưng';
echo "<pre>";
print_r($info);
echo "</pre>";
#MẢNG ĐA CHIỀU
$LIST_USER = array(
    1 => array(
        'id' => '1',
        'name' => 'ung nho danh',
        'pass' => md5('danhtamxuan@gmail.com'),
    ),
    2 => array(
        'id' => '2',
        'name' => 'ung nho canh',
        'pass' => 'danhtamxuan2@gmail.com',
    ),
    3 => array(
        'id' => '3',
        'name' => 'ung nho ht',
        'pass' => 'danhtamxuan3@gmail.com',
    ),
);
#cách thêm phần tử vào mảng đa chiều
$LIST_USER[2] = array(
    'id' => '2',
    'name' => 'ung nho ht2k',
    'pass' => 'danhtamxuan3@gmail.com'
); #cách 2 
$LIST_USER[3]['id'] = '4';
$LIST_USER[3]['name'] = 'cc';
$LIST_USER[3]['pass'] = '?';
echo "<pre>";
print_r($LIST_USER);
echo "</pre>";
#cách lấy mảng phần tử của mảng đã chiều
echo $LIST_USER[3]['name'];
#cách xóa mảng trong php
// unset($LIST_USER['name']);
#TẠI SAO CẦN DUYỆT MẢNG
// // - giúp ghé thăm các thần tử của mảng
// // - tác động và xử lý các yêu cầu lien quan trực tiếp đến các phần từ của 
// mảng(xuất dữ liệu, tinhstoans .. )
#foreach là cấu trúc dùng để duyệt của mảng
// foreach($info as $key=>$value){
//     $key: key của phần tử được duyệt 
//     $value: giá trị của phân tử đang được duyệt
//     xử lý tác động vào các phần tử của mảng
// } chú ý: nếu k dùng đến key thì k cần đưa key vào vòng lập
$t = 0;
foreach ($list_odd as $value) {
    echo $value . "</br>"; #."</br>" chấm để nối và "</br>" để xuống dòng cho code
    $t += $value;
};
echo "toongr: {$t}";
#có thế thay thế $value bằng $... nào cũng đc tùy vào biến mình đã đặt tên
# NHÚNG PHP VÀO HTML
$LIST_PRIMES = array(2, 3, 5, 7);
/*
 b1 chuẩn bị mảng đã xly 
 b2 tạo cấu trúc ht ml mẫu
 b3 duyệt mảng
 b4 đổ dữ liệu
 */
// <!-- ta có function show_aray() để show dữ liệu -->
function show_array($LIST_USER)
{
    if (is_array($LIST_USER)) {
        // nếu $data là dữ liệu mảng thì echo xuất ra 
        echo "<pre>";
        print_r($LIST_USER);
        echo "</pre>";
    }
}

?>
<html>

<head>
    <title>Nhúng dữ liệu mảng vào html</title>
</head>

<body>
    <h1>Danh sách nguyên tố</h1>
    <table>
        <!-- border là nn css dùng để chỉ định LOẠI đường viền cho bảng -->
        <!-- table tạo dữ liệu bảng trên html -->
        <thead>
            <!-- thead là phần trên của bảng -->
            <tr>
                <td style="display: flex;align-items: center;justify-content: center;" width="70">
                    <div class="loader"></div>
                </td>
                <td style="text-align:center" width="200">Số nguyên tố</td>
                <!-- width="200" để hiện kích thước ngang của ô -->
                <!-- style="text-align:center" để căn giwuax văn bản -->
            </tr>
        </thead>
        <tbody>
            <!-- tbody là phần giá trị  bên dưới của bảng -->
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>7</td>
            </tr>
        </tbody>
    </table>
</body>


</html>
<!-- B3 :duyệt mảng và nhúng -->
<html>

<head>
    <title>Nhúng dữ liệu mảng vào html</title>
</head>

<body>
    <h1>Danh sách nguyên tố có nhúng php</h1>
    <table>
        <!-- border là nn css dùng để chỉ định LOẠI đường viền cho bảng -->
        <!-- table tạo dữ liệu bảng trên html -->
        <thead>
            <!-- thead là phần trên của bảng -->
            <tr>
                <td style="text-align:center" width="70">stt</td>
                <td style="text-align:center" width="200">Số nguyên tố</td>
                <!-- width="200" để hiện kích thước ngang của ô -->
                <!-- style="text-align:center" để căn giwuax văn bản -->
            </tr>
        </thead>
        <tbody>
            <!-- thead là phần trên của bảng -->
            <?php
            $temp = 0;
            foreach ($LIST_PRIMES as $item) {
                $temp++;
            ?>
                <tr>
                    <td style="text-align:center" width="200"><?php echo $temp ?></td>
                    <td style="text-align:center" width="200"><?php echo $item ?></td>
                    <!-- width="200" để hiện kích thước ngang của ô -->
                    <!-- style="text-align:center" để căn giwuax văn bản -->
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>
<!-- DANH SÁCH THÀNH VIÊN -->
<html>

<body>
    <h1>Danh sách THÀNH VIÊN tạo bởi giá trị chuỗi</h1>
    <?php
    if (!empty($LIST_USER)) {
        // "if(!empty($LIST_USER))" có nghĩa là nếu biens này k rỗng(#0) thì xuất dữ liệu dạng bảng bên dưới
    ?>
        <table>
            <thead>
                <!-- thead là phần trên của bảng -->
                <tr>
                    <td style="text-align:center" width="70">stt</td>
                    <td style="text-align:center" width="70">id</td>
                    <td width="200">tên</td>
                    <td width="200">mk</td>
                    <!-- width="200" để hiện kích thước ngang của ô -->
                    <!-- style="text-align:center" để căn giwuax văn bản -->
                </tr>
            </thead>
            <?php
            $temp = 0;
            foreach ($LIST_USER as $users) {
                $temp++;
                //    show_array($users);
            ?>

                <!-- border là nn css dùng để chỉ định LOẠI đường viền cho bảng -->
                <!-- table tạo dữ liệu bảng trên html -->

                <tbody>
                    <!-- thead là phần trên của bảng -->
                    <tr>
                        <td style="text-align:center" width="700"><?php echo $temp ?></td>
                        <td style="text-align:center" width="70"><?php echo $users['id'] ?></td>
                        <td width="200"><?php echo $users['name'] ?></td>
                        <td width="200"><?php echo $users['pass'] ?></td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
    <?php } else {
        #else đang sử dụng cấu trúc if else cấu trúc lựa chọn btdk đúng để xuất ra
    ?>
        <p>
            không tồn tại dữ liệu
        </p>
    <?php
    } ?>
</body>

</html>
<!-- cách ktra dữ liệu có hay k -->