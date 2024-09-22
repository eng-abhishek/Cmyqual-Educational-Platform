<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from psdconverthtml.com/live/edupress/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 09:30:49 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
   

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <!-- COLORS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors.css')}}">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css'>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- PRELOADER -->
        <!--<div class="cssload-container">-->
        <!--    <div class="cssload-loader"></div>-->
        <!--</div>-->
    <!-- end PRELOADER -->

    <!-- ******************************************
    START SITE HERE
    ********************************************** -->

    <div id="wrapper">

    @include('web.header')

<section class="new-header">
    <div class="container">
    <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="new-header-content">
        <h1>The place to grow <br>your career</h1>
        <p>One place to store all of your professional achievements, <br>share them with employers, discover what to learn next <br>and reduce your carbon footprint. </p>
        <li class="btn btn-default get-started2"><a title="Join for free" href="{{url('get-started')}}">Get Started</a></li>
        
        </div>
    </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
       <!-- <img src="images/new-haeder.png" style="max-width:100%;"> -->
       <div class="header-bg-img">
       <img src="{{asset('assets/images/new-header.jpg')}}" alt="" srcset="" class="img-responsive">
       </div>
    </div>
    </div>
    </div>
</section>

<section class="our-study-partner">
    <div class="container text-center">
    <div class="row">
    <div class="col-lg-12">
        <ul>
            <li>
                <img src="{{asset('assets/images/our-study-partner1.png')}}">
            </li>
            <li>
                <img src="{{asset('assets/images/our-study-partner2.png')}}">
            </li>
            <li>
                <img src="{{asset('assets/images/our-study-partner3.png')}}">
            </li>
        </ul>
    </div>
    </div>
    </div>
</section>
<section class="our-study-partner2">
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        
    </div>
    </div>
    </div>
</section>

    <section class="get-a-new-job">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/grow-your-career.jpg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
        <span>For Learners</span>
        <h3>Grow your career with us</h3>
        <p>Take control of your learning and development, <br>never leave a professional achievement behind <br>and get the career you always deserved.</p>
        <button type="button" class="new-btn"><a href="{{url('user-login')}}">Get Started</a></button>
        <button><a href="{{url('learner')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></buuton>

        </div><!--end-of-content-->
        <div class="content mobile">
        <span>For Learners</span>
        <h3>Grow your career with us</h3>
        <p>Take control of your learning and development never leave a professional achievement behind and get the career you always deserved.</p>
        <button type="button" class="new-btn"><a href="{{url('user-login')}}">Get Started</a></button>
        <button><a href="{{url('learner')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></buuton>

        </div><!--end-of-content-->
    </div><!--end-of-col-lg-6-->
   
    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section>

    <section class="get-a-new-job enter-higher desktop">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
        <span>For Teams</span>
        <h3>Invest in your people</h3>
        <p>Your employees make your organisation. We <br>make it easy to invest in your team member's <br>professional success so they can in turn<br> support your organisation's success.</p>
        <button type="button" class="new-btn"><a href="{{url('employer/login')}}">Get Started</a></button> <button><a href="{{url('employers')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</a>
        </button>
        </div><!--end-of-content-->
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/invest-in-your-people.jpg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->

    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section><!--end-of-section-->
    <section class="get-a-new-job enter-higher mobile">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/invest-in-your-people.jpg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
        <span>For Teams</span>
        <h3>Invest in your people</h3>
        <p>Your employees make your organisation. We make it easy to invest in your team member's professional success so they can in turn support your organisation's success.</p>
        <button type="button" class="new-btn"><a href="{{url('employer/login')}}">Get Started</a></button> <button><a href="{{url('employers')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</a>
        </button>
        </div><!--end-of-content-->
    </div><!--end-of-col-lg-6-->


    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section>
    <section class="get-a-new-job keep-your">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/personalise-member-learning.jpg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
        <span>For Associations</span>
        <h3>Personalise member learning</h3>
        <p>With cMyQual, members can share their professional<br> development records which helps you see trends and <br>opportunities to tailor the membership experience.  </p>
        <button type="button" class="new-btn"><a href="{{url('employer/login')}}">Get Started</a></button> <button><a href="{{url('association')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a></buuton>
        </div><!--end-of-content-->
        <div class="content mobile">
        <span>For Associations</span>
        <h3>Personalise member learning</h3>
        <p>With cMyQual, members can share their professional development records which helps you see trends and opportunities to tailor the membership experience.  </p>
        <button type="button" class="new-btn"><a href="{{url('employer/login')}}">Get Started</a></button> <button><a href="{{url('association')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a></buuton>
        </div><!--end-of-content-->
    </div><!--end-of-col-lg-6-->
   
    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section><!--end-of-section-->

