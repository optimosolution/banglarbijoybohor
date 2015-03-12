<!-- Services -->
<div class="row">
    <div class="col-md-12">
        <div class="services">
            <ul>
                <li>
                    <i class="fa fa-briefcase fa-3x"></i>
                    <p>Non-profit</p>
                </li>
                <li>
                    <i class="fa fa-cloud-upload fa-3x"></i>
                    <p>Non-political</p>
                </li>
                <li>
                    <i class="fa fa-laptop fa-3x"></i>
                    <p>Non-discriminatory</p>
                </li>
                <li>
                    <i class="fa fa-gears fa-3x"></i>
                    <p>Bangladeshi Associations</p>
                </li>
                <li>
                    <i class="fa fa-compass fa-3x"></i>
                    <p>Bangladeshi Americans</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Welcome message -->
    <div class="col-md-8">
        <div class="block-header">
            <h2>
                <span class="title"><?php echo Content::get_title(4); ?></span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
            </h2>
        </div>
        <?php echo Content::get_introtext(4); ?>
    </div>
    <!-- Last updated -->
    <div class="col-md-4">
        <div class="block-header">
            <h2>
                <span class="title">Last Updates</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
            </h2>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#blog" data-toggle="tab">Executive Committee</a></li>
            <li><a href="#comments" data-toggle="tab">Advisers</a></li>
            <li><a href="#events" data-toggle="tab">Press</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="blog">
                <?php $this->get_latest_updates(2); ?>               
            </div>
            <div class="tab-pane" id="comments">
                <?php $this->get_latest_updates(5); ?>  
            </div>
            <div class="tab-pane" id="events">
                <?php $this->get_latest_updates(3); ?>  
            </div>
        </div>
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FBanglar-Bijoy-Bohor%2F471508196319042&amp;width=360&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=1525919237627968" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:360px; height:290px;" allowTransparency="true"></iframe>
    </div>
</div>
<!-- Recent Works -->
<div class="row">
    <div class="col-md-12 block-header">
        <h2>
            <span class="title">Recent Picture</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
        </h2>
    </div>
</div>
<div class="row">
    <?php $this->get_gallery_recent(); ?>

</div>