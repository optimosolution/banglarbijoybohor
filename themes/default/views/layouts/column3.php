<?php $this->beginContent('//layouts/main'); ?>
<div class="section-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Remove the .animated class if you don't want things to move -->
                <h1 class="animated slideInLeft"><span><?php echo Content::get_title($_GET['id']); ?></span></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-summary-list">
            <?php echo $content; ?>
        </div>
        <div class="col-sm-4">
            <?php $this->get_latest_post(2); ?>
            <?php $this->get_latest_post(3); ?>
            <?php $this->get_latest_post(4); ?>
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FBanglar-Bijoy-Bohor%2F471508196319042&amp;width=360&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=1525919237627968" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:360px; height:290px;" allowTransparency="true"></iframe>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