<section class="online-platform">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{asset('assets/images/keep-in-touch.jpg')}}" class="img-responsive" alt="">
            <div class="content-box">
            <span>For Learning Institutions</span>
            <h3>Keep in touch with your alumni</h3>
            <p>Track the career journey of former students, promote ongoing learning and provide relevant opportunities. Learn how you can best support alumni in their ongoing growth, and understand the impact of the education you provide.</p>
            <button type="button" class="new-btn"><a href="{{url('partner/login')}}">Get Started</a></button>
            <button><a href="{{url('learning-institutions')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></button>  
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{asset('assets/images/online-learning-platform.jpg')}}" class="img-responsive" alt="">
            <div class="content-box">
            <span>Online Learning Platforms</span>
            <h3>Connect with life-long learners</h3>
            <p>Learn about our community of learners, curate content to meet their needs and increase your course engagement rates.</p>
            <button type="button" class="new-btn"><a href="{{url('partner/login')}}">Get Started</a></button>
            <button><a href="{{url('online-learning-partner')}}">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></button>  
            </div>
           </div>
        </div>
    </div>
</section>
  

<section class="empowering-career">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>Empowering careers <br>every day</h3>
            <!-- <p>With our super powers we have reached this</p> -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="icon-img">
                    <img src="{{asset('assets/images/trees-icon.jpg')}}" alt="" srcset="" class="img-responsive"> <h4>100 </h4> <br><span>Trees Planted</span>
                    <img src="{{asset('assets/images/organization-icon.jpg')}}" alt="" srcset="" class="img-responsive"> <h4>3+ </h4> <br><span>Organizations</span>
                    
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="icon-img">
            <img src="{{asset('assets/images/life-longer-icon.jpg')}}" alt="" srcset="" class="img-responsive" > <h4>150 </h4> <br><span>Life long learners</span>        
            <img src="{{asset('assets/images/countries-icon.jpg')}}" alt="" srcset="" class="img-responsive"> <h4>6</h4> <br><span>Countries</span>
            </div>
            </div>


        </div>
    </div>
</section>


<section class="demo">

  <div class="container text-center">
<div class="row">
    <div class="col-lg-12 text-center">
    <h3>Meet our lifelong learners</h3>
    <p class="text-center">People around the world are building their careers with cMyQual</p>
   </div>
