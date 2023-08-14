<!-- banner-start -->
<?php
require_once "banner.php"
?>
<!-- banner-end -->
<!-- tab-products section start -->
<div class="tab-products single-products section-padding extra-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <div class="product-tab nav nav-tabs">
                        <ul>
                            <li class="active"><a data-toggle="tab" href="#arrival">Bánh<span>/</span></a></li>
                            <li><a data-toggle="tab" href="#popular">Kẹo<span>/</span></a></li>
                            <li><a data-toggle="tab" href="#best">Các loại khô</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center tab-content">
            <div class="tab-pane  fade in active" id="arrival">
                <div class="wrapper">
                    <ul class="load-list load-list-two">
                        <?php 
                        if($data_sanpham1!=null) { 
                            for($r=0;$r<2;$r++){
                                ?>
                        <li>
                            <div class="row text-center">
                                <?php 
                                for ($i = $r*4; $i < (count($data_sanpham1)-4)*$r+4; $i++) {
                                    ?>
                                <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                    <div class="single-product">
                                        <div class="product-f">
                                            <a href="?act=detail&id=<?php echo $data_sanpham1[$i]['ProductID'] ?>"><img
                                                    src="public/<?php echo $data_sanpham1[$i]['ProductImage1'] ?>"
                                                    alt="Product Title" class="img-products" /></a>
                                            <div class="actions-btn">
                                                <a href="?act=detail&id=<?php echo $data_sanpham1[$i]['ProductID'] ?>"><i
                                                        class="mdi mdi-cart"></i></a>
                                                <a href="?act=detail&id=<?php echo $data_sanpham1[$i]['ProductID'] ?>"
                                                    data-toggle="modal"><i class="mdi mdi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-dsc">
                                            <p><a
                                                    href="?act=detail&id=<?php echo $data_sanpham1[$i]['ProductID'] ?>"><?php echo $data_sanpham1[$i]['ProductName'] ?></a>
                                            </p>
                                            <span><?php echo number_format($data_sanpham1[$i]['ProductPrice']) ?>
                                                VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </li>
                        <?php 
                            }
                        }?>
                        <li>
                            <div class="row text-center"><b><a href="?act=shop">Vào cửa hàng để xem nhiều hơn!</a></b>
                            </div>
                        </li>
                    </ul>
                    <button id="load-more-two">Tải thêm</button>
                </div>
            </div>
            <!-- arrival product end -->
            <div class="tab-pane fade" id="popular">
                <div class="wrapper">
                    <ul class="load-list load-list-three">
                        <?php 
                        if($data_sanpham2!=null) { 
                            for($r=0;$r<2;$r++){
                                ?>
                        <li>
                            <div class="row text-center">
                                <?php 
                                for ($i = $r*4; $i < (count($data_sanpham2)-4)*$r+4; $i++) {
                                    ?>
                                <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                    <div class="single-product">
                                        <div class="product-f">
                                            <a href="?act=detail&id=<?php echo $data_sanpham2[$i]['ProductID'] ?>"><img
                                                    src="public/<?php echo $data_sanpham2[$i]['ProductImage1'] ?>"
                                                    alt="Product Title" class="img-products" /></a>
                                            <div class="actions-btn">
                                                <a href="?act=detail&id=<?php echo $data_sanpham2[$i]['ProductID'] ?>"><i
                                                        class="mdi mdi-cart"></i></a>
                                                <a href="?act=detail&id=<?php echo $data_sanpham2[$i]['ProductID'] ?>"
                                                    data-toggle="modal"><i class="mdi mdi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-dsc">
                                            <p><a
                                                    href="?act=detail&id=<?php echo $data_sanpham2[$i]['ProductID'] ?>"><?php echo $data_sanpham2[$i]['ProductName'] ?></a>
                                            </p>
                                            <span><?php echo number_format($data_sanpham2[$i]['ProductPrice']) ?>
                                                VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </li>
                        <?php 
                            }
                        }?>
                        <li>
                            <div class="row text-center"><b><a href="?act=shop">Vào cửa hàng để xem nhiều hơn!</a></b>
                            </div>
                        </li>
                    </ul>
                    <button id="load-more-three">Tải thêm</button>
                </div>
            </div>
            <!-- popular product end -->
            <div class="tab-pane fade" id="best">
                <div class="wrapper">
                    <ul class="load-list load-list-four">
                        <?php 
                        if($data_sanpham3!=null) { 
                            for($r=0;$r<2;$r++){
                                ?>
                        <li>
                            <div class="row text-center">
                                <?php 
                                for ($i = $r*4; $i < (count($data_sanpham3)-4)*$r+4; $i++) {
                                    ?>
                                <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                    <div class="single-product">
                                        <div class="product-f">
                                            <a href="?act=detail&id=<?php echo $data_sanpham3[$i]['ProductID'] ?>"><img
                                                    src="public/<?php echo $data_sanpham3[$i]['ProductImage1'] ?>"
                                                    alt="Product Title" class="img-products" /></a>
                                            <div class="actions-btn">
                                                <a href="?act=detail&id=<?php echo $data_sanpham3[$i]['ProductID'] ?>"><i
                                                        class="mdi mdi-cart"></i></a>
                                                <a href="?act=detail&id=<?php echo $data_sanpham3[$i]['ProductID'] ?>"
                                                    data-toggle="modal"><i class="mdi mdi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-dsc">
                                            <p><a
                                                    href="?act=detail&id=<?php echo $data_sanpham3[$i]['ProductID'] ?>"><?php echo $data_sanpham3[$i]['ProductName'] ?></a>
                                            </p>
                                            <span><?php echo number_format($data_sanpham3[$i]['ProductPrice']) ?>
                                                VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </li>
                        <?php 
                            }
                        }?>
                        <li>
                            <div class="row text-center"><b><a href="?act=shop">Vào cửa hàng để xem nhiều hơn!</a></b>
                            </div>
                        </li>
                    </ul>
                    <button id="load-more-four">Tải thêm</button>
                </div>
            </div>
            <!-- popular product end -->
        </div>
    </div>
</div>
<!-- tab-products section end -->
<!-- collection section start -->



<section class="collection-area collection-area2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="single-colect banner collect-one">

                    <a href="?act=detail&id=<?php echo $data_random['0']['ProductID'] ?>">
                        <img src="public/<?php echo $data_random['0']['ProductImage1'] ?>" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="colect-text ">
                    <h4><a href="#"><?php echo $data_random['0']['ProductName'] ?></a></h4>
                    <h5>Giá: <?php echo number_format($data_random['0']['ProductPrice']) ?> VNĐ</h5>
                    <a href="?act=detail&id=<?php echo $data_random['0']['ProductID'] ?>">Mua ngay <i
                            class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="collect-img banner margin single-colect">
                    <a href="#"><img src="public/<?php echo $data_random['0']['ProductImage2'] ?>" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="collect-img banner single-colect">
                    <a href="?act=detail&id=<?php echo $data_random['1']['ProductID'] ?>"><img
                            src="public/<?php echo $data_random['1']['ProductImage1'] ?>" alt="" /></a>
                </div>
                <div class="colect-text ">
                    <h4><a
                            href="?act=detail&id=<?php echo $data_random['1']['ProductID'] ?>"><?php echo $data_random['1']['ProductName'] ?></a>
                    </h4>
                    <h5>Giá: <?php echo number_format($data_random['1']['ProductPrice']) ?> VNĐ</h5>
                    <a href="?act=detail&id=<?php echo $data_random['1']['ProductID'] ?>">Mua ngay <i
                            class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section end -->
<!-- featured-products section start -->
<section class="single-products  products-two section-padding extra-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>Sản phẩm mới nhất</h2>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <ul class="load-list load-list-one">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                <li>
                    <div class="row text-center">
                        <?php
                        if ($data_arr[$i] != null) {
                            foreach ($data_arr[$i] as  $row) { ?>
                        <!-- single product end -->
                        <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                            <div class="single-product">
                                <div class="product-f">
                                    <a href="?act=detail&id=<?php echo $row['ProductID'] ?>"><img
                                            src="public/<?php echo $row['ProductImage1'] ?>" alt="Product Title"
                                            class="img-products" /></a>
                                    <div class="actions-btn">
                                        <a href="?act=detail&id=<?php echo $row['ProductID'] ?>"><i
                                                class="mdi mdi-cart"></i></a>
                                        <a href="?act=detail&id=<?php echo $row['ProductID'] ?>" data-toggle="modal"><i
                                                class="mdi mdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-dsc">
                                    <p><a
                                            href="?act=detail&id=<?php echo $row['ProductID'] ?>"><?php echo $row['ProductName'] ?></a>
                                    </p>
                                    <span><?php echo number_format($row['ProductPrice']) ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <!-- single product end -->
                        <?php }
                        } ?>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <button id="load-more-one">Tải thêm</button>
        </div>
    </div>
</section>
<!-- featured-products section end -->
<!-- quick view start -->
<?php
require_once "Views/quickview.php";
?>
<!-- quick view end -->