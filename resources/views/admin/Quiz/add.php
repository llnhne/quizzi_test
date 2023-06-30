<?php include_once __DIR__ . "/../header.php"; ?>
<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>THÊM MỚI QUIZ</h3>
    </div>
    <div class="row formcontent" style="width:1650px;">
        <form action="/create-quiz" method="post" enctype="multipart/form-data">
            <div class="row" style="margin-top:15px;">
                <div class="row mb10 content1" style="width:50%;">
                    <div class="row mb10">
                        <label for="">MÃ QUIZ</label><br>
                        <input type="text" name="id" placeholder="auto number" style="width:120%;" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">TÊN QUIZ <p style="color:red;"> *</p><br></label>
                        <input type="text" name="name_quiz" style="width:120%;">
                    </div>
                </div>
                <div class="row mb10 content3" style="width:50%;">
                    <div class="row mb10">
                        <label for="">LOẠI QUIZ</label><br>
                        <select name="id_category" id="" style="border:1px solid #FFCACA;">
                            <?php foreach ($category as $cate) : ?>
                                <option value="<?= $cate->id_category ?>">
                                    <?= $cate->name_category ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">HÌNH ẢNH</label><br>
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="row mb10">
                <input type="submit" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="/quiz"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
<?php include_once __DIR__ . "/../footer.php"; ?>