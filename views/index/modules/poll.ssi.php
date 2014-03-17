<div class="small-12 module poll">
    <h1 class="title">Poll Question</h1>

    <div class="small-12 columns content">
        <h4><?php echo $this->pollQuestion->question; ?></h4>

        <div class="poll-buttons" data-poll="<?php echo $this->pollQuestion->id;?>">

            <a href="<?php echo URL; ?>index/submitPollAnswer/
                <?php echo $this->pollQuestion->id; ?>/1/" class="button pollAnswer"
                data-answer="1">Yes</a>
            <a href="<?php echo URL; ?>index/submitPollAnswer/
                <?php echo $this->pollQuestion->id; ?>/0/" class="button pollAnswer"
                data-answer="0">No</a>
            <a href="#" class="button disabled">Discuss</a>

        </div>
        <!-- TODO: previous questions page.
        <a href="#"><h4>See Previous Questions <span>&#8250;</span></h4></a>
        -->

    </div><!--columns-->

    <div class="clearfix"></div>
</div><!--poll-->