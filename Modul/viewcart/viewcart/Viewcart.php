<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <link href="css/styles.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type">
            <main class="l-main">
                <div class="main row">	

                    <article>
                        <div class="body field">
                            <div class="woocommerce">
                                <form action="http://themes.webdevia.com/factory/cart/" method="post">


                                    <table class="shop_table shop_table_responsive cart" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="cart_item">

                                                <td class="product-remove">
                                                    <a href="http://themes.webdevia.com/factory/cart/?remove_item=7cbbc409ec990f19c78c75bd1e06f215&amp;_wpnonce=a3d497a332" class="remove" title="Remove this item" data-product_id="70" data-product_sku="">×</a>					</td>

                                                <td class="product-thumbnail">
                                                    <a href="http://themes.webdevia.com/factory/product/flying-ninja/"><img width="180" height="180" src="http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="poster_2_up" srcset="http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-180x180.jpg 180w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-150x150.jpg 150w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-300x300.jpg 300w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-768x768.jpg 768w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-140x140.jpg 140w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-370x370.jpg 370w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up-600x600.jpg 600w, http://themes.webdevia.com/factory/wp-content/uploads/2013/06/poster_2_up.jpg 1000w" sizes="(max-width: 180px) 100vw, 180px"></a>					</td>

                                                <td class="product-name" data-title="Product">
                                                    <a href="http://themes.webdevia.com/factory/product/flying-ninja/">Flying Ninja</a>					</td>

                                                <td class="product-price" data-title="Price">
                                                    <span class="amount">£12.00</span>					</td>

                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <input type="number" step="1" min="0" max="" name="cart[7cbbc409ec990f19c78c75bd1e06f215][qty]" value="2" title="Qty" class="input-text qty text" size="4">
                                                    </div>
                                                </td>

                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="amount">£24.00</span>					</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="actions">

                                                    <div class="coupon">

                                                        <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">

                                                    </div>

                                                    <input type="submit" class="button" name="update_cart" value="Update Cart">


                                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="a3d497a332"><input type="hidden" name="_wp_http_referer" value="/factory/cart/">			</td>
                                            </tr>

                                        </tbody>
                                    </table>


                                </form>

                                <div class="cart-collaterals">

                                    <div class="cart_totals ">


                                        <h2>Cart Totals</h2>

                                        <table cellspacing="0" class="shop_table shop_table_responsive">

                                            <tbody><tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal"><span class="amount">£24.00</span></td>
                                                </tr>






                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="amount">£24.00</span></strong> </td>
                                                </tr>


                                            </tbody></table>

                                        <div class="wc-proceed-to-checkout">

                                            <a href="#" class="checkout-button button alt wc-forward">
                                                Proceed to Checkout </a>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </article>

                </div>  
            </main>
        </div>          
    </body>