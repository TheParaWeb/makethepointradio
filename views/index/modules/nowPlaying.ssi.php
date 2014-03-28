<?php $show = $this->show;?>
<div class="small-10 large-6 small-centered columns now-playing">
    <div class="medium-4 columns dj-img">
        <img
            src="<?php echo ($show['thumb_src']!="") ?$show['thumb_src'] : "http://placehold.it/163x199&text=No+Photo";?>"
            alt="<?php echo $show['title'];?>">
    </div>

    <div class="medium-8 columns dj-info">
        <h2 class="extralight">Now Playing</h2>
        <h1 class="gray black"><?php echo $show['host'];?></h1>
        <h3 class="airtime"><?php echo $show['day_text']." ".$show['time_text'];?></h3>

        <div class="show-links">
            <a href="javascript:;" onClick="javascript:window.open('http://v5.player.abacast.com/v5.1/player/index.php?uid=6825','ppv5','height=530,width=800,menubar=no,scrollbars=no,toolbar=no,status=no,resizable=no')" class="medium-5 small-centered medium-uncentered columns listen-now"><span>Listen Now</span></a>
            <a href="<?php echo URL."shows/bio/".$show['plug'];?>/" class="medium-4 columns button box">Bio</a>
        </div><!--show links-->
    </div><!--dj info-->

    <div class="clearfix"></div>
</div><!--now playing-->