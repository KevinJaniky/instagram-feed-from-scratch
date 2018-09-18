<?php foreach($data as $key => $item){ ?>

 

    <div class="col-md-3">
        <img style="width:100%" src="<?php echo $item['thumbnailSrc'] ?>" alt="Card image cap">
        <div class="">
            <p class=""><?php echo $item['description'][0] ?></p>
            <div class="text-muted"><?php 
                    foreach($item['description'] as $key => $tag){
                        if($key != 0)
                            echo '<span>#'.$tag.' </span>';
                    }
            ?></div>
        </div>
    </div>


<?php } ?>