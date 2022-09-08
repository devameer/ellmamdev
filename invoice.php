<?php
if (isset($_GET['invoice_id']) && !empty($_GET['invoice_id'])) {
    include 'includes/functions.php';
    $invoice = getInvoiceById((int)$_GET['invoice_id']);
    if ($invoice == null) {
        include('404.php');
        exit;
    }
}else{
    include('404.php');
        exit;
}

include 'includes/header.php';
?>

<style>
.navbar-offcanvas .logo img {
    filter: brightness(20.5);
}
footer {
    display: none;
}

.nav-bar {
    display: none;
}

.template-page-head {
    min-height: 100vh;
    display:flex;
    align-items:center;
}
</style>
<div class="template-page-head pb-0">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-6">
                <div class="text">
                    <h1>الدفع </h1>
                    <div class="price">
                        <h3>السعر</h3>
                        <span><?= $invoice['total_price'] ?> ريال</span>
                    </div>
                    <div class="btn-pay">
                        <a href="<?= $invoice['next_url'] ?>" class="btn">الذهاب لصفحة الدفع</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="img">
                    <img src="/assets/images/payment.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php' ?>