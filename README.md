# delete-order-in-shopify
How to delete order in shopify?
<!-- wp:paragraph -->
<p>Shopify is one of the more using platforms for commerce business. It is easy to manage the system with integrated functionality or everything itself.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>You can manage the content from admin, You can manage the section of your website from settings easily.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We can manage our customers, orders from admin.<br><br>By default, we do not get any feature to delete the orders in Shopify. Suppose if you make some demo orders in admin and want to delete them then it is not possible. You need to make an API call to delete the orders automatically</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>You need to make an external API script to delete the order from your admin.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We don't have access to the database in Shopify so Shopify by default provides the API to manage the extra feature in Shopify.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>There are different types of API in Shopify you can use <a href="https://shopify.dev/api/admin-rest/2022-01/resources/order#delete-orders-order-id" rel="nofollow">this API to delete the orders</a> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>You can simply copy the script from the above-mentioned URL Shopify provides CURL, NODEJS, PHP code to hit the API</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>There are different types of approaches to delete the orders from the admin.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Here is one example of the PHP code which you can use to delete the orders in Shopify.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Simple make one .PHP file and copy and paste the below-mentioned code.</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>&lt;?php

$API_KEY = 'API key';
$PASSWORD = 'access token';
$SHOP_URL = 'storename.shopify.com';
$SHOPIFY_API = "https://&#91;your api key]:&#91;access-token]@storename.shopify.com/admin/api/2021-10/orders/{orderid}.json";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $SHOPIFY_API);

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);
$response = curl_exec ($curl);
curl_close ($curl);

echo $response;

?>

Simply copy and paste the script in your php file and replace the api-key ,access-token and store name. Make sure you need to pass order_id at the end of the API key.

You can find order id in admin as mentioned in the screeshot.
</code></pre>
<!-- /wp:code -->
