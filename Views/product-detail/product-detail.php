<!-- pages-title-start -->
<?php if ($data != null) { ?>
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2><?php echo $data['ProductName'] ?></h2>
                    <ul class="text-left">
                        <li><a href="?act=home">Trang chủ</a></li>
                        <li><span> // </span><a href="?act=shop">Cửa Hàng</a></li>
                        <li><span> // </span><?php echo $data['ProductName'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- product-details-section-start -->
<div class="product-details pages section-padding-top">
    <div class="container">
        <div class="row">
            <div class="single-list-view">
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="quick-image">
                        <div class="single-quick-image text-center">
                            <div class="list-img">
                                <div class="product-f tab-content">
                                    <?php if ($data['ProductImage2'] !=  null) { ?>
                                    <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                        <a class="simpleLens-image"
                                            data-lens-image="public/<?php echo $data['ProductImage2'] ?>" href="#"><img
                                                src="public/<?php echo $data['ProductImage2'] ?>" alt=""
                                                class="simpleLens-big-image"></a>
                                    </div>
                                    <?php } ?>
                                    <?php if ($data['ProductImage1'] != null) { ?>
                                    <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                        <a class="simpleLens-image"
                                            data-lens-image="public/<?php echo $data['ProductImage1'] ?>" href="#"><img
                                                src="public/<?php echo $data['ProductImage1'] ?>" alt=""
                                                class="simpleLens-big-image"></a>
                                    </div>
                                    <?php } ?>
                                    <?php if ($data['ProductImage3'] != null) { ?>
                                    <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                        <a class="simpleLens-image"
                                            data-lens-image="public/<?php echo $data['ProductImage3'] ?>" href="#"><img
                                                src="public/<?php echo $data['ProductImage3'] ?>" alt=""
                                                class="simpleLens-big-image"></a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="quick-thumb">
                            <ul class="product-slider">
                                <?php if ($data['ProductImage2'] != null) { ?>
                                <li class="active"><a data-toggle="tab" href="#sin-1"> <img
                                            src="public/<?php echo $data['ProductImage2'] ?>" alt="quick view" /> </a>
                                </li>
                                <?php } ?>
                                <?php if ($data['ProductImage1'] != null) { ?>
                                <li><a data-toggle="tab" href="#sin-2"> <img
                                            src="public/<?php echo $data['ProductImage1'] ?>" alt="small image" /> </a>
                                </li>
                                <?php } ?>
                                <?php if ($data['ProductImage3'] != null) { ?>
                                <li><a data-toggle="tab" href="#sin-3"> <img
                                            src="public/<?php echo $data['ProductImage3'] ?>" alt="small image" /> </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <div class="quick-right">
                        <div class="list-text">
                            <h3><?php echo $data['ProductName'] ?></h3>
                            <div class="ratting floatright">
                                <p>( 27 Rating )</p>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star-half"></i>
                                <i class="mdi mdi-star-outline"></i>
                            </div>
                            <h5><?php echo number_format($data['ProductPrice'])?> VNĐ</h5>
                            <?php if ($data['CategoryID'] != null) { ?>
                            <p><?php echo $data['ProductDescription'] ?></p>
                            <?php }?>
                            <div class="list-btn">
                                <a href="?act=cart&xuli=add&id=<?php echo $data['ProductID']?>">Thêm vào giỏ</a>
                                <?php if ($data['CategoryID'] != null) { ?>
                                <a href="#info">Chi tiết</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-product item end -->
        <!-- reviews area start -->
        <div class="row">
            <div class="col-xs-12">
                <div class="reviews padding60 margin-top">
                    <ul class="reviews-tab clearfix" id="info">
                        <?php if ($data['CategoryID'] != null) { ?>
                        <li class="active"><a data-toggle="tab" href="#moreinfo">Đặc điểm</a></li>
                        <?php } ?>
                        <li><a data-toggle="tab" href="#reviews">Đánh giá</a></li>
                    </ul>
                    <div class="tab-content">
                        <?php if ($data['CategoryID'] != null) { ?>
                        <div class="info-reviews moreinfo tab-pane fade in active" id="moreinfo">
                            <div class="tb">

                                <ul>
                                    <li>
                                        <span>Khối lượng</span>
                                        <div><?php echo $data['ProductMass'] ?></div>
                                    </li>
                                    <li>
                                        <span>Kích thước</span>
                                        <div><?php echo $data['ProductSize'] ?></div>
                                    </li>
                                    <li>
                                        <span>Màu</span>
                                        <div><?php echo $data['ProductColor'] ?></div>
                                    </li>
                                    <li>
                                        <span>Chất liệu</span>
                                        <div><?php echo $data['ProductMaterial'] ?></div>
                                    </li>
                                    <li>
                                        <span>Xuất xứ</span>
                                        <div><?php echo $data['Origin'] ?></div>
                                    </li>
                                    <li>
                                        <span>Hình dáng</span>
                                        <div><?php echo $data['Shape'] ?></div>
                                    </li>
                                    <li>
                                        <span>Size hộp</span>
                                        <div><?php echo $data['Size'] ?></div>
                                    </li>
                                    <li>
                                        <span>Hạn sử dụng</span>
                                        <div><?php echo $data['Expiry'] ?></div>
                                    </li>
                                    <li>
                                        <span>Lưu ý</span>
                                        <div><?php echo $data['Note'] ?></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="<?php if ($data['CategoryID'] != null) {
                                            echo 'info-reviews review-text tab-pane fade in';
} else {
                                        echo 'info-reviews moreinfo tab-pane fade in active';
                                    } ?>" id="reviews">
                            <div class="about-author">
                                <!-- comments -->
                                <div class="post-comments">
                                    <!-- comment -->
                                    <div class="fb-comments"
                                        data-href="https://dxdbloger.000webhostapp.com?act=detail&id=<?php echo $data['ProductID'] ?>"
                                        data-numposts="5" data-width=""></div>
                                    <!-- /comment -->
                                </div>
                                <!-- /comments -->
                            </div>
                            <hr />
                            <div class="your-rating log-title">
                                <h3>Góp ý :</h3>
                            </div>
                            <div class="custom-input">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-mail">
                                                <span>Subject</span>
                                                <input type="text" name="subject">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="custom-mess">
                                                <textarea name="contents" placeholder="Contents"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="submit-text">
                                                <input type="submit" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- reviews area end -->
    </div>
</div>
<!-- product-details section end -->
<!-- related-products section start -->
<section class="single-products section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>Sản phẩm tương tự</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <?php foreach ($data_lq as $row) { ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-product">
                    <div class="product-f">
                        <a href="?act=detail&id=<?php echo $row['ProductID'] ?>"><img
                                src="public/<?php echo $row['ProductImage1'] ?>" alt="Product Title"
                                class="img-products" /></a>
                        <div class="actions-btn">
                            <a href="?act=detail&id=<?php echo $row['ProductID'] ?>"><i class="mdi mdi-cart"></i></a>
                            <a href="" data-toggle="modal"><i class="mdi mdi-eye"></i></a>
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
            <?php } ?>
            <!-- single product end -->
        </div>
    </div>
</section>
<?php } else {
    include_once "Views/error-404.php";
} ?>
<!-- related-products section end -->
<!-- quick view start -->
<?php
require_once "Views/quickview.php"
?>
<script>
window.fbAsyncInit = function() {
    FB.init({
        appId: '2652621865018691',
        xfbml: true,
        version: 'v7.0'
    });
    FB.AppEvents.logPageView();
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- quick view end -->
