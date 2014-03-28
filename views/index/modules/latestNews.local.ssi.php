<div class="small-12 module news">
    <h1 class="title">Local News</h1>

    <ul class="small-block-grid-2 columns">
        <?php
            $feed = $this->localNews;
            for($i=0;$i<=7;$i++){?>
                <li>
                    <a href="<?php echo $feed[$i]['link'];?>" alt="<?php echo $feed[$i]['title'];?>" target="_blank">
                        <?php if($feed[$i]['img']==''):?>
                            <img src="<?php echo URL;?>public/images/no-image.jpg" alt="No Image Availble"/>
                        <?php else:?>
                            <img src="<?php echo $feed[$i]['img'];?>" alt="<?php echo $feed[$i]['title'];?>">
                        <?php endif;?>

                        <h4 class="headline"><?php echo $feed[$i]['title'];?></h4>
                    </a>
                </li>
            <?php }?>
    </ul>
</div><!--module news-->