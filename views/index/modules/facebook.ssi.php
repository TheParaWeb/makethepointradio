<div class="small-12 module fb">
    <h1 class="title">Facebook</h1>
    <?php
        for($i=0;$i<2;$i++){
            $id = explode('_', $this->facebook->data[$i]->id);
            $id = $id[1];?>

            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-container">
                <div class="fb-post" data-href="https://www.facebook.com/makethepointcae/posts/<?php echo $id;?>"
                     data-width="783">
                    <div class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/makethepointcae/posts/<?php echo $id;?>">Post</a> by <a
                            href="https://www.facebook.com/makethepointcae">95-9 The Point</a>.
                    </div>
                </div>
            </div>

    <?php } ?>
</div>