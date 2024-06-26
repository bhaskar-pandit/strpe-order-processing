<script>
    if(window.location.hash == ""){ 
        window.location.href = window.location.pathname+"#/"+window.location.search;
    }
</script>
<link rel="stylesheet" href="<?php echo plugin_dir_url( __DIR__ ) ?>template/assets/style.css">
<title>Initate Payment</title>

<div class="loader__container processing__container">
    <div class="loader__inner">
        <div class="icon__container">                
                <img src="<?php echo plugin_dir_url( __DIR__ ) ?>template/assets/credit-card.gif" alt="">
        </div>
        <div class="text__container">
            <h2>Redirecting To Secure Payment</h2>
            <p>Please wait while we generate secure payment gateway.</p>
        </div>
    </div>
</div>


<div class="loader__container error__container" style="display: none;">
    <div class="loader__inner">
        <div class="icon__container">
            <svg id="error" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                <circle id="circle" cx="50" cy="50" r="46" fill="transparent" />
                <line class="cross" x1="30" y1="30" x2="70" y2="70" style="stroke:#e56f6f;stroke-width:6" />
                <line class="cross" x1="70" y1="30" x2="30" y2="70" style="stroke:#e56f6f;stroke-width:6" />
            </svg>
        </div>
        <div class="text__container error">
            <h2>Error!</h2>
            <p>Sorry, there was an error processing your request.</p>
            <p id="error_message"></p>
        </div>
    </div>
</div>
<?php
    $HTTP_REFERER = parse_url($_SERVER['HTTP_REFERER']);
    parse_str($HTTP_REFERER['query'], $QUERY_STRING_ENCODE);
?>
<script>
    const __CONFIG__ = {
        'action' : "initate_payment",
        'ajaxurl': "<?=admin_url( 'admin-ajax.php' )?>",
        // 'ajaxurl': "https://jay-workable-locust.ngrok-free.app/Woo-Stripe/safe/wp-admin/admin-ajax.php",
        'cue': "<?=$QUERY_STRING_ENCODE['cue']?>",
        'paymentid': ""
    };
</script>
<script src="<?php echo plugin_dir_url( __DIR__ ) ?>template/assets/stripe-order-processing.js"></script>