<?php
/* @var $this GalleryController */
/* @var $model Banner */

$this->pageTitle = $model->name . ' - ' . Yii::app()->name;
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1525919237627968&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="row">
    <div class="col-sm-12"><h3><?php echo $model->name; ?></h3></div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php
        $filePath = Yii::app()->basePath . '/../uploads/banners/' . $model->banner;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $model->banner, 'Picture', array('alt' => $model->name, 'class' => 'img-responsive', 'title' => $model->name, 'style' => ''));
        } else {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/profile.jpg', 'Picture', array('alt' => $model->name, 'class' => 'img-responsive', 'title' => $model->name, 'style' => ''));
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php echo $model->description; ?>        
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="fb-comments" data-href="<?php echo 'http://www.banglarbijoybohor.org/' . Yii::app()->request->url; ?>" data-width="1024" data-numposts="10" data-colorscheme="light"></div>
    </div>
</div>