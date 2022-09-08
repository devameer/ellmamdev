<?php include 'header.php' ?>
<style>
.navbar-offcanvas {
    display: none;
}
</style>
<style>
payment-page,
.success-page {
    background: #f5f5f5;
    padding-top: 70px;
    text-align: right;
}

.payment-page .bg-light,
.success-page .bg-light {
    background: #fff !important;
}

.payment-page .bg-light-2,
.success-page .bg-light-2 {
    background-color: #f8f8fa !important;
}
</style>
<div className="success-page">
    <div v-if="payment" className="container">
        <div className="row align-items-center justify-content-center">
            <!-- {/*
        <div className="col-lg-4">
          <div className="success-img">
            <img src="/img/success-invoice.svg" alt="" />
          </div>
        </div>
        */} -->
            <div className="col-lg-8">
                <div className="success-title">
                    <h2 className="text-8">تمت عمليه الدفع بنجاح</h2>

                    <p className="lead">سوف يصلك بريد إلكتروني بتفاصيل العملية</p>
                </div>
                <div className="success-list">
                    <div className="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
                        <div className="row">
                            <div className="col-sm text-muted font-weight-bold">
                                رقم افاتورة
                            </div>
                            <div className="col-sm text-sm-right font-weight-600" dir="ltr">
                                {{ payment.invoice_id }}
                            </div>
                        </div>
                        <hr />
                        <div className="row">
                            <div className="col-sm text-muted font-weight-bold">
                                مصدر الفاتورة
                            </div>
                            <div className="col-sm text-sm-right font-weight-600">
                                {{ payment.invoice_reference }}
                            </div>
                        </div>
                        <hr />
                        <div className="row">
                            <div className="col-sm text-muted font-weight-bold">
                                حالة الفاتورة
                            </div>
                            <div className="col-sm text-sm-right font-weight-600">
                                {{ payment.status_message }}
                            </div>
                        </div>
                        <!-- <hr />
              <div className="row">
                <div className="col-sm text-muted font-weight-bold">
                  حالة المعاملة
                </div>
                <div className="col-sm text-sm-right font-weight-600">
                  <span className="field-status">
                    {payment.status_message}
                  </span>
                </div>
              </div>
              <hr />
              <div className="row">
                <div className="col-sm text-muted font-weight-bold">
                  {t["customer_name"]}
                </div>
                <div className="col-sm text-sm-right font-weight-600">
                  {payment.first_name + " " + payment.last_name}
                </div>
              </div>
              <hr />
              <div className="row">
                <div className="col-sm text-muted font-weight-bold">
                  {t["phone"]}
                </div>
                <div className="col-sm text-sm-right font-weight-600">
                  {payment.phone}
                </div>
              </div>
              <hr />
              <div className="row">
                <div className="col-sm text-muted font-weight-bold">
                  {payment.item_type == "Hotel" ? t["hotel_name"] :
                  t["package_name"]}
                </div>
                <div className="col-sm text-sm-right font-weight-600">
                  {payment.item ? payment.item.name : null}
                </div>
              </div>
              <hr />
              <div className="row">
                <div className="col-sm text-muted font-weight-bold">
                  {t["payment_amount"]}
                </div>
                <div className="col-sm text-sm-right text-6 font-weight-500">
                  <span className="room-single-price"> ${payment.price} </span
                  >{" "}
                </div>
              </div> -->
                    </div>
                    <!-- {/*
            <div className="text-center">

              <a
                href="#"
                className="btn-link text-muted mx-3 my-2 align-items-center d-inline-flex"
                ><span className="text-5 mr-2"
                  ><i className="fa fa-file-pdf"></i></span
                >Save as PDF</a
              >
              <a
                href="#"
                className="btn-link text-muted mx-3 my-2 align-items-center d-inline-flex"
                ><span className="text-5 mr-2"
                  ><i className="fa fa-print"></i></span
                >Print Receipt</a
              >
              <a
                href="#"
                className="btn-link text-muted mx-3 my-2 align-items-center d-inline-flex"
                ><span className="text-5 mr-2"
                  ><i className="fa fa-envelope"></i></span
                >Email Receipt</a
              >

            </div>
            */} -->
                </div>
            </div>
        </div>
    </div>

    <LoadingContent v-else />
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
</body>

</html>