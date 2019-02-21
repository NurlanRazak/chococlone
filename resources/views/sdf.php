<!-- <div class="container">
        <div class="col-md-8">
       @foreach($products->chunk(3) as $chunk)
        <div class="row">
            <?php foreach ($chunk as $question){?>
                <div class="col-md-6">
                    <div class="product-block">
                        <div class="picture-prod">

                            <a href=""><img src="<?php echo ($question -> path); ?>"alt=""></a>

                        </div>
                        <div class="prod_inf">
                            <a href=""><?php echo ($question -> title); ?></a>
                        </div>

                        </div>
                    </div>
                </div>
                }
<?php
}
?>
        </div>
        @endforeach
        </div>

    </div>
-->