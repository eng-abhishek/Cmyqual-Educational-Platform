@extends('user.layout.layout')
@section('title','cMyQual | Achievements')
@section('content')
<style>
.goals-border
{
  margin-left: 15px;
  width: 97%;
}
.add-new-box span
{
  padding: 0px 11px;
    margin: 0 auto;
    display: block;
}
.goal-box ul.my{margin-left: 0.5%;}
@media(min-width:1920px)
{
  .logout-bar ul {
    margin-top: 0px!important;
}
  .next-step.next-step1 .tree-main.treee-main .tree2 {
    margin-left: 180px!important;
}
.next-step.next-step1 .tree-main.treee-main .tree6 {
    left: 40%!important;
    transform: rotate( 
135deg
 )!important;
    top: -58%!important;
}
.tree7.disabled-color {
  left: 300px!important;
    top: 62%!important;
}
.tree8.disabled-color {
  left: 380px!important;
    top: 68%!important;
}
.tree9.disabled-color
{
  left: 210px!important;
}
.tree10.disabled-color
{
  left: 215px!important;
}
.tree11 {
  margin-top: 0.5%!important;
    margin-left: 95px!important;
}
.next-step.next-step1 .tree12.disabled-color {
    transform: rotate( 
122deg
 )!important;
 margin-top: 0%!important;
    margin-left: 190px!important;
}
.tree13.disabled-color
{
  top: -20%!important;
    left: 398px!important;
}
.tree14.disabled-color
{
  left: 630px!important;
}
.tree15.disabled-color
{
  left: 620px!important;
}
.tree16.disabled-color {
    left: 630px!important;
}
.tree17.disabled-color {
    left: 560px!important;
}
.tree18.disabled-color
{
  left: 309px!important;
  top: -20%!important;
}
.tree20.disabled-color
{
  left: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11.disabled-color {
    margin-left: 160px!important;
    margin-top: -1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .next-step.next-step1 .tree-main.treee-main .tree2 {
  margin-left: 145px!important;
  top: 0%!important;
}

body.leftmenu #wrapper.toggled #page-content-wrapper .next-step.next-step1 .tree-main.treee-main .tree3{
    left: 440px!important;
    top: 33%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4
{
  left: 54%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree5.disabled-color {
    margin-top: 0% !important;
    left: 54%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7.disabled-color {
    left: 370px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8.disabled-color {
    left: 450px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9.disabled-color
{
  top: 20%!important;
  left: 270px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10.disabled-color {
    top: -20%!important;
    left: 305px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12.disabled-color
{
  left: 544px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13.disabled-color {
    margin-left: 186px!important;
    margin-top: 0%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14.disabled-color {
    left: 650px!important;
    top: 65.5%!important;
    transform: rotate( 
266deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16.disabled-color {
    left: 590px!important;
    top: 70%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17.disabled-color {
    left: 655px!important;
    transform: rotate( 
190deg
 )!important;
    top: -40%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18.disabled-color {
    margin-left: 140px!important;
    margin-top: 5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19.disabled-color {
    left: 52%!important;
    top: -27%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20.disabled-color {
    transform: rotate( 
187deg
 )!important;
    top: -12%!important;
    left: 62%!important;
}
#sidebar-wrapper
{
  margin-top:12px!important;
}

body.memberprofile .menuopener {
    margin-top: 11px!important;
}
.menuopener {
    height: 52px!important;
    line-height: 52px!important;
}
.tree14
{
  left: 670px!important;
}
}
@media(min-width:1600px)
{
  body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
    width: 31.99%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .next-step.next-step1 .tree-main.treee-main .tree2 {
    left: 335px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree3 {
  left: 350px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    margin-left: -2%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: 260px!important;
    top: 55%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 360px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
  margin-top:2%!important;
  left: 160px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 {
    top: 0%!important;
    margin-left: 45px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11
{
  margin-left: 50px!important;
    margin-top: 0%!important;
}

body.leftmenu #wrapper.toggled #page-content-wrapper .tree12.disabled-color
{
  margin-top: 0%!important;
    margin-left: 40px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12
{
  left: 355px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13
{
  margin-left: 75px!important;
  margin-top: 1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
  margin-left: 80px!important;
    margin-top: 0.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
  margin-left: 61px!important;
    margin-top: 0%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17
{
  left: 640px!important;    top: -47%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    margin-left: 30px!important;
    margin-top: 25px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
  left: 54%!important;
}
  .tree-main.treee-main .tree2 {
    margin-left: 80px!important;
}
  .tree-main.treee-main .tree4 {
    top: 0% !important;
    left: 56%!important;
}
.tree-main.treee-main .tree6 {
  margin-left: 8%!important;
    transform: rotate( 
134deg
 )!important;
    margin-top: 30px!important;
    }
    .tree7 {
    left: 200px!important;
    top: 55%!important;
}
.tree8 {
    left: 270px!important;
    top: 68%!important;
}
.tree9 {
  margin-top: 5%!important;
    margin-left: 50px!important;
}
.tree10
{
  margin-top: 4%!important;
    margin-left: 24px!important;
}
.tree11
{
    top: 20%!important;
    left: 225px!important;
}
.tree12.disabled-color {
  transform: rotate( 
95deg
 )!important;
    margin-top: -3%!important;
    margin-left: 70px!important;
}
.tree13 {
  margin-top: -1%!important;
    margin-left: 35px!important;
    transform: rotate( 
93deg
 )!important;
}
.tree14
{
  margin-top: 0.5%!important;
  margin-left: 50px!important;
}
.tree15 {
  margin-top: 0%!important;
    margin-left: 50px!important;
}
.tree16 {
  margin-left: 50px!important;
    top: 65%!important;
}
.tree17 {
  margin-left: 60px!important;
}
.tree18 {
  top: -27%!important;
    left: 209px!important;
    transform: rotate( 
89deg
 )!important;
}
}
  @media(min-width:1440px)
  {
    .tree11
    {
      left: 175px;
    }
    .tree13
    {
      left: 275px;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
    width: 32.55%!important;
}
    .add-new-box {
    height: 30px!important;
}
.goals-border
{
    width: 97%!important;
    margin-left: 15px!important;
}
.goal-box ul
{
  margin-left: 1.5%!important;
}
.goal-box ul li
{
  margin-right: 6px!important;
}
.goal-box ul li {
    width: 32.45%!important;
}
    body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree2 {
    margin-left: 30px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree3 {
    margin-left: 30px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree5 {
  margin-top: 0% !important;
    left: 56%!important;
}
.tree-main.treee-main .tree6 {
    left: 49%!important;
    transform: rotate( 
141deg
 )!important;
    }
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
  top: 25%!important;
    transform: rotate( 
48deg
 )!important;
    left: 160px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  top: -8%!important;
    left: 195px!important;
    transform: rotate( 
67deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11
{
  top: 18%!important;
    left: 250px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
  transform: rotate( 
135deg
 )!important;
    top: -46%!important;
    left: 426px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    transform: rotate( 
225deg
 )!important;
    position: absolute;
    top: 15%!important;
    left: 563px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
  left: 600px!important;
    top: 46.5%!important;
    transform: rotate( 
233deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
  left: 458px!important;
    top: -25%!important;
    transform: rotate( 
149deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
  left: 550px!important;
    top: 66%!important;
    transform: rotate( 
225deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
  left: 535px!important;
    transform: rotate( 
190deg
 )!important;
    top: -34%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
  top: -22%!important;
    left: 260px!important;
    transform: rotate( 
77deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    left: 41%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    transform: rotate( 
212deg
 )!important;
    top: -12%!important;
    left: 65%!important;
}
.tree-main.treee-main .tree5 {
  margin-top: -1% !important;
}
.tree-main.treee-main .tree6
{
  left: 37%!important;
    transform: rotate( 
126deg
 )!important;
 top: -48%!important;
}
.tree9 {
    top: 16%!important;
    left: 100px!important;
}
.tree10
{
    top: -12%!important;
    left: 134px!important;
}
.tree12 {
    transform: rotate( 
93deg
 )!important;
    top: -40%!important;
    left: 180px!important;
}
.tree13 {
    top: -24%!important;
    left: 270px!important;
    transform: rotate( 
85deg
 );
}
    .tree14 {
      transform: rotate( 
190deg
 )!important;
    top: -14.5%!important;
    left: 500px!important;
}
.tree15 {
    top: 15%!important;
    left: 490px!important;
}
.tree16 {
  left: 510px!important;
    top: 54%!important;
}
.tree17 {
  left: 450px!important;
    top: 70%!important;
}
.tree18
{
  left: 350px;
}
.tree19 {
    left: 52%!important;
    transform: rotate( 
135deg
 )!important;
    top: -24%!important;
}
.tree20 {
    transform: rotate( 
194deg
 )!important;
    top: -37%!important;
    left: 62%!important;
}
  }

  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree2
  {
    left: 295px!important;
  }
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 295px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4 {
  top: 2% !important;
    left: 55%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree5 {
    top: 36% !important;
    left: 56%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6
{
  top: -45%;
  left: 47%;
  transform: rotate( 
134deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7
{
  left: 200px;
    top: 55%;
    transform: rotate( 
37deg
 );
}

body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
  left: 270px;
    top: 68%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
  left: 140px;
    top: 36%;
  transform: rotate( 
17deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  transform: rotate( 
113deg
 );
    position: absolute;
    top: -42%;
    left: 265px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11
{
  transform: rotate( 
55deg
 );
    top: 22%;
    left: 230px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
  transform: rotate( 
80deg
 );
    top: -16%;
    left: 205px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
  transform: rotate( 
97deg
 );
    position: absolute;
    top: -24%;
    left: 330px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14
{
  transform: rotate( 
179deg
 );
 top: -38.5%;
    left: 520px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
  transform: rotate( 
200deg
 );
    position: absolute;
    top: 15%;
    left: 530px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16
{
  top: -13%;
    left: 550px;
    transform: rotate( 
187deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
  left: 540px;
    top: 58%;
    transform: rotate( 
235deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 8%;
    left:150px;
    transform: rotate( 
57deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
  top: -25%;
    left: 52%;
    transform: rotate( 
135deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
  transform: rotate( 
223deg
 );
 top: 70%;
  left: 56%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .add-new-box span
{
  margin: 0 auto;
    display: block;
}
  .change-career.change-career2.achievement h4{position: absolute;
    z-index: 99;
    top: 30px;}
  .overview-figma-icon
  {
    margin-top: -100px;
  }
  .change-career.change-career2
  {
    height:450px;
    padding-top: 140px;
  }
  .tree7
  {
    left: 100px;
    top: 46%;
  }
  .tree8
  {
    left: 160px;
    top: 62%;
  }
  .tree9
  {
    top: 20%;
    transform: rotate( 
52deg
 );
  }
  .tree12
  {
    transform: rotate( 
78deg
 );
 top: -30%;
    left: 150px;
  }
  .tree13
  {
    top: -24%;
    left: 247px;
    transform: rotate( 
85deg
 );
  }
  .tree14
  {
    top: -42.5%;
    left: 420px;
    transform: rotate( 
187deg
 );
  }
  .tree15
  {
    transform: rotate( 
199deg
 );
    top: 12%;
    left: 460px;
  }
  .tree16
  {
    top: 44%;
    left: 480px;
  }
  .tree17
  {
    left: 445px;
    top: 67%;
  }
  .tree18
  {
    top: -50%;
  }
  .tree19
  {
    transform: rotate( 
152deg
 );
    top: -27%;
    left: 52.5%;
  }
  .tree20
  {
    transform: rotate( 
192deg
 );
    top: -15%;
    left: 70%;
  }
  .tree-main.treee-main .tree6 {
    margin: 0;
    border-radius: 50px 50px 50px 0;
    position: absolute;
    width: 55px;
    height: 55px;
    top: -48%;
    background: rgba(33, 33, 33, 0.1);
    left: 32%;
    transform: rotate( 
112deg
 );
}
  .tree-main {
    margin-top: 0px;
}
.enabled-color
{
  background: rgba(62, 163, 164, 0.5);
}
.disabled-color
{
  background: rgba(33, 33, 33, 0.1);
}

h4.modal-title.modal-title1 {
    margin-top: -10px;
}
#NameOfAchivement
{
  margin: 5px 0 0px 29px;
  width: 83%;
}
.modal-content.shared-scroll
{
  overflow-y: scroll;
    overflow-x: hidden;
    height: 590px;
}
/* width */
.modal-content.shared-scroll::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.modal-content.shared-scroll::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.modal-content.shared-scroll::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.modal-content.shared-scroll::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
  body.leftmenu #wrapper.toggled #page-content-wrapper
{
  overflow-x: hidden!important;
}
.tree-main.treee-main .tree3 {

  top: 37%;
    left: 210px!important;
}
.tree-main.treee-main .tree2 {
  top: 3%;
    left: 210px!important;
    transform: rotate(
75deg
);

}
.tree-main.treee-main .tree4 {
    top: 3% !important;
    left: 57%;
}
.tree-main.treee-main .tree1 span {
    padding: 0px 0px 0 0px!important;
    top: 40px!important;
    right: 10px!important;
}
.tree-main.treee-main .tree5 {
    top: 42% !important;
    left: 58%;
}
@media(max-width:1600px)
{
    .tree3 {
    left: 250px!important;
}
.tree2 {
    left: 245px!important;
}
}
    html{scroll-behavior: smooth;}
    span.all-goal
    {
      font-weight: 600;
    }
    .goals-border
    {
      padding-bottom: 10px;
      padding-top: 10px;
    }
    .goals-border .add-new-box.add-new-box {
    margin-top: 0px;
}

.add-new-box
{
  height:25px;
}
.goal-box ul li
{
  padding:10px 15px;
}
li.goal-box-border img{max-width: 100%;}
.goal-box ul li
{
    width: 30%;
    min-height: 160px;
    display: flex;
    float: left;
    margin-bottom: 10px;
    margin-right: 9px!important;
    margin-left: 0px;
}

.img-trophy
{
  position: absolute;
    z-index: 99;
    top: 10.5%;
    left: 9.95%;
    font-size: 30px;
    color: #fff;
}
.img-trophy2
{
  position: absolute;
    z-index: 99;
    top: 10.5%;
    left: 30.95%;
    font-size: 30px;
    color: #fff;
}
li.goal-box-border h4
{
  font-size: 15px!important;
  color: #111!important;
}
.goal-box.goal-box1 ul li.goal-box-border .icon .fa
{
  color: #48B359;
  display: block;
  font-size: 30px;
  text-align: center;
}
@media(min-width:1440px)
{
  .goal-box ul li {
    width: 24%;
    margin-bottom: 15px;
}
.goal-box ul li {
    padding: 10px 20px!important;
}
.img-trophy2
{
  left: 33.95%;
}
.img-mobile-msc , .img-mobile
{
  height:85px!important;
}
}
@media (min-width: 1600px)
{
.img-mobile-msc, .img-mobile {
    height: 105px!important;
}
body.leftmenu #wrapper {
    padding-top: 80px!important;
}
}
@media(max-width:1024px)
{
  .change-career.change-career2.achievement {
    height: 330px;
}
.add-new-box
{
  width: 66%;
}
.goal-box ul li {
    width: 25%;
}

}
@media(max-width:768px)
{
  #my-profile
  {
    padding-top:40px;
  }
  li.goal-box-border img {
    max-width: 45%;
    margin-right: 10px;
}

.img-trophy
{
  top: 7.5%;
  left: 20.95%
}
.img-trophy2
{
  top: 28.5%;
    left: 20.95%;
}
  .goal-box ul.my li.goal-box-border {
    height: auto;
    width: 100%;
}
  .change-career.change-career2.achievement .col-lg-3.col-md-3.col-sm-12
  {
    width: 33.3333333333%;
    padding-left: 0;
  }
  .change-career.change-career2.achievement .col-lg-9.col-md-9.col-sm-12
  {
    width: 66%;
    padding-left: 0;
  }
  .goal-box ul li {
        width: 32.5%;
    }
}
@media(max-width:414px)
{
  .change-career.change-career2.achievement {
    height: auto;
}
.change-career.change-career2
{
  margin: 10px 0 0px 0;
}
.change-career.change-career2 h4 {
    font-size: 15px!important;
}
#my-profile {
    padding-top: 70px;
}
.change-career.change-career2.achievement .col-lg-3.col-md-3.col-sm-12 , .change-career.change-career2.achievement .col-lg-9.col-md-9.col-sm-12
{
  width:100%;
}
.goals-border
{
  margin-top:10px;
}
.goal-box ul.my li.goal-box-border
{
  width:100%;
}
li.goal-box-border img {
    max-width: 40%;
    margin-right: 10px;
}
.img-trophy
{
    top: 6.5%;
    left: 18.95%;
    font-size: 20px;
}
.img-trophy2
{
    top: 23.5%;
    left: 18.95%;
    font-size: 20px;
}

.add-new-box.add-new-box1
{
  width: 55%;
}
}
@media(max-width:375px)
{
  .change-career.change-career2.achievement
  {
    width: 113%;
    margin-left: -20px;
  }
  .tree-main.treee-main .tree4 {
    left: 68%;
}
.tree-main.treee-main .tree2
{
  left:-10px;
}
.tree-main.treee-main .tree3 {
    left: 0px;
}
}
@media(max-width:360px)
{
  .change-career.change-career2.achievement {
    width: 100%;
    margin-left: 0;
}
.tree-main.treee-main .tree2 {
    left: -30px;
}
.tree-main.treee-main .tree3 {
    left: -20px;
}
.tree-main.treee-main {
    margin-left: 3px;
}
.tree-main.treee-main .tree3 {
    left: -25px;
}
.tree-main.treee-main .tree2 span
{
  top: 34px;
}
.tree-main.treee-main .tree1 span
{
    top: 32px;
    right: 0px;
}
.tree-main.treee-main .tree4 span
{
    top: 35px;
    right: 3px
}
.tree-main.treee-main .tree6 span
{
    font-size: 10px!important;
    padding-top: 40px!important;
    padding-left: 20px;
}
.tree-main.treee-main .tree5 span {
    top: 40px;
    right: 5px;
}
}
.a-name b{
  padding-right:22px;
}
#achType
{
margin-left: 90px;
    margin-top: -45px;
    width: 82%;
    height: 35px;
    /* padding-top: 0; */
    display: inherit;
}
.goal-box-border.not-approved
{
  background: rgb(132 132 132 / 34%);
  border: none;
}
.goal-box-border.not-approved .close
{
    background: rgb(132 132 132 / 40%);
    opacity: 10;
    width: 35px;
    height: 25px;
    line-height: 25px;
    border-radius: 50%;
    color: #fff;
    font-size: 15px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition:0.4s;
}
.goal-box-border.not-approved .close:hover
{
  opacity: 0;
}
span.super-admin-span {
  display: none;
  transition:0.4s;
  text-align:center;
}

.goal-box-border.not-approved .close:hover + span.super-admin-span {
 
  display:block;
  position: absolute;
  background: #ffffff;
    transform: translate(10px, 40px);
    padding: 20px;
}
.expDate{
    margin: 5px 0 0px 50px;
    width: 83%;
    padding: 5px 10px 5px 10px;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
     }
.error{
 border-color:#ef3f17cc !important;    
}     
.modal-list.modal-list-form ul li textarea#notes {
    margin: 5px 0 0px 89px;
    width: 82%;
}
li.goal-box-border h4
{
  text-align:left;
}
.icon a{float:right;} 
</style>


    <!-- PRELOADER -->
    <!-- <div class="cssload-container">
        <div class="cssload-loader"></div>
    </div> -->
    <!-- end PRELOADER -->


    <!-- **************
    START SITE HERE
    **************** -->

    <!-- ******
    START SITE HERE
    ****** --> 
        <div id="wrapper">
        <!-- Sidebar -->
         @include('user.sidebar')
      
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot achievement-bg" data-stellar-background-ratio="0.5">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <!-- <h2>My account</h2>   -->
                                <!---<small>Hello there, this is my profile.</small>--->
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                        <li><a href="my-profile.php">My Profile</a></li>
                                        <li><a href="achievement.php">Achievement</a></li>
                                        <!-- <li><a href="">Unfiled Organization</a></li> -->
                                    </ol>
                                </div>
                                <!-- end bread -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                </div>
                <!-- end page-title -->
            </div>

            <div class="section" id="my-profile">
                <div class="container-fluid">
                    <div class="row">
                    

                        <div class="col-md-12 col-sm-12">
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <!-- <h1 class="heading1">Goals</h1> -->
                                  
                                </div><!-- end title -->
                          
                                    <!-- <div class="col-lg-12">
                                    
                                    </div> -->
                                    <div class="col-lg-12">
                      <h4>Achievements</h4>
                      <p>Your qualifications, degrees, awards, and exam results.</p>
                    </div>
<div class="col-lg-12 col-md-12 col-sm-12">
   <div class="change-career change-career2 achievement">
   <h4><i class="fa fa-caret-down" aria-hidden="true"></i> Overview</h4>

<div class="col-lg-12 col-sm-12">
  <div class="col-lg-3 col-md-3 col-sm-12">
   <div class="overview-figma-icon">
     <h5 class="trophy"><i class="fa fa-trophy"></i>{{$toalUserLevelAchivement}}</h5>
     <span>Achievements</span>
  <!--    <h5 class="exclamation"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> 1</h5>
     <span>Expiring soon</span> -->
   </div>
  </div>
   <div class="next-step next-step1">
   <div class="col-lg-9 col-md-9 col-sm-12">

   <div class="tree-main treee-main">   
    
    <div class="tree1">
    <span>@if($levelOne[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelOne[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else

    @endif

    {{substr($levelOne[0]->achivementName,0,10)}}</span>

    </div>
  
    <div class="tree2">
    <span>@if($levelTwo[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelTwo[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
   
    @endif
    {{substr($levelTwo[0]->achivementName,0,10)}}</span>
    </div>
  
    <div class="tree3">
    <span>@if($levelThree[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelThree[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    @endif

    {{substr($levelThree[0]->achivementName,0,10)}}</span>

    <span>

    </div>
  
    <div class="tree4">
    <span>@if($levelFour[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelFour[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    @endif
    {{$levelFour[0]->achivementName}}</span>
    </div>
  
    <div class="tree5">
    <span>@if($levelFive[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
   @elseif($levelFive[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelFive[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree6">
    <span>@if($levelSix[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelSix[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelSix[0]->achivementName,0,10)}}</span>
    </span>

    </div>
    <div class="tree7 disabled-color">
    <span>@if($levelSeven[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelSeven[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelSeven[0]->achivementName,0,10)}}</span>
    </span>

    </div>
    <div class="tree8 disabled-color">
    <span>@if($levelEight[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelEight[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelEight[0]->achivementName,0,10)}}</span>
    </span>

    </div>
    <div class="tree9 disabled-color">
    <span>@if($levelNine[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelNine[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelNine[0]->achivementName,0,10)}}</span>
    </span>

    </div>

    <div class="tree10 disabled-color">
    <span>@if($levelTen[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelTen[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelTen[0]->achivementName,0,10)}}</span>
    </span>

    </div>

    <div class="tree11 disabled-color">
    <span>@if($levelEleven[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelEleven[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelEleven[0]->achivementName,0,10)}}</span>
    </span>

    </div>

    <div class="tree12 disabled-color">
    <span>@if($levelTwelve[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelTwelve[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelTwelve[0]->achivementName,0,10)}}</span>
    </span>

    </div>
    <div class="tree13 disabled-color">
    <span>@if($levelThirteen[0]->achivementType=='edu')
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelThirteen[0]->achivementType=='other')
    <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif{{substr($levelThirteen[0]->achivementName,0,10)}}</span>
    </span>

    </div>
    <div class="tree14 disabled-color">
    <span>@if($levelFourteen[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelFourteen[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelFourteen[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree15 disabled-color">
    <span>@if($levelFifteen[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelFifteen[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelFifteen[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree16 disabled-color">
    <span>@if($levelSixteen[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelSixteen[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelSixteen[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree17 disabled-color">
    <span>@if($levelSeventeen[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelSeventeen[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelSeventeen[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree18 disabled-color">
    <span>@if($levelEighteen[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelEighteen[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelEighteen[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree19 disabled-color">
    <span>@if($levelNineteen[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelNineteen[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelNineteen[0]->achivementName,0,10)}}</span>
    </div>

    <div class="tree20 disabled-color">
    <span>@if($levelTwenty[0]->achivementType=='edu')
   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    @elseif($levelTwenty[0]->achivementType=='other')
   <i class="fa fa-trophy" aria-hidden="true"></i>
    @else
    
    @endif
    {{substr($levelTwenty[0]->achivementName,0,10)}}</span>
    </div>


    <div class="tree-root">
    </div>

  </div>

  
  

    </div>
</div>

   </div>
   </div>
   </div>
</div>
<div class="col-lg-12 goals-border">
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
<span class="all-goal">All Achievements</span>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="add-new-box add-new-box1">

  <a href="javascript:void(0)" onclick="addAchivement()">
  <span type="button">+ Add New <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
</div>
</div>
</div>


<div class="col-lg-12 goal-box goal-box1 text-left">
    <ul class="my">
    @foreach($achivementInfo as $achivementInfoData)
    @if($achivementInfoData->is_approved=='1')
      <li class="goal-box-border">
       <!-- <img src="{{asset('assets/images/coursera.jpg')}}" alt="" class="img-responsive"> -->
  
        <div class="icon">

  
@if($achivementInfoData->achivementType=='edu') 
       <i class="fa fa-graduation-cap" aria-hidden="true"></i>
@else
       <i class="fa fa-trophy"></i>
@endif     

        <h4>
        (Approved By Admin)  
        {{$achivementInfoData->achivementName}}
        </h4>
        <span>
         {{substr($achivementInfoData->Issued_by,0,30)}}
        </span><br>
         <span class="three-days">@if(strtotime($achivementInfoData->expires_date)>0) 
         {{date('M-Y',strtotime($achivementInfoData->expires_date))}}
         @else @endif</span>
         <a href="javascript:void(0)" onclick="editAchivement({{$achivementInfoData->id}})"><span type="button">Edit</span></a>  
        </div>
        </li>
        @else

      <li class="goal-box-border not-approved">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <span class="super-admin-span">not approved by super admin</span>
      <img src="asset('assets/images/coursera.jpg')" alt="" class="img-responsive img-mobile" style="display:none;height: 65px;">
    
        <div class="icon">
     @if($achivementInfoData->achivementType=='edu') 
       <i class="fa fa-graduation-cap" aria-hidden="true"></i>
@else
       <i class="fa fa-trophy"></i>
@endif
        <h4>
        (Not Approved By Admin) 
        {{$achivementInfoData->achivementName}}
        </h4>
        <span>
          {{substr($achivementInfoData->Issued_by,0,30)}}
        </span><br>
         <span class="three-days">@if(strtotime($achivementInfoData->expires_date)>0) 
         Exp:-  {{date('M-Y',strtotime($achivementInfoData->expires_date))}}
         @else @endif</span>
        <a href="javascript:void(0)" onclick="editAchivement({{$achivementInfoData->id}})">Edit</a> 
        </div>
        </li>

    @endif
  @endforeach
    </ul>
</div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!-- Modal content-->
      <div class="modal-content shared-scroll">
        <div class="modal-header">
         
          <img src="images/financial1.jpg" alt="" srcset="" style="width:100%">
          <h4 class="modal-title modal-title1" id="AddId"><i class="fa fa-trophy"></i> Add Achievement</h4>
        </div>
        
        <div class="modal-body">
     
        <div class="modal-list modal-list-form">
        <form method="post" name="UserAchivemant" id="UserAchivemant" action="{{url('add-user-achivement')}}" enctype="multipart/form-data">
        @csrf
        <ul>
            <li>
            <label for="NameOfAchivement" class="a-name"><b>Name<apan class="textdenger">*</apan></b></label>
            <input type="text" id="NameOfAchivement" name="NameOfAchivement" maxlength="50" minlength="2" placeholder = "Enter achievement" required>
            </li>

          <li>
          <label for="issued"><b>Issued<apan class="textdenger">*</apan></b></label>
          <input type="month" id="start-date" max="<?php echo date('Y-m');?>" name="start-date" data-point placeholder = "m-Y" required>
          <input type="text" name="editId" id="editId"  hidden>
          </li>

            <li>
            <label for="expire"><b>Expires</b></label>
            <label class="switch">
            <input type="checkbox" name="expires" id="expires" value="p">
            <span class="slider round ronud1"></span>
            </label>
            </li>

            <li id="expDateId" style="display:none;">
            <label for="expDate"><b>Expires Date</b></label>

            <input type="month" id="expDate" name="expDate" data-point  placeholder ="d-Y" style="margin: 0px 0 0px 11px;width: 83%;padding: 5px 10px 5px 10px;background-color: #fff;border: 1px solid rgb(62 163 164 / 55%);">

            </li>

            <li>
            <label for="issued-by" class="issued-by"><b>Issued by</b></label>
            <input type="text" placeholder="Coursera (Online)" name="issuedBy" id="issuedBy" maxlength="50" minlength="2"><a><i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i></a>
           </li>

           <li>
           <label for="link-to-course"><b>Link to course</b></label>
           <input type="url" placeholder="www.coursera.com/fb37fh733f" name="course_url" id="course_url" maxlength="500" minlength="5"><i class="fa fa-link a-link" aria-hidden="true"></i>
          </li>

          <li>
          <label for="duration" class="duration"><b>Duration</b></label>
<!--           <input type="number" placeholder="12 Hours" name="duration"  maxlength="50" minlength="0" min="0" style="margin-left:30px"> -->
         <select name="duration" id="duration">  
         <option>Select Duration</option>
         @for($i=1;$i<=12;$i++)
          <option value="{{$i}}">{{$i}}</option>
         @endfor 
         </select>
          <!-- <i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i> -->
          </li>

          <li>
          <label for="language" class="issued-by"><b>Language</b></label>
          <select name="language" id="language">
                    <option value="">Choose a Language</option>
                    <option value="english(uk)">English(UK)</option>
                    <option value="english(international)">English(International)</option>
                    <option value="japanese">Japanese</option>
          </select>
          </li>

           <li>
           <label for="credits"><b>Credits</b></label>
           <label class="switch">
            <input type="checkbox" name="credits_status" id="credits_status">
            <span class="slider round"></span>
            </label>
           </li>
          
          <li id="cratitsInpNum" style="display:none;">
          <label for="cratitsInp" class=""><b>Enter Credits</b></label>
          <input type="number" placeholder="Enter Credits" name="cratitsInp" maxlength="10" minlength="0" min="0" style="margin: 6px 0 0px 11px;width: 83%;padding: 5px 10px 5px 10px;border: none;background: #fff;border: 1px solid rgb(62 163 164 / 55%);" id="cratitsInp"><i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i>
          </li>

   
          <li>
          <label for="achType" class="issued-by"><b>Achievement<br> Type</b></label>
          <select name="achType" id="achType">
                    <option value="edu">Educational</option>
                    <option value="other">Other</option>
          </select>
          </li>

           <li>
           <label for="notes" class="notes-area"><b>Notes</b></label>
           <textarea placeholder="As part of my job training" minlength="2"  maxlength="300" id="notes" name="notes"></textarea>
            </li>

            
            <input type="text" name="valofData" id="valofData" hidden>

            <li>
            <label for="uploadCertificate"><b>Upload Certificate (<i style="font-size:11px"> File size must be less than 1 MB</i>)</b>
          <!--   <input type="file" accept=".xlsx,.xls,image/jpeg,image/png,.doc,.docx,.ppt,.pptx,.txt,.pdf" name="acchiCertificate" id="acchiCertificate" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0]);document.getElementById('blah').style.display='block';"
            > -->
           <input type="file" accept=".xlsx,.xls,image/jpeg,image/png,.doc,.docx,.ppt,.pptx,.txt,.pdf" name="acchiCertificate" id="acchiCertificate">
           <img src="" id="blah" style="width:50px;height:50px;border-radius:50%;display:none;"></label>
           <input type="text" name="OldImg" id="OldImg" hidden="" />
            </li>
        </ul>
        <div class="space text-left">
        <button tyle="submit" class="btn btn-primary" id="addAchivement" style="cursor:pointer;background-color: #1D9B75 !important">Add Achievement</button>

        </div>
     </form>
        </div>
        </div>

      </div>
      
    </div>
  </div>

<!-- Modal -->
            <!-- end copyrights -->

        <!-- end page-content-wrapper -->
       
    </div>
    <!-- end wrapper -->
  

    <!-- **************
    /END SITE
    **************** -->

    <!-- **************
    DEFAULT JAVASCRIPT FILES
    **************** -->

    <!-- ******
    /END SITE
    ****** -->

    <!-- ******
    DEFAULT JAVASCRIPT FILES
    ****** -->
@endsection
@section('script')    
<script>
function checkLevel(level){

$.ajax({
url:'{{url("checkUserAchivementLevel")}}',
method:'POST',
data:{level:level,'_token':"{{csrf_token()}}"},
success:function(data){
if(data==202){
alert('This achivement level is already use try ony other.');
$('#valofData').val('1');
}else{
$('#valofData').val('0');
}
}
})
}


  $('.barra-nivel').each(function() {
  var valorLargura = $(this).data('nivel');
  var valorNivel = $(this).html("<span class='valor-nivel'>"+valorLargura+"</span>");
    $(this).animate({
        width: valorLargura
    });
});
</script>

    <script type="text/javascript">    
    $(function(){
    $('.chart').easyPieChart({
      size: 115,
      barColor: "#fff",
      scaleLength: 0,
      lineWidth: 8,
      trackColor: "#3333",
      lineCap: "circle",
      animate: 2000,
    });
  });


$('#addAchivement').on('click',function(){
if($('#valofData').val()=='1'){
alert('This achivement level is already use try ony other.');
return false;
}else{
return true;
}
});

$('#achivePosition').on('change',function(){
if($('#achivePosition').is(':checked')){

$('#achivePositionVal').show();
$('#achivementName').prop('required',true);

}else{
$('#achivePositionVal').hide();
$('#achivementName').prop('required',false);
}
});

$("#credits_status").on('change',function(){

 if($("#credits_status").is(':checked')){
  $('#cratitsInpNum').show();
  $('#cratitsInp').prop('required',true);
  }else{
  $('#cratitsInpNum').hide();
  $('#cratitsInp').prop('required',false);
  }
});

$("#expires").on('change',function(){

 if($("#expires").is(':checked')){
  $('#expDateId').show();
  $('#expDate').prop('required',true);
  }else{
  $('#expDateId').hide();
  $('#expDate').prop('required',false);
  }
});


$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0} MB');


jQuery.validator.addMethod("greaterThan", 
function(value, element, params) {

    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) > new Date($(params).val());
    }

    return isNaN(value) && isNaN($(params).val()) 
        || (Number(value) > Number($(params).val())); 
},'Must be greater than {0}.');

$('#UserAchivemant').validate({
 errorPlacement: function(){
            return false;  // suppresses error message text
        }
});



$("#expDate").rules('add', { greaterThan: "#start-date" });
$("#acchiCertificate").rules('add',{ filesize:"acchiCertificate"});

</script>

    
<script>
window.chartColors = {
  red: 'transparent',
  orange: 'tranparent',
//   yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: '#fff',
//   purple: 'rgb(153, 102, 255)',
//   grey: 'rgb(231,233,237)'
};

var randomScalingFactor = function() {
  return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 25);
};

var line1 = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), ];

var line2 = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), ];

var MONTHS = ["1/3", "8/3", "15/3", "22/5"]; //"May", "June", "July", "August", "September", "October", "November", "December"
var config = {
  type: 'line',
  data: {
    labels: MONTHS,
    datasets: [{
      label: "",
      backgroundColor: window.chartColors.red,
      borderColor: window.chartColors.red,
      data: line1,
      fill: false,
    }, {
      label: "",
      fill: false,
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      data: line2,
    }]
  },
  options: {
    responsive: true,
    title:{
      display:true,
      text:''
    },
    tooltips: {
      mode: 'index',
      intersect: false,
    },
   hover: {
      mode: 'nearest',
      intersect: true
    },
    scales: {
      xAxes: [{
        display: true,
        scaleLabel: {
          display: true,
          labelString: ''
        }
      }],
      yAxes: [{
        display: true,
        scaleLabel: {
          display: true,
        },
      }]
    }
  }
};

var ctx = document.getElementById("canvas").getContext("2d");
var myLine = new Chart(ctx, config);

var data1 = [
  randomScalingFactor(),
  randomScalingFactor(),
];

// var data2 = [
//   randomScalingFactor(),
//   randomScalingFactor(),
// ];

var ctx = document.getElementById("chart-area").getContext("2d");
var myPie = new Chart(ctx, {
  type: 'pie',
  data: {
        labels: ["FTE", "FTC"],
    datasets: [{
      label: 'Dataset 1',
      data: data1,
      backgroundColor: [
        "",
        ""
      ],
      hoverBackgroundColor: [
        "",
        ""
      ],
      borderWidth: 5,
    }, {
      label: 'Dataset 2',
      data: data2,
      backgroundColor: [
        "",
        ""
      ],
      hoverBackgroundColor: [
        "",
        ""
      ],
      borderWidth: 5,
    }],
  },
  options: {
    title: {
      display: true,
      text: 'Employee Overview',
      fontStyle: 'bold',
      fontSize: 20
    }
  }
});


function addAchivement(){
$('#myModal').modal('show');
$('#AddId').html('Add Achievement');
$('#expDateId').hide();
$('#cratitsInpNum').hide();
$('#achivePositionVal').hide();
$('#blah').css('display','none');

$('input[type="month"]').val('');
$('input[type="text"]').val('');
$('input[type="checkbox"]').val('');
$('input[type="number"]').val('');
$('input[type="url"]').val('');
$('#duration').val('');

$('input[type="checkbox"]').prop('checked',false);
$('textarea').val('');
$('#achivementName').val('');

$('#language').val('');

$('input[type="checkbox"]').removeAttr('value');
}

function editAchivement(id){
$('#AddId').html('Edit Achievement');    
$.ajax({
url:'{{url('editStudentAchivement')}}',
method:'POST',
data:{id:id,'_token':'{{csrf_token()}}'},
success:function(data){
console.log(data);    
$('#myModal').modal('show');
$('#NameOfAchivement').val(data[0].achivementName);
$('#start-date').val(data[1]);

if(data[0].expires_date){
$('#expires').prop('checked',true);  
$('#expDate').val(data[2]);
$('#expDateId').show();
}

if(data[0].credits_marks!='0'){
$('#credits_status').prop('checked',true);
$('#cratitsInp').val(data[0].credits_marks);  
$('#cratitsInpNum').show();  
}

if(data[0].achivementLavel){
$('#achivePosition').prop('checked',true);
$('#achivementName').val(data[0].achivementLavel);  
$('#achivePositionVal').show();  
}

$('#course_url').val(data[0].providers);

$('#issuedBy').val(data[0].Issued_by);

$('#duration').val(data[0].duration);

$('#notes').val(data[0].notes);

$('#editId').val(data[0].id);

$('#language').val(data[0].language);

$('#course_url').val(data[0].link_to_course);


if(data[0].cr_image){
$('#OldImg').val(data[0].cr_image);
var img='{{asset("public/uploads/achivement")}}'+'/'+data[0].cr_image;
$('#blah').attr('src',img);
$('#blah').css('display','block');
}

$('#course_url').val();

}
})
}
</script>
@endsection