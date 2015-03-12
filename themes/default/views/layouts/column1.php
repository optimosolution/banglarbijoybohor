<?php $this->beginContent('//layouts/main'); ?>
<!-- Showcase  -->
<div id="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1 class="animated slideInDown"><?php echo Yii::app()->name; ?></h1>
                <div class="list">
                    <ul>
                        <li class="animated slideInLeft first"><span><i class="fa fa fa-cogs"></i> Non-profit, Non-political Organization</span></li>                                   
                    </ul>
                </div>
            </div>
            <div class="col-md-6 hidden-sm hidden-xs">
                <div class="showcase">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/Bangladesh-USA.jpg" alt="..." class="iMac animated fadeInDown">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php echo $content; ?>                
</div>
<?php $this->endContent(); ?>