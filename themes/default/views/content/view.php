<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1525919237627968&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="blog-summary">
    <h4 class=""><?php echo CHtml::link(CHtml::encode($model->title), array('view', 'id' => $model->id)); ?></h4>
    <ul class="text-muted list-inline">
        <li><i class="fa fa-calendar"></i> <?php echo Content::get_date_time(CHtml::encode($model->created)); ?></li>
    </ul>
    <hr>
    <p class="blog-text">
        <?php
        $filePath = Yii::app()->basePath . '/../uploads/profile_picture/' . $model->profile_picture;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/' . $model->profile_picture, 'Picture', array('alt' => $model->title, 'class' => 'pull-right img-responsive blog-img', 'title' => $model->title, 'style' => ''));
        } else {
            //echo CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/noimage.jpg', 'Picture', array('alt' => $model->title, 'class' => 'pull-right img-responsive blog-img', 'title' => $model->title, 'style' => ''));
        }
        ?>
        <?php echo CHtml::decode($model->introtext); ?>
    </p>
    <div class="fb-comments" data-href="<?php echo 'http://www.banglarbijoybohor.org/' . Yii::app()->request->url; ?>" data-width="750" data-numposts="10" data-colorscheme="light"></div>
</div>