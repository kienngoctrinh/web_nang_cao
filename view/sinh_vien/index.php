<a href="?action=create&controller=sinh_vien">
    Thêm
</a>

<table border="1">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xoá</th>
    </tr>
    <?php foreach ($arr as $each){ ?>
        <tr>
            <td><?php echo $each->get_ma() ?></td>
            <td><?php echo $each->get_ten() ?></td>
            <td><?php echo $each->get_ten_lop() ?></td>
            <td>
                <a href="?action=edit&ma=<?php echo $each->get_ma() ?>&controller=sinh_vien">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each->get_ma() ?>&controller=sinh_vien">
                    Xoá
                </a>
            </td>
        </tr>
    <?php } ?>
</table>