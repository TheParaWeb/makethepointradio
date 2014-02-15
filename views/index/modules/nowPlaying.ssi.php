<div class="small-10 large-6 small-centered columns now-playing">
    <div class="medium-4 columns dj-img">
        <img src="<?php echo $this->nowPlaying->imgHref;?>" alt="Keven Cohen">
    </div>

    <div class="medium-8 columns dj-info">
        <h2 class="extralight">Now Playing</h2>
        <h1 class="gray black"><?php echo $this->nowPlaying->name;?></h1>
        <h2 class="airtime"><?php echo $this->nowPlaying->time;?></h2>

        <div class="show-links">
            <a href="#" class="medium-5 small-centered medium-uncentered columns listen-now"><span>Listen Now</span></a>
            <a href="<?php echo $this->nowPlaying->bioURL;?>" class="medium-4 columns button box">Bio</a>
        </div><!--show links-->
    </div><!--dj info-->

    <div class="clearfix"></div>
</div><!--now playing-->