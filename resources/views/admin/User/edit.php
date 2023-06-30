<?php include_once __DIR__ . "/../header.php"; ?>
<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>CẬP NHẬT TÀI KHOẢN</h3>
    </div>
    <div class="row formcontent" style="width:1650px;">
        <form action="/update-taikhoan" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="row mb10 content1" style="width:49%;">
                    <div class="row mb10">
                        <label for="" style="display:flex;">TÊN KHÁCH HÀNG <p style="color:red;"> *</p><br></label>
                        <input type="text" name="name_user" style="width:120%;" value="<?= $taikhoan->name_user ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">PASSWORD <p style="color:red;"> *</p><br></label>
                        <input type="password" name="password" style="width:120%;" value="<?= $taikhoan->password ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">SỐ ĐIỆN THOẠI <p style="color:red;">*</p><br></label>
                        <input type="text" name="tel" style="width:120%;" value="<?= $taikhoan->tel ?>" required>
                    </div>
                </div>
                <div class="row mb10 content3" style="width:50%;">
                <div class="row mb10">
                        <label for="" style="display:flex;">EMAIL <p style="color:red;">*</p><br></label>
                        <input type="text" name="email" style="width:120%;" value="<?= $taikhoan->email ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">ADDRESS <p style="color:red;">*</p><br></label>
                        <input type="text" name="address" style="width:120%;" value="<?= $taikhoan->address ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">ROLE <p style="color:red;">*</p><br></label>
                        <input type="text" name="role" style="width:120%;" value="<?= $taikhoan->role ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $taikhoan->id ?>">
                <input type="submit" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="/taikhoan"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
<?php include_once __DIR__ . "/../footer.php"; ?>