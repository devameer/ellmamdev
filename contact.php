<?php include 'header.php' ?>
<style>
.navbar-offcanvas .logo img {
    filter: brightness(20.5);
}
</style>
<div class="template-page-head">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col">
                <div class="text">
                    <h1>إتصل بنا</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                تواصل معنا
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col">
                <div class="img">
                    <img src="/assets/images/communicate.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner-page contact">
    <div class="container">
        <div class="contact-inner">
            <div class="row">
                <div class="col-lg-9">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <div class="head">
                            <h2>نسعد بتواصلكم معنا</h2>
                            <p>نسعد بتواصلكم معنانسعد بتواصلكم معنانسعد بتواصلكم معنا</p>
                        </div>
                        <form method="POST" action="https://althria.co/contact-us" accept-charset="UTF-8">
                            <input name="_token" type="hidden" value="GlDinjykE9snJ6JwNGZtpGEJYnbrlN8jsaLk4Fph" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="control-label">الإسم</label>
                                        <input class="form-control" name="name" type="text" value="" id="name" />
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="control-label">الإيميل</label>
                                        <input class="form-control" name="email" type="text" value="" id="email" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="control-label">عنوان الرسالة</label>
                                        <input class="form-control" name="title" type="text" value="" id="title" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message" class="control-label">الرسالة</label>
                                        <textarea class="form-control" cols="30" rows="10" name="message"
                                            id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">إرسال</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-details">
                        <div class="img" data-aos="fade-up" data-aos-delay="600">
                            <img src="https://althria.co/images/contact.png" alt="" />
                        </div>
                        <div class="social" data-aos="fade-up" data-aos-delay="900">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="/assets/images/icons.svg#phone"></use>
                                            </svg>
                                        </div>
                                        <span>000 000 0000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="/assets/images/icons.svg#email"></use>
                                            </svg>
                                        </div>
                                        <span>example@mail.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="/assets/images/icons.svg#marker"></use>
                                            </svg>
                                        </div>
                                        <span>الرياض ، السعودية</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>