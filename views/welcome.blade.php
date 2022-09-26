<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AEC Academy  | Home Page </title>
<!-- Stylesheets -->
<link href="{{ asset('Frontend/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('Frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('Frontend/css/responsive.css') }}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{ asset('Frontend/css/color-switcher-design.css') }}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('Frontend/css/color-themes/default-theme.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('Frontend/images/AEC.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('Frontend/images/AEC.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header">
        
        
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <ul class="list">
						<li><span class="icon fas fa-envelope"></span> Riyadh,KSA</li>
						<li><span class="icon fas fa-phone"></span> <a href="tel:+966 5400 98736"> +966 5400 98736</a></li>
					</ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icons">
						<li><a href="https://www.facebook.com/advancededucationacademy"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="https://aeccourse.com"><span class="fab fa-google"></span></a></li>
						<li><a href="https://twitter.com/adv_edu_academy"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-skype"></span></a></li>
						<li><a href="https://www.linkedin.com/company/advanced-education-academy"><span class="fab fa-linkedin"></span></a></li>
					</ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="{{ asset('Frontend/images/AEC.png') }}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">الصفحة الرئيسية </a>
                                        <ul>
                                            <li><a href="index.html">الصفحة الرئيسية </a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                   
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="#">من نحن</a>
                                        <ul>
                                            <li><a href="about.html">من نحن </a></li>
											<li><a href="team.html">مدربينا </a></li>
											<li><a href="faq.html">كورساتنا </a></li>
											<li><a href="services.html">خدماتنا </a></li>
											<li><a href="gallery.html">اراء الطلبة </a></li>
											<li><a href="comming-soon.html">واجبات</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown has-mega-menu"><a href="#">خدماتنا</a>
										<div class="mega-menu">
											<div class="mega-menu-bar row clearfix">
												<div class="column col-md-3 col-xs-12">
													<h3>من نحن </h3>
													<ul>
														<li><a href="about.html">من نحن</a></li>
														<li><a href="team.html">مدربينا</a></li>
														<li><a href="faq.html">كورساتنا </a></li>
														<li><a href="services.html">خدماتنا </a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>افضل المدربين </h3>
													<ul>
														<li><a href="Instructors.html">محاضرين </a></li>
														<li><a href="Instructors-detail.html">تفاصيل المحاضربين </a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>المدونة </h3>
													<ul>
														<li><a href="blog.html">المدونة</a></li>
														<li><a href="blog-classic.html">احدث المقالات </a></li>
													
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>متجر المنتجات </h3>
													<ul>
														<li><a href="shop.html">المتجر</a></li>
														<li><a href="shop-single.html">تسوق</a></li>
														<li><a href="shoping-cart.html">سلة الشراء</a></li>
														<li><a href="checkout.html">صفحة الدفع </a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li class="dropdown"><a href="#">المدربين </a>
                                        <ul>
                                            <li><a href="Instructors.html">المدربين</a></li>
                                            <li><a href="Instructors-detail.html">احجز مدرب </a></li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="#">كورساتنا </a>
                                        <ul>
                                            <li><a href="department.html">كورساتنا</a></li>
                                            <li><a href="department-detail.html">احجز كورس </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">المدونة</a>
                                        <ul>
                                            <li><a href="blog.html">المدونة </a></li>
											<li><a href="blog-classic.html">احدث المقالات </a></li>
                                            
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="#">المتجر </a>
                                        <ul>
                                            <li><a href="shop.html">المتجر</a></li>
                                            <li><a href="shop-single.html">تسوق/a></li>
                                            <li><a href="shoping-cart.html">سلة السراء</a></li>
                                            <li><a href="checkout.html">صفحة الدفع</a></li>
                                        </ul>
                                    </li>
                                    @if (Route::has('login'))
               
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    <li><a href="contact.html">تواصل معانا </a></li>
                                    <ul>
                                        @else
                                        <li><a href="{{ route('login') }}" >Login</a></li>
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" >Register</a></li>
                                    @endif
                                @endauth
                               @endif
                                    </ul>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
							<!-- Search Btn -->
							<div class="search-box-btn"><span class="icon flaticon-search"></span></div>
                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">احجز محاضرة </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="{{ asset('Frontend/images/AECsm.png') }}" alt="" title=""></a>
                </div>
                
				<!--Right Col-->
                <div class="right-col pull-right">
					<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.html"><img src="{{ asset('Frontend/images/AEC.png') }}" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
	
	<!-- Main Slider -->
	<section class="main-slider">
		<div class="banner-carousel">
			<!-- Swiper -->
			<div class="swiper-wrapper">

				<div class="swiper-slide slide"  style="background-image:url({{ asset('Frontend/images/NewCover-03.png') }})">
					<div class="auto-container">
						<div class="content clearfix">
							<div class="title">اهلا بيك في كورساتنا </div>
							<h2>دراسة ممتعة معانا </h2>
							<div class="text">استمتع بحل كل مشاكلك الداسية وحل واجباتك معانا </div>
							<div class="btn-box clearfix">
								<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">خدماتنا </span></a>
								<a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>555–123–2323</a>
							</div>
						</div>
					</div>
				</div>                                                           

				<div class="swiper-slide slide" style="background-image:url({{ asset('Frontend/images/NewCover-02.png') }})">
					<div class="auto-container">
						<div class="content">
							<div class="title">اهلا بيك في كورساتنا</div>
							<h2>دراسة ممتعة معانا</h2>
							<div class="text">استمتع بحل كل مشاكلك الداسية وحل واجباتك معانا </div>
							<div class="btn-box">
								<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">خدماتنا</span></a>
								<a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>555–123–2323</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide slide" style="background-image:url({{ asset('Frontend/images/NewCover3-01.png') }})">
					<div class="auto-container">
						<div class="content">
							<div class="title">خبراء التدريب بالشرق الاوسط</div>
							<h2>نحن نهتم بتفوقك </h2>
							<div class="text">مع خبراء التدريب لدينا نضمن لك افضل المورسات للاعداد للامتحانات:</div>
							<div class="btn-box">
								<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">خدماتنا</span></a>
								<a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>+966 5400 98736</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<!-- End Main Slider -->
	
	<!-- Department Section -->
	<section class="department-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>خدماتنا </h2>
				<div class="separator"></div>
			</div>
			
			<div class="services-carousel owl-carousel owl-theme">
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">كورسات </a></h3>
						</div>
						<div class="text">مهمتنا مساعدتك في المذاكرة والنجاح والانضام الي طلبتنا المتفوقين في كل المجالات </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">حل واجبات </a></h3>
						</div>
						<div class="text">متقلقش من الواجبات نستطيع مساعداتك وضمان افضل الحلول للواجبات والالتزامات التعليمية لديك  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">الاعداد للامتحانات </a></h3>
						</div>
						<div class="text">اضمن افضل الدرجات واحسن النتائج مع خبراء التدريب لدينا  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">اسئلة الامتحانات</a></h3>
						</div>
						<div class="text">من خلال خبراء التدريب لدينا وفريق عملنا نستطيع تقديم افضل ،واحدث الاسئلة للاعداد للامتحانات  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">افضل المحاضرين </a></h3>
						</div>
						<div class="text">لدينا افضل المدربين بخبرات تدريبية كبيرة لمساعدتك في الحصول علي افضل الدرجات  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">احجز محاضرة </a></h3>
						</div>
						<div class="text">يمكنك حجز محاضرة معانا في المواد التي ترغب في التميز والنجاح فيها  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
						
							<h3><a href="#">الخدمات البحثية  </a></h3>
						</div>
						<div class="text">لدينا فريق عمل يستطيع مساعدتك في الخدمات البحثية المتكاملة بدا من اقتاراح العناوين للدراسة وخطة الدراسة </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">استشارات </a></h3>
						</div>
						<div class="text">خدمة الاستشارات التدريبية تساعدك في اختيار افضل الكتب والمواد العلميه وطرق المذاكره  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							
							<h3><a href="#">ماده علمية ومذكرات </a></h3>
						</div>
						<div class="text">لدينا افضل المواد العلميه في جميع المجالات التي تساعدك في التميز والتفوق  </div>
						<div class="read-outer">
							<a href="#" class="read-more">اعرف اكثر  <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Department Section -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
		<div class="outer-section clearfix">
        	
           <!--Image Column-->
        	<div class="image-column" style="{{ asset('Frontend/background-image: url(images/960-660.png)') }}">
            	<div class="image">
                	<img src="{{ asset('Frontend/images/resource/image-1.jpg') }}" alt="">
                </div>
            </div>
            <!--End Image Column-->
           
            <!--Content Column-->
            <div class="content-column">
            	<div class="content-box">
					<div class="sec-title">
						<h2> خبراء التدريب والكورسات بالشرق الاوسط</h2>
						<div class="separator style-two"></div>
					</div>
					<div class="text">
						<p>نساعدكم في تنفيذ كافة الواجبات الطلابية في جميع المواد العلميه منها والنظرية للحصول علي الدرجات النهائية </p>
						<p>حيث لدينا مجموعة من الكوادر العلمية في كافة التخصصات العلمية والنظرية في الشرق الاوسط جاهزون لمساعدتك علي مدار ٢٤ ساعة </p>
					</div>
					<div class="row clearfix">
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="list-style-one">
								<li><span class="icon flaticon-medical-stethoscope-variant"></span>كورسات متنوعة </li>
								<li><span class="icon flaticon-doctor"></span>افضل المدربين </li>
							</ul>
						</div>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="list-style-one">
								<li><span class="icon flaticon-ambulance-side-view"></span>الاعداد للامتحانات </li>
								<li><span class="icon flaticon-medical-kit"></span>الدراسة في اي وقت ومكان </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>افضل الخدمات التعليمية المتكاملة </h2>
				<div class="separator"></div>
			</div>
			
			<div class="row clearfix">
			
				<!-- Left Column -->
				<div class="left-column pull-left col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Service Block -->
						<div class="service-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-doctor-stethoscope"></span>
								</div>
								<h3><a href="Instructors-detail.html">خبراء التدريب </a></h3>
								<div class="text">تواصل مع افضل خبراء التدريب بالشرق الاوسط <br> نضمن لك التفوق والتميز</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-operating-room"></span>
								</div>
								<h3><a href="Instructors-detail.html"> المساعدة في انشاء البحوث العلمية </a></h3>
								<div class="text">تقديم المساعدة في انشاء البحوث العلمية ونشرها في المجالات العالمية المشهورة  Research Preparations</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-van"></span>
								</div>
								<h3><a href="Instructors-detail.html">حجز امتحان البرومترك </a></h3>
								<div class="text">حجز امتحان البرومترك وبيرسون فيو لكل التخصصات ( اسنان - صيدلة - اطباء بشري - تمريض - فنيين - علاج طبيعي - علم نفس )  <br> </div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Circles Column -->
				<div class="circles-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<div class="circles">
							<div class="circle-one"></div>
							<div class="circle-two"></div>
							<div class="circle-three"></div>
						</div>
						
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column pull-right col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Service Block -->
						<div class="service-block-two">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-water"></span>
								</div>
								<h3><a href="Instructors-detail.html">حل واجبات طلابيه </a></h3>
								<div class="text">نساعدك في حل جميع الوواجبات الطلابية  <br> تواصل معانا</div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block-two">
							<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-pharmacy"></span>
								</div>
								<h3><a href="Instructors-detail.html">خدمات بحيثة متكاملة </a></h3>
								<div class="text">نساعدك في عمل ابحاث اكاديمية </div>
							</div>
						</div>
						
						<!-- Service Block -->
						<div class="service-block-two">
							<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon flaticon-nurse"></span>
								</div>
								<h3><a href="Instructors-detail.html">رعاية فائقة علي مدار الساعة </a></h3>
								<div class="text">نهتم بتفوقك ونجاحك بفريق عمل من الخبراء <br> </div>
							</div>
						</div>
						
					</div>
				</div>
			
			</div>
			
		</div>
	</section>
	
	<!-- Counter Section -->
	<section class="counter-section" style="{{ asset('Frontend/background-image: url(images/background/pattern-3.png)') }}">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="2350">0</span>
								</div>
								<h4 class="counter-title">طالب متفوق</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									+<span class="count-text" data-speed="3000" data-stop="350">0</span>
								</div>
								<h4 class="counter-title">مدرب ومحاضر</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="2150">0</span>
								</div>
								<h4 class="counter-title">اعدادللامتحانات </h4>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									+<span class="count-text" data-speed="2500" data-stop="225">0</span>
								</div>
								<h4 class="counter-title">شهادات تميز</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>افضل المدربين بالشرق الاوسط </h2>
				<div class="separator"></div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('Frontend/images/Teacher-01.png') }}" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">احجز ميعاد</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Mr Ahmed </a></h3>
							<div class="designation">Math Specialist</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('Frontend/images/Teacher-02.png') }}" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">احجز ميعاد </a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Robet Samith</a></h3>
							<div class="designation">Dentist</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('Frontend/images/Teacher-03.png') }}" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">احجز ميعاد</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Sharon Laura</a></h3>
							<div class="designation">Englsih Instructor</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('Frontend/images/Teacher-04.png') }}" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fab fa-google"></span></a></li>
									<li><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-skype"></span></a></li>
									<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
								<a href="#" class="appointment">احجز ميعاد</a>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="#">Dr. Alex Furgosen</a></h3>
							<div class="designation">Science Specialist</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- FullWidth Section -->
	<section class="fullwidth-section">
		<div class="outer-container">
			<div class="clearfix">
			
				<!-- Left Column -->
				<div class="left-column" style="background-image: url(images/Books.png)">
					<div class="inner-column clearfix">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-contract-1"></span>
							</div>
							<div class="title">محتاج حد يساعدك في المذاكره </div>
							<h2>حدد ميعاد </h2>
							<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">احجز الان </span></a>
						</div>
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column">
					<div class="inner-column">
						
						<!-- Upper Box -->
						<div class="upper-box">
							<div class="icon flaticon-alarm-clock"></div>
							<h3>ساعات العمل الرسمية</h3>
						</div>
						<ul class="time-list">
							<li class="clearfix"><span class="left-span pull-left">Monday - Friday</span><span class="right-span pull-right">08:00am - 10:00pm</span></li>
							<li class="clearfix"><span class="left-span pull-left">Saturday - Sunday</span><span class="right-span pull-right">09:00am - 06:00pm</span></li>
							<li class="clearfix"><span class="left-span pull-left">Emergency Services</span><span class="right-span pull-right">24 hours Open</span></li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End FullWidth Section -->
	
	<!-- Testimonial Section -->
    <section class="testimonial-section">
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>اراء طلبتنا المتفوقين </h2>
				<div class="separator"></div>
			</div>
        	<div class="testimonial-outer" style="background-image: url(images/background/pattern-4.png)">
            
            	<!--Client Testimonial Carousel-->
                <div class="client-testimonial-carousel owl-carousel owl-theme">
                
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">كورسات الاكاديمية ساعدتني كثير في الحصول علي اعلي الدرجات اسلوب المدربين علي اعلي مستوي وخدمة العملاءممتازة</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">كورسات الاكاديمية ساعدتني كثير في الحصول علي اعلي الدرجات اسلوب المدربين علي اعلي مستوي وخدمة العملاءممتازة</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">كورسات الاكاديمية ساعدتني كثير في الحصول علي اعلي الدرجات اسلوب المدربين علي اعلي مستوي وخدمة العملاءممتازة</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">كورسات الاكاديمية ساعدتني كثير في الحصول علي اعلي الدرجات اسلوب المدربين علي اعلي مستوي وخدمة العملاءممتازة</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">كورسات الاكاديمية ساعدتني كثير في الحصول علي اعلي الدرجات اسلوب المدربين علي اعلي مستوي وخدمة العملاءممتازة</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="quote-icon flaticon-quote"></div>
                            <div class="text">كورسات الاكاديمية ساعدتني كثير في الحصول علي اعلي الدرجات اسلوب المدربين علي اعلي مستوي وخدمة العملاءممتازة</div>
                        </div>
                    </div>
                    
                </div>
				
				<!--Product Thumbs Carousel-->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('Frontend/images/ST-01.png') }}" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">طالب</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('Frontend/images/ST-02.png') }}" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('Frontend/images/ST-03.png') }}" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">طالب</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('Frontend/images/ST-01.png') }}" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('Frontend/images/ST-02.png') }}" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('Frontend/images/ST-03.png') }}" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Max Winchester</div>
								<div class="designation">Kidny Patient</div>
							</div>
                        </div>
                    </div>
                </div>
				
                
            </div>
        </div>
    </section>
    <!-- End Testimonial Section Two -->
		<!-- Default Section -->
		<section class="default-section" style="{{ asset('Frontend/') }}background-image:url(images/Grad.png)">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!-- Skill Column -->
					<div class="skill-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>نتائج واحصائيات</h2>
								<div class="separator"></div>
							</div>
							
							<!--Progress Levels-->
							<div class="progress-levels">
							   
								<!--Skill Box-->
								<div class="progress-box wow">
									<div class="inner count-box">
										<div class="bar">
											<div class="bar-innner">
												<div class="bar-fill" data-percent="90">
													<div class="skill-percent">
														<span class="count-text" data-speed="3000" data-stop="95">0</span>
														<span class="percent">%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="text">كورسات </div>
									</div>
								</div>
								
								<!--Skill Box-->
								<div class="progress-box wow">
									<div class="inner count-box">
										<div class="bar">
											<div class="bar-innner">
												<div class="bar-fill" data-percent="45">
													<div class="skill-percent">
														<span class="count-text" data-speed="3000" data-stop="45">0</span>
														<span class="percent">%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="text">اعداد لامتحانات </div>
									</div>
								</div>
								
								<!--Skill Box-->
								<div class="progress-box wow">
									<div class="inner count-box">
										<div class="bar">
											<div class="bar-innner">
												<div class="bar-fill" data-percent="85">
													<div class="skill-percent">
														<span class="count-text" data-speed="3000" data-stop="85">0</span>
														<span class="percent">%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="text">حل واجبات طلابية </div>
									</div>
								</div>
								
								<!--Skill Box-->
								<div class="progress-box wow">
									<div class="inner count-box">
										<div class="bar">
											<div class="bar-innner">
												<div class="bar-fill" data-percent="70">
													<div class="skill-percent">
														<span class="count-text" data-speed="3000" data-stop="70">0</span>
														<span class="percent">%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="text">حجز امتحانات </div>
									</div>
								</div>
									
								
							</div>
						
						</div>
					</div>
					
					<!-- Timeline Column -->
					<div class="timeline-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>جدول محاضراتنا الاسبوعي</h2>
								<div class="separator"></div>
							</div>
							<div class="text">تعرف علي جدول محاضراتنا الاسبوعية واحجز مقعد ليك </div>
							<ul class="timeline-list">
								<li>Monday - Friday <span>8.00  -  18.00</span></li>
								<li>Saturday <span>9.00  -  16.00</span></li>
								<li>Sunday <span>9.00  -  16.00</span></li>
							</ul>
							<div class="btn-box">
								<a class="theme-btn timeline-btn" href="#"><span class="icon flaticon-doctor"></span> instructors Time Table</a>
								<a class="theme-btn timeline-btn" href="#"><span class="icon flaticon-doctor"></span> Make Appointment</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- End Default Section -->
		
		<!-- Appointment Section -->
		<section class="appointment-section" style="{{ asset('Frontend/background-image:url(images/background/pattern-5.png)') }}">
			<div class="auto-container">
				
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="{{ asset('Frontend/images/Startnow.png') }}" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>احجز الان </h2>
								<div class="separator"></div>
							</div>
							
							<!-- Appointment Form -->
							<div class="appointment-form">
								<form method="post" action="appointment.html">
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required="">
											<span class="icon fa fa-user"></span>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="Email" required="">
											<span class="icon fa fa-envelope"></span>
										</div>
	
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="tel" name="phone" placeholder="Phone No" required="">
											<span class="icon fas fa-phone"></span>
										</div>
	
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="department" placeholder="Department" required="">
											<span class="icon fas fa-home"></span>
										</div>
	
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="day" placeholder="Day">
											<span class="icon fa fa-calendar"></span>
										</div>
	
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="time" placeholder="Time" class="">
											<span class="icon far fa-clock"></span>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
	
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Book Appointment</span></button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
				
			</div>
		</section>
		<!-- End of Appointment Form -->
    	<!-- Department Section Three -->
	<section class="department-section-three">
		<div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
		<div class="auto-container">
			<!-- Department Tabs-->
            <div class="department-tabs tabs-box">
				<div class="row clearfix">
                	<!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title light">
							<h2>خدماتنا <br> المتنوعة</h2>
							<div class="separator"></div>
						</div>
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn">كورسات مختلفة </li>
                            <li data-tab="#tab-department" class="tab-btn active-btn">حل واجبات طلابية </li>
                            <li data-tab="#tab-gastrology" class="tab-btn">حجز امتحانات </li>
							<li data-tab="#tab-cardiology" class="tab-btn">بنك الاسئلة </li>
							<li data-tab="#tab-eye" class="tab-btn">استشارات تدريبية </li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                    	<!--Tabs Container-->
                        <div class="tabs-content">
                        
                            <!-- Tab -->
                            <div class="tab" id="tab-urology">
                            	<div class="content">
									<h2>طور مهاراتك وأنت في مكانك!</h2>
									<div class="title">تعلم عن بعد وتميز بشهادات معتمدة AEC</div>
									<div class="text">
										<p>
											وجود نخبة متميزة من الخبراء و الاستشارين و الأساتذة  و الفنيين المتخصصين فى كل مجال .
											تتوافر العديد من الإمكانيات سواء قاعات تدريب او اجهزة ومعدات متخصصة بأعلى جودة لكل برنامج تدريبي تقدمه الاكاديمية
											يستطيع الاستفادة من الدورات و الكورسات التى تقدمها الاكاديمية مختلف الأعمار و التخصصات و الخلفيات العلمية وأيضا ذوى الاحتياجات الخاصة .
											</p>

									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>دورات تدريبية </h3>
											<div class="column-text">مهما كانت الدورة التدريبية التي تبحث عنها! تقدم أكاديمية التعليم المتطور AEC مجموعة واسعة من الدورات التدريبية والدبلومات في مجالات مختلفة، مثل الطب , الهندسة , الإدارة , المحاسبة, والاقتصاد , والاحصاء و القانون , التسويق, التصميم الجرافيكي, البرمجة, الشبكات, واللغات , والعناية الشخصية واللياقة البدنية , والسياحة والفنادق , والتنمية البشرية , والفنون الابداعية والتصميم , وغيرها من العلوم التى تساعد الطلاب على اقتناص فرصه عمل قم بتنزيل كتيبات الدورات الآن</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>مجالات مختلفة </h3>
											<div class="column-text">الدورات الطبية - الدورات الهندسية – دورات في ادارة المشاريع - دورات علوم الحاسب والبرمجه - دورات التسويق والتجارة الالكترونية - دورات اللغات - دورات في مجالات الاحصاء والاقتصاد والمحاسبة وادراة الاعمال - دورات التنمية البشرية - دورات القانون - دورات السياحة والفنادق - دورات الفنون الابداعية والتصميم - دورات العناية الشخصية واللياقة البدنية - دورات متنوعة</div>
										</div>
									</div>
									<a href="instructors-detail.html" class="theme-btn btn-style-two"><span class="txt">اعرف اكثر </span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab active-tab" id="tab-department">
                            	<div class="content">
									<h2>Neurology Department</h2>
									<div class="title">Department of Neurology</div>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>01 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>02 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
									</div>
									<a href="instructors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="tab-gastrology">
                            	<div class="content">
									<h2>ما الفائدة من الدورات اونلاين؟</h2>
									<div class="title">ما الفائدة من الدورات اونلاين؟</div>
									<div class="text">
										<p>معظم الجامعات والمؤسسات التعليمية حول العالم تقوم بعمل الكورسات والدروس التعليمة عبر شبكة الانترنت في مختلف العلوم واللغات.
											1.	تتميز الدورات بكونها ذات مدة زمنية قصيرة على الانترنت.
											2.	تتمكن عبر هذا الدروس من الدراسة في اي وقت ، فكل ما انت بحاجته هو جهاز كمبيوتر او جهاز لوحي متصل بشبكة الانترنت.
											3.	ستنضم عبر هذه الكورسات الى مجتمع المتعلمين المهتمين في المجال الذي تريد ان تطور ذاتك فيه.
											4.	سيتم مراقبة مستواك وتحليل نتائج بحثك وعملك من قبل اشخاص ذو خبرة ودراية واسعة بما تطور نفسك به.
											5.	ستحصل في نهاية الكورس على شهادة تفيد بأنك اكملته وشاركت بالمناقشات واغلب الكورسات تكون شهاداتها مؤثوقة ومعترف بها .
											6.	بعض الكورسات التي تقدمها الجامعات العريقة تتيح لك نافذة للوصول الى الكتب والموارد التعليمية لمدة سنة على الاقل بعد الانتهاء من الكورس.
											
											</p>

									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>خدمة البرومترك </h3>
											<div class="column-text">الداتافلو هي شركة عالمية مفوضة من قبل الهيئة للتحري والاستعلام عن الاوراق الخاصة بالمتقدمين للعمل داخل الهيئة للتخصصات الصحية حتى يتمكنوا من الحصول على ترخيص مزاولة المهنة 
												الداتافلو للسعودية هي خطوة اساسية من خطوات الحصول على  ترخيص مزاولة المهنة في أيأ من الدول العربية ( السعوديه - عمان - البحرين- الأمارات - قطر - دبي - ابو ظبي 
												</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>الان التقديم متاح للداتافلو </h3>
											<div class="column-text">لاطباء البشريين والاخصائيين واطباء الاسنان والصيادلة واختصاصيي المختبرات الطبية والاشعة والتمريض و علم النفس ، كل ما عليك هو ارسال الاوراق و التواصل معنا للبدء في التسجيل ، وهي الخطوة الأولى من خطوات الحصول على ترخيص مزاولة المهنة، حيث يجب معها الحصول على اختبار البرومترك واجتيازه وبعد النجاح ، والحصول على تقرير الداتافلو وبعد السفر الى السعودية ، يتم التقديم على دورة الانعاش الرئوي BLS  ( التي تقدمها الاكاديمية ) ودفع التأمينات ثم الحصول على ترخيص مزاولة المهنة </div>
										</div>
									</div>
									<a href="instructors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="tab-cardiology">
                            	<div class="content">
									<h2>رؤيتنا </h2>
									<div class="title">رؤيتنا </div>
									<div class="text">
										<p>أن تكون الأكاديمية رائدة في توفير الخدمات التدريبة, الاستشارية, والحلول البرمجية وغيرها من المجالات والتخصصات المختلفة محليا وإقليميا.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>مهمتنا </h3>
											<div class="column-text">توفير خدمات عالية الجودة و إبداعية في مجال التدريب, الاستشارات, والحلول البرمجية وغيرها من المجالات والتخصصات المختلفة محليا وإقليميا.
												ان نكون افضل اكاديمية معتمدة دوليا فى مصر و الشرق الاوسط فى مختلف المجالات عن طريق منظومة فريدة للتعلم التطبيقى لتخريج دفعات من المحترفين من مختلف الاعمار و التخصصات و الخلفيات العلمية وذلك من خلال نخبة متميزة من الخبراء و الاستشارين و الأساتذة  و الفنيين المتخصصين فى كل مجال .
												</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>برامجنا التدريبية </h3>
											<div class="column-text">تم تصميم برامجنا وتطويرها بالتوافق مع المعايير الدولية, بحيث يتم تحديثها باستمرار استنادا ليس فقط على أحدث المبادئ والممارسات الدولية، بل أيضا على البحوث الميدانية، التجارب العملية، والدراسات والبحوث المتعلقة بالسوق والمتطلبات المحددة للمنظمات.</div>
										</div>
									</div>
									<a href="instructors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="tab-eye">
                            	<div class="content">
									<h2>التدريب</h2>
									<div class="title">الابداع والتطوير </div>
									<div class="text">
										<p>التدريب على  مجموعة متميزة من الدورات الفنية الإحترافية تحت مظلة واحدة يجتمع فيها الفن مع الحرفة و الخيال مع الإبداع ويوجد العديد من الامكانيات التى يتم توفيرها للمتدربين .</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>التسويق والبيع</h3>
											<div class="column-text">توفير فرص تسويقية وبيعية  للخريجين لعرض منتجات المشغولات اليدوية و الازياء و الحلى و الاكسسوار ومنتجات الجلود الطبيعية من خلال الجاليرى الخاص بنقوش و المشاركة فى المعارض الدولية و المحلية و ايضا من خلال تعاقدات مع مواقع البيع الاليكترونى .</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>فرص توظيف</h3>
											<div class="column-text">تسعى الاكاديمية الى تشبيك الخريجين المتميزين  فى مجال الازياء بالمصانع و بيوت الازياء و خرجيين قسم الحلي بمصانع الذهب و المجوهرات و كذلك المتميزين فى مجال الطهي بالمطاعم و الفنادق</div>
										</div>
									</div>
									<a href="instructors-detail.html" class="theme-btn btn-style-two"><span class="txt">اعرف اكتر </span></a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!--End of Courses Section-->
	<!-- Welcome Section -->
	<section class="welcome-section">
		<div class="image-layer" style="background-image:url(images/pattern-2.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>اهلا بيك معانا في  <br> AEC Course</h2>
							<div class="separator"></div>
						</div>
						<div class="text">
							<p>نحن نقدم مجموعة مرنة من خدمات عالية الجودة للمساعدة في تطوير الأفراد والمؤسسات علي سبيل المثال لا الحصر 
								تقديم مجموعة من الدورات التدريبية والدبلومات المتنوعة 
								تقديم خدمة الاستشارة الفورية في مختلف المجالات 
								تقديم خدمة شرح ومتابعة الدروس لطلبة الجامعات وما بعد الجامعة 
								تقديم المساعدة في مشاريع التخرج Final year Projects advice and help
								تقديم المساعدة في انشاء البحوث العلمية ونشرها في المجالات العالمية المشهورة  Research Preparations
								تقديم المساعدة في التحضير للاختبارات 
								تقديم المساعدة في حل الواجبات 
								حجز امتحان البرومترك وبيرسون فيو لكل التخصصات ( اسنان - صيدلة - اطباء بشري - تمريض - فنيين - علاج طبيعي - علم نفس ) 
								أرخص أسعار حجز للترو بروفايل (True Profile) و للداتا فلو أكسبريس (dataflow Express) 
								عمل داتا فلو لكل الدول ( السعوديه - عمان - البحريين NHRA - الأمارات MOH - قطر - دبي DHA - ابو ظبي HAAD ) 
								بنك أسئلة امتحان البرومترك للأطباء البشري – للصيادلة – للتمريض – للفنيين - علم النفس
								خدمة اخري
								.</p>
						</div>
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-btn"><span class="icon flaticon-play-arrow"></span> More About Us</a>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('Frontend/images/Featured-01.png') }}" alt="" />
							<div class="icon-outer">
								<span class="icon-inner"><span class="icon flaticon-rocket-ship"></span></span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
	<!-- News Section -->
    <section class="news-section">
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Latest News & Articals</h2>
				<div class="separator style-three"></div>
			</div>
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="category">Artical</div>
							<a href="blog-detail.html"><img src="{{ asset('Frontend/images/blog-01.png') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><a href="#">03 Comments</a></li>
								<li><a href="#">June 21, 2018 at 8:12pm</a></li>
								<li><a href="#">12 Liks</a></li>
							</ul>
							<h3><a href="blog-detail.html">احدث الدورات التدريبية  </a></h3>
							<div class="text">تعرف علي احدث الدورات التدريبية </div>
							<a href="blog-detail.html" class="read-more">اعرف اكثر </a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="category">Artical</div>
							<a href="blog-detail.html"><img src="{{ asset('Frontend/images/blog-02.png') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><a href="#">03 Comments</a></li>
								<li><a href="#">June 21, 2018 at 8:12pm</a></li>
								<li><a href="#">12 Liks</a></li>
							</ul>
							<h3><a href="blog-detail.html">لماذا اكاديمية aec?</a></h3>
							<div class="text">تعرف علي المميزات التي تقدمها الاكاديمية لنجاحك وتفوقك </div>
							<a href="blog-detail.html" class="read-more">اعرف اكثر </a>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="category">Artical</div>
							<a href="blog-detail.html"><img src="{{ asset('Frontend/images/blog-03.png') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><a href="#">03 Comments</a></li>
								<li><a href="#">June 21, 2018 at 8:12pm</a></li>
								<li><a href="#">12 Liks</a></li>
							</ul>
							<h3><a href="blog-detail.html">بنك الاسئلة </a></h3>
							<div class="text">نبذه عن بنك الاسئلة </div>
							<a href="blog-detail.html" class="read-more">اعرف اكثر </a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Newsletter Section -->
	<section class="newsletter-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>اشترك في خدمة الايملات المجانية </h2>
						<div class="text">اشترك في خدمة الايملات المجانية ليصلك كل جديد</div>
					</div>
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Your Email Address" required>
									<button type="submit" class="theme-btn btn-style-two"><span class="txt">اشترك معانا </span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Newsletter Section -->
	
	<!--Main Footer-->
    <footer class="main-footer" style="{{ asset('Frontend/background-image: url(images/Footer2-01.png)') }}">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="{{ asset('Frontend/images/footerlogo.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text">نحن نقدم مجموعة مرنة من خدمات عالية الجودة للمساعدة في تطوير الأفراد والمؤسسات علي سبيل المثال لا الحصر 
										تقديم مجموعة من الدورات التدريبية والدبلومات المتنوعة 
										تقديم خدمة الاستشارة الفورية في مختلف المجالات 
										</div>
									<ul class="social-icons">
										<li><a href="https://www.facebook.com/advancededucationacademy"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="https://aeccourse.com"><span class="fab fa-google"></span></a></li>
										<li><a href="https://twitter.com/adv_edu_academy"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#"><span class="fab fa-skype"></span></a></li>
										<li><a href="https://www.linkedin.com/company/advanced-education-academy"><span class="fab fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<div class="footer-title  clearfix">
										<h2>خدماتنا</h2>
										<div class="separator"></div>
									</div>
									<ul class="footer-list">
										<li><a href="#">كورساتنا</a></li>
										<li><a href="#">خدمة الاستشارة الفورية</a></li>
										<li><a href="#">التحضير للاختبارات </a></li>
										<li><a href="#">حل الواجبات </a></li>
										<li><a href="#">حجز امتحان البرومترك</a></li>
										<li><a href="#">بنك الأسئلة </a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<div class="footer-title  clearfix">
										<h2>احدث المقالات </h2>
										<div class="separator"></div>
									</div>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="{{ asset('Frontend/images/logo90-01.png') }}" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">كورسات في المجال الطبي </a></h3>
                                            <div class="post-date">July 11, 2017</div>
                                        </div>
                                    </div>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="{{ asset('Frontend/images/logo90-01.png') }}" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">افضل المدربين بالسعوية  </a></h3>
                                            <div class="post-date">July 11, 2018</div>
                                        </div>
                                    </div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<div class="footer-title  clearfix">
										<h2>تواصل معانا </h2>
										<div class="separator"></div>
									</div>
									
									<ul class="contact-list">
										<li><span class="icon flaticon-placeholder"></span>Ryiadh,KSA <br> </li>
										<li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a href="tel:+898-68679-575-09">+966 5400 98736</a></li>
										<li><span class="icon flaticon-message"></span>عندك اي سؤال  <a href="mailto:info@gmail.com">Admin@aeccourse.com</a></li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">Marketopia Programming and Marketing; All Rights Reserved By Marketopia </div>
			</div>
		</div>
	
	</footer>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>خدماتنا المتنوعة</h3>
            <ul class="recent-searches">
                <li><a href="#">كورسات</a></li>
                <li><a href="#">حل واجبات</a></li>
                <li><a href="#">استشارات</a></li>
                <li><a href="#">اعداد للامتحانات </a></li>
                <li><a href="#">بنك الاسئلة </a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fas fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="{{ asset('Frontend/css/color-themes/default-theme.css') }}"></span>
            <span class="palate green-color" data-theme-file="{{ asset('Frontend/css/color-themes/green-theme.css') }}"></span>
            <span class="palate olive-color" data-theme-file="{{ asset('Frontend/css/color-themes/olive-theme.css') }}"></span>
            <span class="palate orange-color" data-theme-file="{{ asset('Frontend/css/color-themes/orange-theme.css') }}"></span>
            <span class="palate purple-color" data-theme-file="{{ asset('Frontend/css/color-themes/purple-theme.css') }}"></span>
            <span class="palate teal-color" data-theme-file="{{ asset('Frontend/css/color-themes/teal-theme.css') }}"></span>
            <span class="palate brown-color" data-theme-file="{{ asset('Frontend/css/color-themes/brown-theme.css') }}"></span>
            <span class="palate redd-color" data-theme-file="{{ asset('Frontend/css/color-themes/redd-color.css') }}"></span>
        </div>
    </div>
	
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!--Scroll to top-->
<script src="{{ asset('Frontend/js/jquery.js') }}"></script>
<script src="{{ asset('Frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('Frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('Frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('Frontend/js/parallax.min.js') }}"></script>
<script src="{{ asset('Frontend/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('Frontend/js/owl.js') }}"></script>
<script src="{{ asset('Frontend/js/wow.js') }}"></script>
<script src="{{ asset('Frontend/js/swiper.min.js') }}"></script>
<script src="{{ asset('Frontend/js/appear.js') }}"></script>
<script src="{{ asset('Frontend/js/script.js') }}"></script>
<script src="{{ asset('Frontend/js/color-settings.js') }}"></script>

</body>
</html>