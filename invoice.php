<?php
if (isset($_GET['invoice_id']) && !empty($_GET['invoice_id'])) {
    include 'includes/functions.php';
    $invoice = getInvoiceById((int)$_GET['invoice_id']);
    if ($invoice == null) {
        include('404.php');
        exit;
    }
}

include 'includes/header.php';
?>

<style>
.navbar-offcanvas .logo img {
    filter: brightness(20.5);
}
</style>
<div class="template-page-head">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-6">
                <div class="text">
                    <h1>الدفع </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/ ">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                الدفع
                            </li>
                        </ol>
                    </nav>
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
<div class="payment-page">
    <?= $invoice ?>
    <ul class="details-list">
        <li>
            <strong>
                الإسم
            </strong>
            <span>أمير العفش</span>
        </li>
        <li>
            <strong>
                الإسم
            </strong>
            <span>أمير العفش</span>
        </li>
        <li>
            <strong>
                الإسم
            </strong>
            <span>أمير العفش</span>
        </li>
        <li>
            <strong>
                الإسم
            </strong>
            <span>أمير العفش</span>
        </li>
        <li>
            <strong>
                الإسم
            </strong>
            <span>أمير العفش</span>
        </li>
        <li>
            <strong>
                الإسم
            </strong>
            <span>أمير العفش</span>
        </li>
    </ul>
    <div class="btn-pay">
        <a href="#" class="btn">الذهاب لصفحة الدفع</a>
    </div>
</div>


<?php include 'includes/footer.php' ?>