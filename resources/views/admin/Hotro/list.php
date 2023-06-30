<?php include_once __DIR__ . "/../header.php"; ?>
<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:1050px;">
        <h3>QUẢN LÝ HỖ TRỢ</h3>
    </div>

    <div class="row formcontent">
        <form action="/hotro" method="post">

            <div class="row mb10 formdshanghoa" style="width:1050px;">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>TÊN KHÁCH HÀNG</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                        <th>ACTION</th>
                    </tr>
                    <?php foreach ($hotro as $ht) : ?>
                        <tr>
                            <td><?= $ht->id ?></td>
                            <td><?= $ht->name_user ?></td>
                            <td><?= $ht->tel ?></td>
                            <td><?= $ht->email ?></td>
                            <td><?= $ht->message ?></td>
                            <td><a href="/delete-hotro?id=<?= $ht->id ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')"><input type="hidden" value="Xóa"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="font-weight:bold;color:#FF0000;margin-left:30px;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </form>
        <script>
            document.getElementById("btn1").onclick = function() {

                var checkboxes = document.getElementsByName('name');


                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = true;
                }
            }
            document.getElementById("btn2").onclick = function() {

                var checkboxes = document.getElementsByName('name');


                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = false;
                }
            }
        </script>
        <script>
            function DELETE() {
                return confirm("Bạn có chắc muốn xóa " + "?");
            }
        </script>
    </div>
</div>
<?php include_once __DIR__ . "/../footer.php"; ?>