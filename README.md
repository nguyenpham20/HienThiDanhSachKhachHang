# HienThiDanhSachKhachHang
Bước 1: Tạo file index.php, sử dụng mã html để tạo bảng hiển thị danh sách khách hàng trong bảng gồm các cột: STT, Tên, Ngày sinh, Địa chỉ, Ảnh.

Mã html sau hiển thị bảng với tiêu đề, nhưng chưa có dữ liệu:

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
 <table border="0">
  <caption><h1>Danh sách khách hàng</h1></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>
 </table>
</body>
</html>
Bước 2: Khai báo mảng chứa danh sách khách hàng.

Mảng có tên là $customerlist gồm key là thứ tự khách hàng, value là một mảng gồm tên, ngày sinh, địa chỉ, ảnh của từng khách hàng. Mảng này lưu dữ liệu gồm 5 khách hàng.

<?php
$customerlist = array(
    "1" => array("ten" => "Mai Văn Hoàn", 
                 "ngaysinh" => "1983-08-20", 
                 "diachi" => "Hà Nội", 
                 "anh" => "images/img1.jpg"),
    "2" => array("ten" => "Nguyễn Văn Nam", 
                 "ngaysinh" => "1983-08-20", 
                 "diachi" => "Bắc Giang", 
                 "anh" => "images/img2.jpg"),
    "3" => array("ten" => "Nguyễn Thái Hòa", 
                 "ngaysinh" => "1983-08-21", 
                 "diachi" => "Nam Định", 
                 "anh" => "images/img3.jpg"),
    "4" => array("ten" => "Trần Đăng Khoa", 
                  "ngaysinh" => "1983-08-22", 
                  "diachi" => "Hà Tây", 
                  "anh" => "images/img4.jpg"),
    "5" => array("ten" => "Nguyễn Đình Thi", 
                  "ngaysinh" => "1983-08-17", 
                  "diachi" => "Hà Nội", 
                  "anh" => "images/img5.jpg")
   );
?> 
Bước 3: Xử lý hiển thị danh sách khách hàng.

Dùng vòng lặp foreach để duyệt mảng $customerlist. Với $key là chỉ số lần lượt 1, 2, 3, … $values là các giá trị của từng $key đang được duyệt.

<?php
    foreach($customerlist as $key => $values){
      echo "<tr>";
      echo "<td>".$key."</td>";
      echo "<td>".$values['ten']."</td>";
      echo "<td>".$values['ngaysinh']."</td>";
      echo "<td>".$values['diachi']."</td>";
      echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
      echo "</tr>";
    }
?>
Cụ thể lần thứ nhất duyệt:

$key = 1, values = array("ten" => "Mai Văn Hoàn", 
                         "ngaysinh" => "1983-08-20",
                         "diachi" => "Hà Nội", 
                         "anh" => "images/img1.jpg").
Tương tự với lần duyệt 2, 3, 4, 5.

Để lấy ra được từng giá trị của values ta coi values như một mảng, lấy giá trị theo key trong mảng đó. Cụ thể để lấy tên dùng values[‘ten’], ngày sinh: values[‘ngaysinh’] …

Bước 4: Chạy chương trinh
