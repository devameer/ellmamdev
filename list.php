<!DOCTYPE html>
<html dir="rtl" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/style-rtl.css" />
  </head>
  <body>
    <div class="nav-bar" data-aos="fade-down">
      <nav class="navbar navbar-expand-md navbar-offcanvas">
        <div class="container">
          <a class="navbar-brand logo" href="/">
            <img src="assets/images/logo-white.svg" alt="" />
          </a>
          <ul class="navbar-nav navbar-top">
            <li class="nav-item active">
              <a class="nav-link" href="/">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about.html">من نحن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/list.html">اللوائح</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/contact.html">إتصل بنا</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/single.html">صفحة اللائح</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">English</a>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right navbar-icon"
            type="button"
            data-toggle="collapse"
            data-target="#navbar-mobile"
            aria-controls="navbar-mobile"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </button>
          <div class="navbar-collapse collapse ml-auto" id="navbar-mobile">
            <ul class="navbar-nav ml-auto">
              <li class="nav-image">
                <img src="assets/images/logo.svg" alt="" />
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="list-filters">
      <div class="container">
        <div class="title">
          <h1>جميع اللوائح</h1>
        </div>
        <div class="filters">
          <form action="">
            <div class="row g-1">
              <div class="col-lg-4">
                <div class="form-group">
                  <div class="icon">
                    <svg>
                      <use xlink:href="/assets/images/icons.svg#title"></use>
                    </svg>
                  </div>
                  <label for="">إسم اللائح</label>
                  <input
                    class="form-control"
                    placeholder="إسم اللائح هنا"
                    name=""
                    id=""
                  />
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <div class="icon">
                    <svg>
                      <use xlink:href="/assets/images/icons.svg#type"></use>
                    </svg>
                  </div>
                  <label for="">نوع اللائح</label>

                  <select class="form-control" name="" id="">
                    <option value="#">النوع</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <div class="icon">
                    <svg>
                      <use xlink:href="/assets/images/icons.svg#category"></use>
                    </svg>
                  </div>
                  <label for="">تصنيف اللائح</label>

                  <select class="form-control" name="" id="">
                    <option value="#">التصنيف</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group">
                  <div class="icon">
                    <svg>
                      <use xlink:href="/assets/images/icons.svg#calendar"></use>
                    </svg>
                  </div>
                  <label for="">تاريخ نشر اللائح</label>

                  <select class="form-control" name="" id="">
                    <option value="#">تاريخ النشر</option>
                  </select>

                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg">
                <div class="form-group search-btn">
                  <label for=""></label>

                  <button class="btn btn-filter">
                    <svg>
                      <use xlink:href="/assets/images/icons.svg#search"></use>
                    </svg>
                    <span>بحث</span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="rules-list">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="single-rule-2">
              <div class="title">
                <h4>لائح لائح</h4>
                <span>قسم قسم</span>
              </div>
              <div class="img">
                <span
                  ><svg>
                    <use
                      xlink:href="/assets/images/icons.svg#document"
                    ></use></svg
                ></span>
                <img
                  src="http://hr-excellence.net/assets/images/video.png"
                  alt=""
                />
              </div>
              <div class="desc">
                <p>
                  وريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
                  العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم
                  مطبوعه
                </p>
              </div>
              <div class="link-more">
                <a href="/single.html">المزيد</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="single-rule-2">
              <div class="title">
                <h4>لائح لائح</h4>
                <span>قسم قسم</span>
              </div>
              <div class="img">
                <span
                  ><svg>
                    <use
                      xlink:href="/assets/images/icons.svg#video"
                    ></use></svg
                ></span>
                <img
                  src="http://hr-excellence.net/assets/images/video.png"
                  alt=""
                />
              </div>
              <div class="desc">
                <p>
                  وريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
                  العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم
                  مطبوعه
                </p>
              </div>
              <div class="link-more">
                <a href="/single.html">المزيد</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="900">
            <div class="single-rule-2">
              <div class="title">
                <h4>لائح لائح</h4>
                <span>قسم قسم</span>
              </div>
              <div class="img">
                <span
                  ><svg>
                    <use
                      xlink:href="/assets/images/icons.svg#document"
                    ></use></svg
                ></span>
                <img
                  src="http://hr-excellence.net/assets/images/video.png"
                  alt=""
                />
              </div>
              <div class="desc">
                <p>
                  وريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
                  العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم
                  مطبوعه
                </p>
              </div>
              <div class="link-more">
                <a href="/single.html">المزيد</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="footer-top">
          <div class="logo">
            <img
              src="http://hr-excellence.net/assets/images/hr-logo.png"
              alt=""
            />
          </div>

          <ul class="links">
            <li>
              <a href="#">الرئيسية</a>
            </li>

            <li>
              <a href="https://althria.co/offers">الثريا</a>
            </li>

            <li>
              <a href="https://althria.co">بطاقة الثريا</a>
            </li>

            <li>
              <a href="/blog">المدونة</a>
            </li>

            <li>
              <a href="http://moashr.net/">مؤشر للوظائف</a>
            </li>
          </ul>

          <div class="contact">
            <h5>يمكنكم التواصل معنا عبر</h5>

            <ul>
              <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>

              <li>
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>

              <li>
                <a href=""><i class="fab fa-instagram"></i></a>
              </li>

              <li>
                <a href=""><i class="fab fa-whatsapp"></i></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-bottom">
          <h6>جميع الحقوق محفوظة @ 2020</h6>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