</div>
    <div id="owl-example" class="owl-carousel">
      <div class="col-sm-12">
        <div class="single_courses">


          <div class="single_courses_thumb">
            <img src="https://s10.postimg.org/5h6on1huh/event_1.jpgg" alt="" width="100%">

          </div>
          <!-- Single Courses Image Area End -->
          <div class="single_courses_desc">
            <!-- Single Courses Title Area End -->
            <div class="title">
              <!--<h5 style="visibility:hidden">Amazing help</h5>-->
              <div class="date_time">
                <div class="date">
                  <p>cMyQual will be a lifesaver and save others lots of money when they save their certificates on cMyQual system. I can’t wait to use cMyQual as my go to place for sorting out my academic and professional achievements.</p>
                </div>
              
              </div>
            
            </div>
      
            <!-- Single Courses Blog Title Area End -->


            <!-- Event Coundown area End -->
          </div>
        </div>
        <div class="client-detail text-center">
            <img src="{{asset('assets/images/habab-m.png')}}" alt="">
            <h5>Habab.M</h5>
            <span>Talent Manager </span>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="single_courses">


          <div class="single_courses_thumb">
            <img src="https://s10.postimg.org/5h6on1huh/event_1.jpg" alt="" width="100%">

          </div>
          <!-- Single Courses Image Area End -->
          <div class="single_courses_desc">
            <!-- Single Courses Title Area End -->
            <div class="title">
            
              <div class="date_time">
                <div class="date">
                  <p>cMyQual is a great professional tool for practitioners to create a profile in the system that tracks your goals, professional development and achievements. I would highly recommend this to increase your professional portfolio and attract potential employers. </p>
                </div>
            
              </div>
             
            </div>
            <!-- Single Courses Blog Title Area End -->


            <!-- Event Coundown area End -->
          </div>
        </div>
        <div class="client-detail text-center">
            <img src="{{asset('assets/images/client-img.png')}}" alt="">
            <h5>Tyrone Perry-Harry</h5>
            <span>Assistant Headteacher
</span>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="single_courses">


          <div class="single_courses_thumb">
            <img src="https://s10.postimg.org/5h6on1huh/event_1.jpg" alt="" width="100%">

          </div>
          <!-- Single Courses Image Area End -->
          <div class="single_courses_desc">
            <!-- Single Courses Title Area End -->
            <div class="title">
            <!--<h5>Mindblowing Service</h5>-->
              <div class="date_time">
                <div class="date">
                  <p>As a career changer and- now as a teacher, CMyQual is a perfect tracking tool to control my own learning journey. One place to keep my academic and professional achievements electronically and most importantly safely. Perfect place to track my CPDs to help my own professional development.</p>
                </div>
               
              </div>
            
            </div>
            <!-- Single Courses Blog Title Area End -->

            <!-- Event Coundown area End -->
          </div>
        </div>
        <div class="client-detail text-center">
            <img src="{{asset('assets/images/monika-dongres.png')}}" alt="">
            <h5>Monika Dongare</h5>
            <span>Computer Science Teacher</span>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="single_courses">


          <div class="single_courses_thumb">
            <img src="https://s10.postimg.org/5h6on1huh/event_1.jpg" alt="" width="100%">

          </div>
          <!-- Single Courses Image Area End -->
          <div class="single_courses_desc">
            <!-- Single Courses Title Area End -->
            <div class="title">
             <!--<h5>Amazing help</h5>-->
              <div class="date_time">
                <div class="date">
                  <p>cMyQual will be a lifesaver and save others lots of money when they save their certificates on cMyQual system. I can’t wait to use cMyQual as my go to place for sorting out my academic and professional achievements.</p>
                </div>
             
              </div>
             
            </div>
        
          </div>
        </div>
        <div class="client-detail text-center">
            <img src="{{asset('assets/images/habab-m.png')}}" alt="">
            <h5>Habab.M</h5>
            <span>Talent Manager</span>
        </div>
      </div>


    </div>
  </div>
</section>


<section class="supercharge">
    <div class="container text-center">
    <div class="row">    
    <h1>Grow your career,  we'll grow a tree</h1>
    <p class="text-center">
    For a long time, human growth has come at the expense of our environment.<br>We believe this doesn't always have to be the case.
    </p>
    <li class="btn btn-default"><a title="Join for free" href="{{url('sustainability')}}">Learn more</a></li>
    </div>
    </div>
</section>

        @include('web.footer')
       
    </div><!-- end wrapper -->

    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
 
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/js/all.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>

    <script>
        $(document).ready(function() {
      $("#owl-example").owlCarousel({
        items :3,
        navigation: true,
        navigationText:  [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
        ],
        pagination: true,
        responsive :true,
       autoPlay: true,
      });
    });
    </script>
</body>

<!-- Mirrored from psdconverthtml.com/live/edupress/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 09:31:09 GMT -->
</html>