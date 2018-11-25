<?php include('sever.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>San_Pham</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
</head>
<body>
    <table>
        <tr>
            <th>TenSP</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Ngày tạo</th>
            <th colspan = "2">Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($results)){
             ?>
        <tr>
            <td><?php echo $row['SP']?> </td>
            <td><?php echo $row['gia']?> </td>
            <td> <?php echo $row['mota'] ?></td>
            <td> <?php echo $row['hinhanh'] ?></td>
            <td> <?php echo $row['date'] ?></td>
            <td><a  href = "sever.php?delete= <?php echo $row['ID']; ?> ">DELETE<a></td>
            <td> <a href = "update.php?edit= <?php echo $row['ID']; ?>">EDIT<a></td>
        </tr>
        <?php } ?>
    </table>

    <form method = "POST" action = "">
        <div>
            <label>TenSP :</label>
            <input type = "text" name = "SP">
        </div>
        <div>
            <label>Gia :</label>
            <input type = "text" name = "gia">
        </div>
        <div>
            <label>Mo Ta :</label>
            <input type = "text" name = "mota">
        </div>
        <div>
            <label>Hinh anh :</label>
            <input type = "text" name = "hinhanh">
        </div>
        <div>
            <label>Ngay tao :</label>
            <input type = "date" name = "date">
        </div>
        <div>
            <button type = "submit" name = "save">Save</button>
        </div>
    </form>
    </body>
</html>