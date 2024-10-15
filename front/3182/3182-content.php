<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1354">
    <div class="container">
        <div class="related_products">
            <h2>RELATED PRODUCTS</h2>
            <ul class="nav">
                <li>
                    <div class="add_cart_fix">
                        <div class="add_cart2_fix">
                            <a href="">
                                <span>ADD TO CART</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-related">
                        <span class="sale">SALE</span>
                        <img src="runing-shop-7-300x300.jpg" alt="">

                    </div>
                    <div class="wrapper">
                        <h4><a href="https://trackstore.qodeinteractive.com/product/red-jacket/">SHOES</a></h4>
                        <div class="wish-sale"></div>

                        <span class="price1">
                            <bdi><span class="woocommerce-Price-currencySymbol">$</span><del>70.00</del></bdi>
                        </span>
                        <span class="price">
                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>50.00</bdi>
                        </span>
                    </div>
                    <div class="wrapper2">
                        <div class="abc"><a href="https://trackstore.qodeinteractive.com/product-category/ski-jacket/" rel="tag">Running</a></div>
                        <div class="rating"></div>
                    </div>
                </li>

                <li>
                <div class="add_cart_fix">
                        <div class="add_cart2_fix">
                            <a href="">
                                <span>ADD TO CART</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-related">
                        <img src="Untitled-16.jpg" alt="">
                        
                    </div>

                    <div class="wrapper">
                        <h4><a href="https://trackstore.qodeinteractive.com/product/red-jacket/">LEGGINGS GRAY</a></h4>
                        <div class="wish"></div>
                        <span class="price">
                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>60.00</bdi>
                        </span>

                    </div>
                    <div class="wrapper2">
                        <div class="abc"><a href="https://trackstore.qodeinteractive.com/product-category/ski-jacket/" rel="tag">Sport</a></div>
                        <div class="rating"></div>
                    </div>
                </li>

                <li>
                <div class="add_cart_fix">
                        <div class="add_cart2_fix">
                            <a href="">
                                <span>ADD TO CART</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-related">
                        <img src="ski-shop-f-1-300x300.jpg" alt="">
                        
                    </div>

                    <div class="wrapper">
                        <h4><a href="https://trackstore.qodeinteractive.com/product/red-jacket/">SKI JACKET</a></h4>
                        <div class="wish"></div>
                        <span class="price">
                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>69.00</bdi>
                        </span>

                    </div>
                    <div class="wrapper2">
                        <div class="abc"><a href="https://trackstore.qodeinteractive.com/product-category/ski-jacket/" rel="tag">Ski Jacket</a></div>
                        <div class="rating-4S"></div>
                    </div>
                </li>

                <li>
                <div class="add_cart_fix">
                        <div class="add_cart2_fix">
                            <a href="">
                                <span>ADD TO CART</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-related">
                        <img src="runing-shop-8-300x300.jpg" alt="">
                        
                    </div>

                    <div class="wrapper">
                        <h4><a href="https://trackstore.qodeinteractive.com/product/red-jacket/">SPORT SHOES</a></h4>
                        <div class="wish"></div>
                        <span class="price">
                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>70.00</bdi>
                        </span>

                    </div>
                    <div class="wrapper2">
                        <div class="abc"><a href="https://trackstore.qodeinteractive.com/product-category/ski-jacket/" rel="tag">Running</a></div>
                        <div class="rating-4S"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>