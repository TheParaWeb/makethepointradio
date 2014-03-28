<?php if(isset($this->ads)){$ads=$this->ads;}?> <!-- required for ads to show -->
<div class="row">
    <div class="feature">
        <div class="row">
            <?php include("modules/nowPlaying.ssi.php");?>
        </div><!--row-->

        <div class="row">
            <?php //TODO: Hook up form and add validation. ?>
            <form class="small-10 medium-10 large-6 small-centered columns subscribe">
                <div class="row collapse">
                    <div class="small-9 columns">
                        <label for="email">Enter your email to stay up to date</label>
                        <input type="email" name="email" class="email" placeholder="enter your email to stay up to date">
                    </div><!--email input-->

                    <div class="small-3 columns">
                        <input type="submit" name="submit" value="submit" class="button postfix">
                    </div><!--submit button-->
                </div><!--row collapse-->
            </form>
        </div><!--row-->
    </div><!--feature-->
</div><!--row-->

<div class="row module-area">
<div class="small-12 medium-7 columns left">

    <?php include("modules/latestNews.local.ssi.php");?>



    <div class="small-12 columns ad">
        <a href="<?php echo $ads[1]['site_url'];?>" target="_blank" title="<?php echo $ads[1]['title'];?>">
            <img src="<?php echo URL; ?>public/images/ads/<?php echo $ads[1]['src_url'];?>"
                 alt="<?php echo $ads[1]['title'];?>" >
        </a>
    </div><!--ad-->



    <div class="clearfix"></div>


    <?php include("modules/latestNews.abc.ssi.php");?>

    <div class="clearfix"></div>

    <?php// include("modules/blog.ssi.php");?>
    <?php include("modules/facebook.ssi.php");?>

    <div class="small-12 columns ad">
        <div class="row">
            <div class="large-4 med-4 small-12 columns">
                <a href="<?php echo $ads[2]['site_url'];?>" target="_blank" title="<?php echo $ads[2]['title'];?>">
                    <img src="<?php echo URL; ?>public/images/ads/<?php echo $ads[2]['src_url'];?>"
                         alt="<?php echo $ads[2]['title'];?>" >
                </a>
            </div>
            <div class="large-4 med-4 small-12 columns">
                <a href="<?php echo $ads[3]['site_url'];?>" target="_blank" title="<?php echo $ads[3]['title'];?>">
                    <img src="<?php echo URL; ?>public/images/ads/<?php echo $ads[3]['src_url'];?>"
                         alt="<?php echo $ads[3]['title'];?>" >
                </a>
            </div>
            <div class="large-4 med-4 small-12 columns">
                <a href="<?php echo $ads[4]['site_url'];?>" target="_blank" title="<?php echo $ads[4]['title'];?>">
                    <img src="<?php echo URL; ?>public/images/ads/<?php echo $ads[4]['src_url'];?>"
                         alt="<?php echo $ads[4]['title'];?>" >
                </a>
            </div>
        </div>

    </div><!--ad-->
    <div class="clearfix"></div>

</div><!--left column-->

<div class="small-12 medium-5 columns right">

<?php include('modules/featured.ssi.php');?>

<div class="small-12 columns ad">
    <a href="<?php echo $ads[5]['site_url'];?>" target="_blank" title="<?php echo $ads[5]['title'];?>">
        <img src="<?php echo URL; ?>public/images/ads/<?php echo $ads[5]['src_url'];?>"
             alt="<?php echo $ads[5]['title'];?>">
    </a>
</div><!--ad-->

<div class="clearfix"></div>

<?php include('modules/poll.ssi.php');?>

<?php include('modules/traffic.ssi.php');?>

<?php include('modules/weather.ssi.php');?>

</div><!--right column-->
</div><!--row-->