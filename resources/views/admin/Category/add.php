<?php include_once __DIR__ . "/../header.php"; ?>
<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>THÊM MỚI DANH MỤC</h3>
    </div>
    <div class="row formcontent" style="width:1650px;">
        <form action="/create-category" method="post" enctype="multipart/form-data">
            <div class="row" style="margin-top:15px;">
                <div class="row mb10 content" style="width:108%;">
                    <div class="row mb10">
                        <label for="">MÃ DANH MỤC</label><br>
                        <input type="text" name="id_category" placeholder="auto number" style="width:120%;" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">TÊN DANH MỤC <p style="color:red;"> *</p><br></label>
                        <input type="text" name="name_category" style="width:120%;">
                    </div>
                </div>
            </div>
            <div class="row mb10">
                <input type="submit" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="/category"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
<?php include_once __DIR__ . "/../footer.php"; ?>