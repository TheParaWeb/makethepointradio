<?php $feed = $this->nationalNews;?>
<div class="small-12 module news">
    <h1 class="title"><?php echo $feed->title;?></h1>

    <ul class="small-block-grid-1 columns">
        <?php
        $story = $feed->items;
        for($i=0;$i<=7;$i++){?>
            <li>
                <a href="<?php echo $story[$i]['link'];?>" alt="<?php echo $story[$i]['title'];?>" target="_blank">
                    <img class="img-small" src="<?php echo URL;?>public/images/abc-news-radio.png"/>
                    <h4 class="headline"><?php echo $story[$i]['title'];?></h4>
                </a>
            </li>
        <?php }?>
    </ul>
</div><!--module news-->