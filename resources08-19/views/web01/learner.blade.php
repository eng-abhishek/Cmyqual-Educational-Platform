<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Learner</title>
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
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
@media(max-width:1024px)
{
    .set-your-goal .content {
    padding-left: 20px;
}
}
@media(max-width:360px)
{
    .supercharge h1 {
    line-height: 20px;
}
}
</style>
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

<section class="new-header new-header2">
    <div class="container">
    <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="new-header-content">
        <h1 class="grow-your-career">Grow your career with us</h1>
        <p>Take control of your learning and development, never leave a professional achievement behind and get the career you always deserved. Celebrate every achievement with trees planted to reduce your carbon footprint.</p>
        
        </div>
    </div>
        <div class="col-lg-5 col-md-5 col-sm-12">

       <div class="header-bg-img">
       <img src="{{asset('assets/images/new-header2.jpg')}}" alt="" srcset="" class="img-responsive">
       </div>
    </div>
    </div>
    </div>
</section>

<section class="grow-your-career-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Grow your career</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/get-a-new-job-icon.svg')}}" alt="" >
            <h3>Get a new job</h3>
            <p>Getting a new job is stressful - you have to find opportunities, remember application deadlines and have your achievements ready to share at the drop of a hat.  cMyQual is there for you at every step to make this process smooth and fun.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/achievement-icon.svg')}}" class="achievement-icon" alt="">
            <h3>Achieve a promotion</h3>
            <p>The top can seem a long way up, and it may seem like you’ll never get that promotion. cMyQual will work with you to help you develop the knowledge and skills to demonstrate your ability and level up your career.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/change-career.svg')}}" alt="">
            <h3>Change careers</h3>
            <p>Starting a new career can be a rewarding and difficult challenge. Changing careers becoming more common than ever as the pace of change in the world increases, and cMyQual is here to make the process as smooth as possible.</p>
            </div>
        </div>
    </div>
</section>

<section class="set-your-goal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>1.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="content">
                <h4><i class="fa fa-bullseye" aria-hidden="true"></i> Set your goal</h4>
                <ul>
                    <li>Break it down into achievable, recommended steps</li>
                    <li>Get encouragement and support along the way</li>
                    <li>Share your achievement and celebrate with family & friends </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>2.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
            <div class="content">
                <h4><i class="fa fa-trophy" aria-hidden="true"></i> Share your professional achievements</h4>
                <ul>
                    <li>Store your professional achievements all in one place</li>
                    <li>Stand out from other candidates by sharing your achievements with potential employers</li>
                    <li>See who has viewed your shared achievements</li>
               </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>3.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
            <div class="content">
                <h4><i class="fa fa-bullhorn" aria-hidden="true"></i> Get the CV you deserve</h4>
                <ul>
                    <li>75 percent of resumes are rejected before they reach the hiring manager</li>
                    <li>A professionally written resume boosts your earning potential by 7 percent*</li>
                    <li class="last-list">Get free 1v1 CV coaching sessions by inviting your friends to cMyQual</li>
                    <span>https://www.topresume.com/career-advice/7-top-job-search-statistics</span>
                 </ul>
            </div>
            </div>
            <div class="col-lg-12 text-center">
            <li class="btn btn-default get-started2"><a title="Join for free" href="{{url('partner/login')}}">Get Started</a></li>
            </div>
        </div>
    </div>
</section>

<section class="grow-your-career-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Accelerate your learning</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/hassle-free-course-icon.svg')}}" alt="">
            <h3>Hassle free course applications</h3>
            <p>Applying for courses can be a confusing, expensive and stressful process. Our team have applied decades of academic experience into making cMyQual the perfect partner on your journey. Have all your qualifications all in one place and accessible from anywhere.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/learn-on-the-go-icon.svg')}}" alt="">
            <h3>Learn on the go</h3>
            <p>Moving to new places can bring incredible growth. However, it can be hard to consolidate all of your learning if you’re learning from different countries and courses. cMyQual helps higher education providers and employers appreciate the full scope of your learning journey.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/find-the-best-icon.svg')}}" alt="">
            <h3>Find the best learning opportunities</h3>
            <p>Get relevant and timely learning suggestions for courses and qualifications that can help you level up at the right stage of your career. </p>
            </div>
        </div>
    </div>
</section>
<section class="set-your-goal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>1.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="content">
                <h4><i class="fa fa-bullseye" aria-hidden="true"></i> Set your goal</h4>
                <ul>
                    <li>Focus your energy on the best next steps</li>
                    <li>Get helpful tips and encouragement to keep pushing forwards</li>
                    <li>Never forget a submission deadline</li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>2.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
            <div class="content">
                <h4><i class="fa fa-trophy" aria-hidden="true"></i> Store your learning record in one place</h4>
                <ul>
                    <li>Every time you earn a new qualification or other achievement, simply email it to your cMyQual inbox to add it to your file</li>
                    <li>Share your achievements when applying to higher education or to a job to stand out from other candidates</li>
                    <li>See who has viewed your shared achievements</li>
               </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>3.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
            <div class="content">
                <h4><i class="fa fa-commenting-o" aria-hidden="true"></i> Application support</h4>
                <ul>
                    <li>Our team has the experience and knowledge necessary to make sure your application is top notch</li>
                    <li>Improve your chances of being accepted onto any programme</li>
                    <li>Get 1v1 interview prep sessions</li>
                </ul>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h1>4.</h1>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
            <div class="content">
                <h4><i class="fa fa-list"></i> Keep track of your development logs</h4>
                <ul>
                    <li>No more epic spreadsheets!  Track your professional devleopment in cMyQual to get helpful insights</li>
                    <li>Share your development logs with your employer so you won’t have to send them manually each month</li>
                   
                </ul>
            </div>
            </div>
            <div class="col-lg-12 text-center">
            <li class="btn btn-default get-started2"><a title="Join for free" href="{{url('partner/login')}}">Get Started</a></li>
            </div>
        </div>
    </div>
</section>
<section class="supercharge">
    <div class="container text-center">
    <div class="row">    
    <h1>Grow your career, we'll grow a tree</h1>
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
    

</body>

</html>