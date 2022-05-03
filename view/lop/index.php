<a href="?action=create">
    Thêm
</a>
<table border="1">
    <tr>
        <th>Mã</th>
        <th>Họ tên</th>
        <th>Sửa</th>
        <th>Xoá</th>
    </tr>
    <?php foreach ($arr as $each){ ?>
        <tr>
            <td><?php echo $each->get_ma() ?></td>
            <td><?php echo $each->get_ho_ten() ?></td>
            <td>
                <a href="?action=edit&ma=<?php echo $each->get_ma() ?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each->get_ma() ?>">
                    Xoá
                </a>
            </td>
        </tr>
    <?php } ?>
</table>