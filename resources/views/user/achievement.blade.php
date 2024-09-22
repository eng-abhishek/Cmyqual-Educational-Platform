@extends('user.layout.layout')
@section('title','cMyQual | Achievements')
@section('content')
<style>
.sidebar-nav li:hover
{
  background-color:#fff!important;
  border-bottom: 2px solid #1D9B75!important;
}
  body.leftmenu .sidebar-nav li.active {
    background: transparent;
    border-bottom: none;
}
body.leftmenu .sidebar-nav li.active span i
{
  color: #212121;
}
body.leftmenu .sidebar-nav li span i:hover
{
  color: #1D9B75!important;
}
body.leftmenu .sidebar-nav li.active a
{
    font-size: 13px;
    font-weight: 400;
}
li#active-achievement {
    text-decoration: none;
    color: #fff !important;
    background: #fff;
    border-bottom: 2px solid #1D9B75;
    width: 102%;
    font-size: 14px;
    font-weight: 600;
}
#expDate
{
  margin: 0px 0 0px 15px!important;
}
#duration
{
    margin-left: 6px!important;
    width: 83.5%!important;
}
.modal-list.modal-list-form ul li select , #achType , #cratitsInp
{
  width: 83.5%!important;
}

span.new-eye-icon
{
  display: inline-block;
  padding-left: 20px;
}
span.new-eye-icon i
{
  font-size: 15px!important;
    color: rgba(33, 33, 33, 0.8)!important;
  }
.tooltip-inner
{
  background-color: #1d9b75!important;
}
.tooltip.bottom .tooltip-arrow
{
  border-bottom-color: #1d9b75!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .tooltip
    {
      transform: rotate( 
249deg
 );
    }
    
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 .fa ,body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 .tooltip 
{
    transform: rotate( 
192deg
 );
}
  #expDate:focus{outline: none !important;}
  input[type=file] {
    display: block;
    border: 1px solid rgb(62 163 164 / 55%)!important;
    padding: 9px!important;
}
input[type=file]:focus{outline: none !important;}
.tree-main.treee-main a{color: #1D9B75;}
.tree1 .fa
{
    margin-bottom: -14px;
    margin-left: 20px;
    display: block;

  }
  .tree2 .fa
{
    display: block;
    margin-top: -33px;
    margin-left: 8px;
    margin-bottom: -30px;
}
.tree2 .tooltip
{
    top: -11.01428px!important;
    left: -13.4677px!important;
}
  .tree3 .fa
{
    display: block;
    margin-top: -35px;
    margin-left: -33px;
}
.tree3 .tooltip{top: -10px!important;
    left: -52px!important;}
.tree4 .fa
{
    display: block;
    margin-bottom: -18px;
    margin-left: 20px;
}
.tree5 .fa
{
    display: block;
    margin-top: 4px;
    margin-bottom: -30px;
    margin-left: 16px;
}
.tree6 .fa
{
  display: block;
    margin-top: -11px;
    /* margin-bottom: -70px; */
    margin-left: -11px;
    transform: rotate( 
226deg
 );
}
.tree6 .tooltip
{
  transform: rotate( 
226deg
 );
 margin-top: -20px;
 margin-left: 4px;
 top: -0.2607px!important;
 left: 3.7385px!important;
}
.tree7 .fa
{
  transform: rotate( 
326deg
 );
    margin-left: 20px;
}
.tree7 .tooltip
{
    top: 32.9818px!important;
    left: 9.5882px!important;
}
.tree8 .fa
{
  margin-left: 18px;
    transform: rotate(
336deg
);
}
.tree8 .tooltip{top: 37.5923px!important;
    left: -2.65363px!important;}
.tree9 .fa{transform: rotate( 
300deg
 );
    margin-left: 15px;}
    .tree9 .tooltip
    {
      transform: rotate( 
300deg
 );
    top: 20.3586px!important;
    left: 21.6103px!important;
    }
.tree10 .fa{transform: rotate( 
277deg
 );
  
    margin-left: 10px;}

    .tree10 .tooltip
    {
      transform: rotate( 
277deg
 );
    top: 3.6333px!important;
    left: 15.499px!important;
    }
   
.tree11 .fa
{
  display: block;
    transform: rotate(
317deg
);
    margin-left: 12px;
    margin-top: -5px;
}
.tree11 .tooltip
{
  transform: rotate(
317deg
);
margin-top: -20px;
top: 49.2981px!important;
left: 22.5717px!important;
}
.tree12 i.fa{
      transform: rotate( 
277deg
 )!important;
    margin-top: 5px;
    margin-left: 13px;
    }
    .tree12.disabled-color .tooltip{
      transform: rotate( 
277deg
 )!important;
 margin-left:10px;
 top: 5.467px!important;
 left: 14.9845px!important;
}

.tree13 .fa
{
  transform: rotate(
290deg
);
    display: block;
    margin-left: 3px;
    margin-top: -10px;
}
.tree13 .tooltip{transform: rotate(
287deg
);
margin-left:25px;
margin-top:-15px;
top: 36.2723px!important;
    left: 7.9862px!important;
}
.tree14 .fa
{
  transform: rotate(
178deg
);
    margin-left: 13px;
}
.tree14 .tooltip
{
  transform: rotate(
178deg
);
top: -27.2202px!important;
left: -5.51987px!important;
}
.tree15 .fa
{
  display: block;
    transform: rotate(
144deg
);
    margin-left: 22px;
    margin-top: 5px;
    float: left;
}
.tree15 .tooltip{transform: rotate(
144deg
);
top: -7.7975px!important;
    left: -16.0578px!important;
}
.tree16 .fa{transform: rotate(
146deg
);
    margin-left: 18px;}
    .tree16 .tooltip{transform: rotate(
146deg
);
top: -23.083px!important;
    left: -46.5657px!important;
    }

.tree17 .fa{transform: rotate(
120deg
);
    margin-left: 15px;}

    .tree17 .tooltip{transform: rotate(
120deg
);
top: -26.294px!important;
    left: -42.0638px!important;
    }
.tree19 .fa
{
  display: block;
    transform: rotate(
175deg
);
    margin-right: 18px;
    margin-top: 5px;
}
.tree18 i.fa
{
  transform: rotate(
190deg
)!important;
    margin-left: 17px;
}
.tree18.disabled-color .tooltip
{
  transform: rotate( 
190deg
 )!important;
    top: -28.94px!important;
    left: -2.0055px!important;

}
.tree19 .tooltip{transform: rotate(
175deg
);
margin-bottom: -35px;
margin-top: -3px;
top: -21.3968px!important;
    left: -2.91565px!important;
}
.tree20 .fa
{
  transform: rotate(
149deg
);
    margin-left: 17px;
}
.tree20 .tooltip
{
  transform: rotate(
149deg
)
;
margin-bottom: -20px;
top: -32.715px!important;
    left: -24.3166px!important;
}
.tooltip{font-size:10px;position:absolute;z-index: 9999999;left:20px;}
.tree1 span.badge
{
   display:none;
   transition:0.5s;
}
.tree1:hover span.badge
{
   display:block;
}
.goals-border
{
  margin-left: 15px;
  width: 97%;
}
li.goal-box-border .icon {
    text-align: left;
    padding-top: 45px;
    width: 100%;
}
li.goal-box-border h4 {
    text-align: center!important;
    padding-bottom:7px;
}
span.issued-by
{
  display:block;
  text-align:center;
}
.tree-1-circle
{
    background: #fff;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    margin-left: 9px;
    position: absolute;
    top: 3px;
    left: -2px;
}
.tree-3-circle
{
    background: #fff;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    margin-top: 5px;
    margin-left: 5px;
}
.tree-5-circle
{
  background: #fff;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    margin-top: 5px;
    margin-left: 5px;
}
.tree-11-circle
{
  background: #fff;
  width: 55px;
    height: 55px;
    border-radius: 50%;
    margin-top: 8px;
    margin-left: 7px;
}
.add-new-box span
{
  padding: 0px 11px;
    margin: 0 auto;
    display: block;
}
.tree-root1
{
  background: #baa591;
    width: 10px;
    border-radius: 10px 10px 0 0;
    transform: rotate(
315deg
);
    height: 40px;
    position: absolute;
    top: 55%;
    left: 47%;
}
.tree-root2
{
  background: #baa591;
    width: 10px;
    border-radius: 10px 10px 0 0;
    transform: rotate( 
49deg
 );
    height: 45px;
    position: absolute;
    top: 55%;
    left: 51%;
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
div.tree4
{
  margin-top: -1% !important;
}
.next-step.next-step1 .tree-main.treee-main .tree6 {
  left: 52%!important;
    transform: rotate( 
135deg
 )!important;
    top: -48%!important;
}
.tree7.disabled-color {
  left: 300px!important;
    top: 62%!important;
}
.tree8.disabled-color {
  left: 355px!important;
  top: 68%!important;
}
.tree9.disabled-color
{
  left: 270px!important;
}
.tree10.disabled-color
{
  left: 385px!important;
    top: -45%!important;
}
.tree11 {
  margin-top: 0.5%!important;
    margin-left: 95px!important;
}
.next-step.next-step1 .tree12.disabled-color {
  transform: rotate( 
135deg
 )!important;
    margin-top: 2%!important;
    margin-left: 220px!important;
}
.tree13.disabled-color
{
  top: -24%!important;
    left: 377px!important;
}
.tree14.disabled-color
{
  left: 617px!important;
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
  left: 375px!important;
    top: -25%!important;
}
.tree20.disabled-color
{
  left: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11.disabled-color {
    margin-left: 140px!important;
    margin-top: -1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .next-step.next-step1 .tree-main.treee-main .tree2 {
  margin-left: 136px!important;
  top: 0%!important;
}

body.leftmenu #wrapper.toggled #page-content-wrapper .next-step.next-step1 .tree-main.treee-main .tree3{
    left: 440px!important;
    top: 33%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4
{
  left: 54%!important;    margin-top: -0% !important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree5.disabled-color {
    margin-top: 0% !important;
    left: 54%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .next-step.next-step1 .tree-main.treee-main .tree6 {
  margin-left: 1%!important;
    transform: rotate( 
135deg
 )!important;
    margin-top: 0%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7.disabled-color {
  left: 380px!important;
    top: 150px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8.disabled-color {
    left: 430px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9.disabled-color
{
  top: -8%!important;
    left: 370px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10.disabled-color {
    top: -20%!important;
    left: 415px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12.disabled-color
{
  left: 590px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13.disabled-color {
  margin-left: 170px!important;
    margin-top: -1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14.disabled-color {
  left: 650px!important;
    top: 59.5%!important;
    transform: rotate( 
234deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16.disabled-color {
  left: 600px!important;
    top: 60%!important;
    transform: rotate( 
259deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17.disabled-color {
  left: 635px!important;
    transform: rotate( 
190deg
 )!important;
    top: -36%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18.disabled-color {
  margin-left: 180px!important;
    margin-top: -13px!important;
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
    left: 61%!important;
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
    left:350px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree3 {
  left: 350px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    margin-left: -1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
  margin-left: 60px!important;
    margin-top: 0%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
  margin-left: 70px!important;
    margin-top: 1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
  margin-top:0%!important;
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
  margin-left: 60px!important;
    margin-top: 0%!important;
}
.tree-root1
{
  left: 48% !important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
  margin-left: 69px!important;
    margin-top: 1.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
  margin-left: 61px!important;
    margin-top: 0%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17
{
  margin-left: 60px!important;        margin-top: -1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
  margin-left: 40px!important;
    margin-top: 5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
  margin-left: -1%!important;
    margin-top: -1%!important;
}
  .tree-main.treee-main .tree2 {
    margin-left: 80px!important;
}
  .tree-main.treee-main .tree4 {
    top: 0% !important;
    left: 56%!important;
}

.tree-main.treee-main .tree6 {
  margin-left: 1%!important;
    transform: rotate( 
134deg
 )!important;
    margin-top: -10px!important;
    }
    .tree7 {
      margin-left: 30px!important;
    margin-top: -2%!important;
}
.tree8 {
    margin-left: 30px!important;
    top: 68%!important;
}
.tree9 {
    margin-top: -1%!important;
    margin-left: 50px!important;
}
.tree10
{
  margin-top: -1%!important;
    margin-left: 62px!important;
}
.tree11
{
    top: 20%!important;
    left: 225px!important;
}
.tree12.disabled-color {
  transform: rotate( 
158deg
 )!important;
    margin-top: -2%!important;
    margin-left: 166px!important;
}
.tree13 {
  margin-top: 0%!important;
    margin-left: 60px!important;
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
    margin-left: 65px!important;
}
.tree16 {
  margin-left: 50px!important;
    top: 65%!important;
}
.tree17 {
  margin-left: 52px!important;
    margin-top: 10px!important;
}
.tree18 {
  margin-top: 1%!important;
    left: 329px!important;
    transform: rotate( 
89deg
 )!important;
}
.tree20 {
    transform: rotate( 
194deg
 )!important;
 margin-top: -1%!important;
    margin-left: -1%!important;
}
}
  @media(min-width:1440px)
  {
  .tree19 .fa {
    display: block;
    transform: rotate( 
224deg
 )!important;
    margin-right: 18px!important;
    margin-top: 0px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 .fa, body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 .tooltip {
    transform: rotate( 
310deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .fa, body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .tooltip {
    transform: rotate( 
289deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 .tooltip {
    transform: rotate( 
197deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 .fa ,body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 .tooltip
{
    transform: rotate( 
172deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 .tooltip {
    transform: rotate( 
245deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .tooltip
{
  transform: rotate( 
208deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 .fa
{
  transform: rotate( 
133deg
 )!important;
 margin-left: -20px!important;
 margin-top: 20px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 .tooltip
{
  transform: rotate( 
133deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 .tooltip {
    transform: rotate( 
131deg
 )!important;
}
.tree19 .tooltip {

    transform: rotate( 
224deg
 )!important;
    
}
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
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    top: -40%!important;
    left: 46.95%!important;
}
.tree-main.treee-main .tree6 {
    left: 49%!important;
    transform: rotate( 
141deg
 )!important;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: 254px!important;
    top: 50%!important;
    transform: rotate( 
41deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 300px!important;
    top: 66%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
  top: -3%!important;
    transform: rotate( 
48deg
 )!important;
    left: 258px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  top: -20%!important;
    left: 306px!important;
    transform: rotate( 
67deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11
{
  top: 20%!important;
    left: 262px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
  transform: rotate( 
166deg
 )!important;
    top: -53%!important;
    left: 475px!important;
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
    left: 585px!important;
    top: 43.5%!important;
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
    top: 62%!important;
    transform: rotate( 
225deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
  left: 530px!important;
    transform: rotate( 
190deg
 )!important;
    top: -26%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
  top: -47%!important;
    left: 342px!important;
    transform: rotate( 
111deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    left: 41%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    transform: rotate( 
212deg
 )!important;
 top: -8%!important;
    left: 64%!important;
}
.tree-main.treee-main .tree5 {
  margin-top: -1% !important;
}
.tree-main.treee-main .tree6
{
  left: 45.9%!important;
    transform: rotate( 
136deg
 )!important;
    top: -35%!important;
}
.tree7 {
    left: 190px!important;
    top: 59%!important;
}
.tree8 {
    left: 240px!important;
    top: 70%!important;
}
.tree9 {
  top: -2%!important;
    left: 168px!important;
}
.tree10
{
    top: -18%!important;
    left: 209px!important;
}
.tree12 {
    transform: rotate( 
93deg
 )!important;
 top: -47%!important;
    left: 282px!important;
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
 top: -8.5%!important;
    left: 493px!important;
}
.tree15 {
    top: 15%!important;
    left: 490px!important;
}
.tree16 {
  left: 509px!important;
    top: 49%!important;
}
.tree17 {
  left: 467px!important;
    top: 62%!important;
}
.tree18
{
    left: 380px;
    top: -53%!important;
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
    top: -25%!important;
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
  left: 46.95%;
  transform: rotate( 
134deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7
{
  left: 224px;
    top: 52%;
    transform: rotate( 
37deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1
{
  left:48%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
  left: 270px;
    top: 68%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
  left: 443px;
    top: -54%;
    transform: rotate( 
169deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  transform: rotate( 
113deg
 );
    position: absolute;
    top: -48%;
    left: 332px;
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
 top: -18%;
    left: 272px;
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
195deg
 );
    top: -28.5%;
    left: 505px;
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
  top: -8%;
    left: 534px;
    transform: rotate( 
201deg
 );
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
  left: 545px;
    top: 45%;
    transform: rotate( 
223deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: -1%;
    left: 229px;
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
242deg
 );
    top: 64%;
    left: 62%;
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
    left: 110px;
    top: 46%;
  }
  .tree8
  {
    left: 160px;
    top: 62%;
  }
  .tree9
  {
    top: -2%;
    transform: rotate( 
63deg
 );
  }
  .tree12
  {
    transform: rotate( 
80deg
 );
    top: -47%;
    left: 240px;
  }
  .tree13
  {
    top: -24%;
    left: 247px;
    transform: rotate( 
74deg
 );
  }
  .tree14
  {
    top: -27.5%;
    left: 424px;
    transform: rotate( 
182deg
 );
  }
  .tree15
  {
    transform: rotate( 
215deg
 );
    top: 16%;
    left: 452px;
  }
  .tree16
  {
    top: 44%;
    left: 480px;
  }
  .tree17
  {
    left: 442px;
    top: 63%;
    transform: rotate( 
243deg
 );
  }
  .tree18
  {
    top: -49%;
  }
  .tree19
  {
    transform: rotate( 
184deg
 );
    top: -25%;
    left: 52.5%;
  }
  .tree20
  {
    transform: rotate( 
208deg
 );
    top: -8%;
    left: 69%;
  }
  .tree-main.treee-main .tree6 {
    margin: 0;
    border-radius: 50px 50px 50px 0;
    position: absolute;
    width: 55px;
    height: 55px;
    top: -42%;
    background: rgba(33, 33, 33, 0.1);
    left: 44.95%;
    transform: rotate( 
135deg
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
    top: 37% !important;
    left: 58%;
}
@media(max-width:1600px)
{
    .tree3 {
    left: 250px!important;
}
.tree12 .fa , .tree12 .tooltip{
    transform: rotate( 
204deg
 )!important;
}
.tree18 .fa , .tree18 .tooltip {
    transform: rotate( 
270deg
 )!important;
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
    min-height: 200px;
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
body.leftmenu #wrapper {
    padding-top: 71px!important;
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
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree2 {
    left: 208px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 200px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4
{
  left: 56%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree5
{
    top: 33% !important;
    left: 59%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    top: -38%;
    left: 44.95%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: 132px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 180px;
    top: 67%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    left: 343px;
    top: -48%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  transform: rotate( 
79deg
 );
 top: -16%;
    left: 180px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .fa, body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .tooltip {
    transform: rotate( 
282deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .fa
{
  margin-left: 17px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11
{
    top: 19.5%;
    left: 142px;
    transform: rotate( 
47deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12
{
  top: -45%;
    left: 235px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    transform: rotate( 
71deg
 );
 top: -22%;
    left: 240px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14
{
  left: 412px;
  top: -31.5%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    transform: rotate( 
218deg
 );
    position: absolute;
    top: 12%;
    left: 436px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    top: -11%;
    left: 440px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    left: 428px;
    top: 62%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 .fa {
    transform: rotate( 
141deg
 );
 margin-left: 20px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: -3%;
    left: 129px;
    transform: rotate( 
71deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 i.fa {
    transform: rotate( 
289deg
 )!important;
    }
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19
{
  left: 51.5%;
    transform: rotate( 
195deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 .fa
{
  transform: rotate( 
167deg
 );
}

body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    transform: rotate( 
216deg
 );
    top: 42%;
    left: 72%;
}
  .tree-root2
  {
    left: 52%;
  }
  .tree-main.treee-main .tree2
  {
    top: 5%;
    left: 138px!important;
  }
  .tree-main.treee-main .tree3
  {
    left: 130px!important;
  }
  .tree-main.treee-main .tree4
  {
    top: 5% !important;
    left: 58%;
  }
  .tree-main.treee-main .tree5
  {
    left: 60%;
  }
  .tree-main.treee-main .tree6
  {
    top: -36%;
    left: 44.5%;
  }
  .tree7 {
    left: 60px;
    top: 49%;
}
.tree8 {
    left: 105px;
    top: 65%;
}
  .tree9 {
    top: -3%;
    left: 70px;
  }
  .tree10
  {
    top: -22.5%;
    left: 106px;
  }
  .tree11
  {
    top: 20%;
    left: 72px;
  }
  .tree12
  {
    top: -45%;
    left: 172px;
  }
  .tree13
  {
    top: -22%;
    left: 169px;
  }
  .tree14 {
    top: -26.5%;
    left: 340px;
  }
  .tree15
  {
    top: 17%;
    left: 364px;
  }
  .tree16
  {
    left: 394px;
  }
  .tree17 {
    left: 358px;
    top: 62%;
  }
  .tree18 {
    top: -45%;
    left: 276px;
}
  .tree19
  {
    top: -22%;
    left: 52.5%;
  }
  .tree20
  {
    top: -7%;
    left: 73.5%;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper #my-profile
  {
    padding-left: 50px;
  }
  #my-profile
  {
    padding-top:8%;
  }
  .change-career.change-career2.achievement {
    height: 380px;
}
.add-new-box
{
  width: 66%;
}
.goal-box ul li {
    width: 32%;
}

}
@media(max-width:768px)
{
  
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1 {
    left: 44%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root2 {
    left: 51%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree2 {
    left: 78px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 90px!important;
    top: 36%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4 {
    left: 58%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    top: -36%;
    left: 39.95%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: 32px;
    top: 55%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 280px;
    top: 62%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
  left: 210px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  left: 47px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    top: 24.5%;
    left: 20px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12
{
  left: 107px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13
{
  left: 105px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
    left: 286px;
    top: -29.5%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15
{
  top: 15%;
    left: 303px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    top: -8%;
    left: 310px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    left: 83px;
    top: 67%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 2%;
    left: 13px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
    top: 44%;
    left: 79.5%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul.my {
    margin-left: -2.5%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper ul.my a.trash-icon {
    margin-left: 40%!important;
}
  .goals-border {
    margin-left: 15px;
    width: 94%;
}
.goal-box ul.my {
    margin-left: -3.5%;
}
  .tree-root1
  {
    top: 57%;
    left: 42%;
  }
  .tree-main.treee-main .tree2 {
    top: 5%;
    left: 15px!important;
}
  .tree-main.treee-main .tree3 {
    left: 30px!important;
}
.tree-main.treee-main .tree4 {
    top: 5% !important;
    left: 62%;
}
.tree-main.treee-main .tree6
{
  left: 37.5%;
}
.tree7 {
    left: -30px;
    top: 56%;
}
.tree8 {
    left: 25px;
    top: 68%;
}
.tree9 {
    top: -16%;
    left: -12px;
}
.tree10 {
    top: 3.5%;
    left: -50px;
}
.tree11 {
  top: 26%;
    left: -40px;
}
.tree12 {
    top: -45%;
    left: 48px;
}
.tree13
{
  left: 47px;
}
.tree14 {
    top: -21.5%;
    left: 217px;
}
  .tree15 {
    top: 21%;
    left: 238px;
}
.tree16 {
    left: 240px;
    top: 51%;
}
.tree17 {
    left: 198px;
    top: 67%;
}
.tree18
{
  left: 156px;
}
.tree19
{
  left: 52.5%;
}
.tree20 {
    top: -2%;
    left: 90.5%;
}
  #my-profile
  {
    padding-top:16%;
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
    width: 48%;
}
ul.my a.trash-icon
{
  margin-left: 37%!important;
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
  
  body.leftmenu #wrapper.toggled #page-content-wrapper .add-new-box span {
    padding: 0px 3px;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root2 {
    left: 52%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree2 {
    left: 25px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 30px!important;
    top: 38%;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4 {
    left: 64%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree5 {
    top: 39% !important;
    left: 61%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    top: -36%;
    left: 40.95%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: -40px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 0px;
    top: 75%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    left: 150px;
    top: -57%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 {
  left: -11px;
  top: -18%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: -10px!important;
    top: 31.5%!important;
    width: 50px;
    height: 50px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .tree-11-circle {
    width: 35px;
    height: 35px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .fa {
    margin-top: -9px;
    margin-left: 6px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    left: 69px;
    top: -53%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    left: 45px;
    top: -27%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 239px!important;
    top: 27.5%!important;
    width: 50px;
    height: 50px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .tree-11-circle {
    width: 35px;
    height: 35px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
    left: 242px;
    top: -27.5%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .fa {
  margin-top: -2px;
  margin-left: 12px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    top: 0%;
    left: 254px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    left: 200px;
    top: 75%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 8%;
    left: -38px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    left: 60.5%;
    top: -32%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    top: 57%;
    left: 87.5%;
}
  .tree-root1
  {
    left: 44%;
  }
  .tree-main.treee-main .tree2
  {
    left: 37px!important;
  }
  .tree-main.treee-main .tree3 {
    left: 45px!important;
}
  .tree-main.treee-main .tree4
  {
    left: 63%;
  }
  .tree-main.treee-main .tree5
  {
    top: 42% !important;
  }
  .tree-main.treee-main .tree6 {
    left: 38.8%;
    top: -41%;
}
  .tree7 {
    left: -25px;
    top: 62.5%;
}
  .tree8
  {
    top: 76%;
  }
  .tree9{
    top: -21%;
    left: -4px;
  }
  .tree10 {
    top: 2.5%;
    left: -34px;
}
  .tree11 {
    top: 28%;
    left: -20px;
}
.tree12 {
    top: -57%;
    left: 70px;
}
.tree13 {
    left: 53px;
    top: -30%;
}
.tree14 {
    top: -29.5%;
    left: 238px;
}
  .tree15 {
    top: 23%;
    left: 258px;
}
.tree16 {
    left: 258px;
    top: 58%;
}
.tree17 {
    left: 217px;
    top: 77%;
}
.tree18 {
  left: 166px;
    top: -55%;
}
.tree19 {
    left: 54.5%;
    top: -28%;
}
.tree20 {
    top: -6%;
    left: 88.5%;
}

.change-career.change-career2.achievement h4
{
  top: 9px;
}
.overview-figma-icon {
    margin-top: 0px;
    margin-bottom: 90px;
}
.overview-figma-icon h5.trophy
{
  position: absolute;
  top: -195px;
  font-size: 14px;
}
.overview-figma-icon i {
    padding-right: 7px;
    font-size: 14px!important;
}
.overview-figma-icon span{position: absolute;top: -180px;}
  .change-career.change-career2.achievement {
    height: auto;
}
.add-new-box span {
    padding: 0px 5px;
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
  width: 92.5%;
}
.goal-box ul.my {
    margin-left: -0.5%;
    width: 97%;
}
ul.my a.trash-icon {
    margin-left: 81%!important;
}
#NameOfAchivement {
    margin: 5px 0 0px 0px!important;
    width: 100%!important;
}
#expDate{
    margin: 0px 0 0px 0px!important;
    width: 100%!important;
}
#duration {
    margin-left: 0px!important;
    width: 100%!important;
}
#language
{
  width: 100%!important;
}
#achType {
    margin-left: 0px!important;
    margin-top: 0px!important;
    width: 100%!important;
}
#cratitsInp {
    margin-left: 0px !important;
    min-width: 100%!important;
}
.modal-list.modal-list-form ul li textarea#notes {
    margin: 25px 0 0px 0px!important;
    width: 100%!important;
}
.modal-list ul {
    padding-left: 0px;
}
#issuedBy , #course_url
{
  margin-left: 0px !important;
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

  body.leftmenu #wrapper.toggled #page-content-wrapper .add-new-box span {
    padding: 0px 0px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul.my {
    margin-left: -5.5%;
    width: 105%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper ul.my a.trash-icon {
    margin-left: 85%!important;
}
  
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: -15px;
    width: 40px;
    height: 40px;
    top: 68%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 .fa
{
    margin-left: 10px;
    margin-top: -6px;
    display: block;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 20px;
    top: 79%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .tree-11-circle {
    margin-top: 8px;
    margin-left: 6px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .tree-11-circle {
    margin-top: 8px;
    margin-left: 7px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16
{
    width: 40px;
    height: 40px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 .fa
{
    margin-left: -64px;
    margin-top: 23px;
    display: block;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 11%;
    left: -20px;
    width: 40px;
    height: 40px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 i.fa
{
    margin-left: 5px;
    display: block;
    margin-top: -10px;
}
  .goals-border
  {
    width: 100%;
    margin-left: 0px;
  }
  .goal-box ul.my {
    margin-left: -4.5%;
    width: 103%;
}
  .tree-main.treee-main .tree2
{
  left:-10px;
}
.tree-main.treee-main .tree3 {
    left: 0px;
}
.tree-main.treee-main .tree4 {
    left: 63%;
}
.tree7 {
    left: -15px;
}
.tree8 {
    top: 78%;
    left: 36px;
}
.tree10 {
    top: 5.5%;
    left: -24px;
}
 .tree11 {
    left: -10px!important;
    top: 31.5%!important;
    width: 55px;
    height: 55px;
}
.tree11 .tree-11-circle
{
    margin-top: 6px;
    margin-left: 5px;
    width: 45px;
    height: 45px;
}
.tree15 {
    left: 84%!important;
    top: 28.5%!important;
    width: 55px;
    height: 55px;
}
.tree15 .fa
{
    margin-left: 14px;
    margin-top: 0px;
}
.tree15 .tree-11-circle
{
    margin-top: 6px;
    margin-left: 5px;
    width: 45px;
    height: 45px;
}
.tree20 {
    top: -5%;
    left: 88.5%;
}
.change-career.change-career2.achievement
  {
    width: 113%;
    margin-left: -20px;
  }

}
@media(max-width:360px)
{

  span.all-goal {
    font-size: 13px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .add-new-box span
  {
    padding-top: 3px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul.my {
    margin-left: -1.5%;
    width: 98%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper ul.my a.trash-icon {
    margin-left: 78%!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree2 {
    left: 11.5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 23px!important;
    top: 29%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree4
  {
    left: 61.5%!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-main.treee-main .tree6 {
    top: -48%;
    left: 32.95%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7
{
  top: 55%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 .fa
{
  margin-left: 34px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8
{
  top: 66%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    left: 122px;
    top: -54%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  left: -16px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 .fa {
    margin-left: 34px;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: -27px!important;
    top: 25.5%!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .fa
  {
    margin-left: 32px;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    left: 11px;
    top: -52%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    left: 32px;
    top: -24%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
    left: 165px;
    top: -34.5%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 176px!important;
    top: 17.5%!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .fa {
    margin-top: -5px;
    margin-left: 35px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    top: -5%;
    left: 182px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 .fa
{
  margin-left: -59px;
    margin-top: 28px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    left: 136px;
    top: 64%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 .fa
{
  margin-left: 42px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 4.5%;
    left: -35px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 i.fa
{
  margin-left: 28px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    left: 50.5%;
    top: -25%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
  top: 47%;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper #my-profile
  {
    padding-top: 70px!important;
  }
  .tree-root1 {
    top: 54%;
  }

  .tree1 .fa {
    margin-bottom: -27px;
    margin-left: 15px;
  }
  .tree-main.treee-main .tree1 span
{
    top: 32px;
    right: 0px;
}

.tree-main.treee-main .tree2 {
    left: 24px!important;
}
.tree-main.treee-main .tree2 span
{
  top: 34px;
}
.tree2 .fa
{
    margin-top: -23px;
    margin-left: 15px;
}
.tree-main.treee-main .tree3 {
    left: 33px!important;
    top: 30%;
}
.tree3 .fa
{
  margin-left: -13px;
}
.tree-main.treee-main .tree4 {
    left: 60%;
}
.tree-main.treee-main .tree4 span
{
    top: 35px;
    right: 3px
}
.tree4 .fa
{
  margin-left: 15px;
}
.tree-main.treee-main .tree5 {
    left: 63%;
    margin-top: -11px;
}
.tree-main.treee-main .tree5 span {
    top: 40px;
    right: 5px;
}
.tree5 .fa
{
  margin-left: 5px;
}
.tree-main.treee-main .tree6 {
    left: 36.8%;
    top: -47%;
}
.tree-main.treee-main .tree6 span
{
    font-size: 10px!important;
    padding-top: 40px!important;
    padding-left: 20px;
}
.tree7
{
  top: 54.5%;
  left: -20px;
}
.tree7 .fa
{
  margin-left:42px;
}
.tree8 {
    top: 67%;
}
.tree8 .fa {
    margin-left: 42px;
}
.tree9
{
  left: -12px;
}
.tree9 .fa
{
  margin-left: 40px;
}
.tree10 {
    top: 2.5%;
    left: -40px;
    width: 45px;
    height: 45px;
}
.tree10 .fa
{
  margin-left: 32px;
}
.tree11 {
    left: -21px!important;
    top: 24.5%!important;
}
.tree11 .fa
{
  margin-left: 42px;
}
.tree12 {
    top: -54%;
    left: 29px;
}
.tree12 i.fa
{
  margin-left: 40px;
}
.tree13 {
    left: 44px;
    top: -25%;
}
.tree13 .fa
{
    margin-left: 30px;
    margin-top: -10px;
}
.tree14 {
  top: -39.5%;
    left: 188px;
}
.tree14 .fa
{
  margin-left: 40px;
}
.tree15 {
    left: 83%!important;
    top: 16.5%!important;
}
.tree15 .fa {
    margin-left: 38px;
}
.tree16 {
    left: 188px;
    top: 56%;
}
.tree16 .fa
{
  margin-left: 42px;
}
.tree17 {
    left: 135px;
    top: 67%;
}
.tree17 .fa
{
  margin-left: 40px;
}
.tree18 {
    left: 139px;
}
.tree18 i.fa
{
  margin-left: 45px;
}
.tree19
{
  top: -25%;
}
.tree19 .fa
{
    margin-right: 13px;
    margin-top: 3px;
}
.tree20 {
    top: -8.5%;
    left: 85.5%;
    width: 45px;
    height: 45px;
}
.tree20 .fa
{
  margin-left: 40px;
}
.goals-border {
    width: 91%;
    margin-left: 15px;
}
.add-new-box.add-new-box1 {
    width: 65%;
}
.add-new-box span
{
  padding-top: 2px;
}
.goal-box ul.my {
    margin-left: -1.5%;
    width: 97%;
}
ul.my a.trash-icon {
    margin-left: 78%!important;
}
.tree-main.treee-main {
    margin-left: 3px;
}

  .tree1, .tree2, .tree3, .tree4, .tree5 , .tree13 ,.tree19 {
    width: 55px;
    height: 55px;
}

.tree1 .tree-1-circle , .tree2 .tree-5-circle , .tree3 .tree-3-circle , .tree4 .tree-5-circle , .tree5 .tree-5-circle , .tree13 .tree-11-circle,
.tree19 .tree-11-circle
{
    width:45px;
    height:45px;
}
.tree19 .tree-11-circle , .tree13 .tree-11-circle
{
  margin-top: 5px;
}
.change-career.change-career2.achievement {
    width: 100%;
    margin-left: 0;
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
/* .goal-box-border.not-approved .close:hover + span.super-admin-span {
 
 display:block;
 position: absolute;
 background: #ffffff;
   transform: translate(10px, 40px);
   padding: 20px;
} */
.goal-box-border.not-approved .icon:hover span.super-admin-span {
 
  display:block;
  position: absolute;
  background: #ffffff;
  transform: translate(0px, -45px);
  padding: 12px 44px;
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
    width: 83.9%;
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
    @if(Session::has('remove_achive'))
<div id="remove_achi_popup" style="z-index: 999; height: auto; width: 305px; background-color:#1D9B75; position: fixed; top: 38px; text-align: center; vertical-align: sub; left: 1035px; margin-top: 35px; color: rgb(25, 25, 25);">
    <p style="padding-top:5px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_achive')}}</p>
</div>
@endif

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
    
<!--------------layer one ------->

   <div class="tree3">
    <div class="tree-3-circle">
    <span>@if($tree[0]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[0]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
</a>
    @elseif($tree[0]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[0]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
</a>
    @else
    @endif

  </span> 

    <span>
    </div>
    </div>

    <div class="tree2">
    <div class="tree-5-circle">
    <span>@if($tree[1]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[1]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
    </a>
    @elseif($tree[1]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[1]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
    </a>
    @else
   
    @endif
   </span>
    </div>
    </div>
  
    <div class="tree1">
    <div class="tree-1-circle">
    <span>@if($tree[2]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[2]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
    </a>
    @elseif($tree[2]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[2]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
    </a>
    @else

    @endif
    
   </span>
    </div>
    </div>
  
    <div class="tree4">
    <div class="tree-5-circle">
    <span>@if($tree[3]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[3]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
    </a>
    @elseif($tree[3]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[3]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
</a>
    @else
    @endif
    </span>
    </div>
    </div>

    <div class="tree5">
    <div class="tree-5-circle">
    <span>@if($tree[4]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[4]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
   </a>
   @elseif($tree[4]['achivementType']=='other')
   <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[4]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    </div>
    </div>

<!-------------- end layer one ------->


<!------------ layer two --------------->

    <div class="tree11 disabled-color">
    <div class="tree-11-circle">
    <span>@if($tree[5]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[5]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[5]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[5]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    
    

    </div>
    </div>



<div class="tree13 disabled-color">
    <div class="tree-11-circle">
    <span>@if($tree[6]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[6]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[6]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[6]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
   
   </div>
   </div>



    <div class="tree19 disabled-color">
    <div class="tree-11-circle">
    
    <span>@if($tree[7]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[7]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>

    @elseif($tree[7]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[7]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
   </span>
    </div>
</div>

  <div class="tree15 disabled-color">
    <div class="tree-11-circle">
    <span>@if($tree[8]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[8]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[8]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[8]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
    </span>
    </div>
</div>
<!------------ end layer two --------------->

<!--------------- layer three -------------->

@if($tree[9]['achivementType'])

<div class="tree8 disabled-color">
    <span>@if($tree[9]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[9]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[9]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[9]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif</span>
    </div>

     <div class="tree7 disabled-color">
       
    <span>@if($tree[10]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[10]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[10]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[10]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    </div>

    <div class="tree9 disabled-color">
    <span>@if($tree[11]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[11]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[11]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[11]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    </div>


    <div class="tree10 disabled-color">
    <span>@if($tree[12]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[12]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[12]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[12]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    </div>


    <div class="tree12 disabled-color">
    <span>@if($tree[13]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[13]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[13]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[13]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    </span>
    </div>

    <div class="tree6 disabled-color">
    <span>@if($tree[14]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[14]['achivementName'],0,20)}}">
    <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[14]['achivementType']=='other')

    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[14]['achivementName'],0,20)}}">
    <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif</span>
    </div>

   
    <div class="tree18 disabled-color">
    <span>@if($tree[15]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[15]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[15]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[15]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
  </span>
    </div>

   <div class="tree14 disabled-color">
    <span>@if($tree[16]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[16]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>

    @elseif($tree[16]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[16]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
    
  </span>
    </div>


   <div class="tree20 disabled-color">
    <span>@if($tree[17]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[17]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>
    @elseif($tree[17]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[17]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
   </span>
    </div>


    <div class="tree16 disabled-color">
    <span>@if($tree[18]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[18]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>

    @elseif($tree[18]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[18]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
   </span>
    </div>

    <div class="tree17 disabled-color">
    <span>@if($tree[19]['achivementType']=='edu')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[19]['achivementName'],0,20)}}">
   <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
</a>

    @elseif($tree[19]['achivementType']=='other')
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{substr($tree[19]['achivementName'],0,20)}}">
   <i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
</a>
    @else
    
    @endif
    </span>
    </div>
 @else
 @endif   


<!------------- layer three-------------->

    <div class="tree-root">
    </div>
    <div class="tree-root1">
    </div>
    <div class="tree-root2">
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

      <li class="goal-box-border"> <!---not-approved-->
  
    @if($achivementInfoData->is_approved=='1')
    <a class="float-left"><span class="badge badge-pill badge-warning text-black float-right" style="position:absolute;background-color:#1D9B75!important;color:white">
    Approved</span></a>
    @elseif($achivementInfoData->is_approved=='0')

    <a class="float-left"><span class="badge badge-pill badge-warning text-black float-right" style="position:absolute;background-color:#ffc107!important;">
    Not Approved</span></a>

    @else

    <a class="float-left"><span class="badge badge-pill badge-warning text-black float-right" style="position:absolute;background-color:#dc3545!important;color:white">
    Rejected</span></a>

    @endif 


    <span style=""><a href="javascript:void(0)" onclick="removeAchievement({{$achivementInfoData->id}})" class="trash-icon" style="position: absolute;width: 3%;margin-left: 26%;text-align:right;padding-right:10px;z-index: 1;">
    <i class="fa fa-trash" aria-hidden="true"></i></a></span>

      <img src="asset('assets/images/coursera.jpg')" alt="" class="img-responsive img-mobile" style="display:none;height: 65px;">
    
        <div class="icon">
     @if($achivementInfoData->achivementType=='edu') 
       <i class="fa fa-graduation-cap" aria-hidden="true"></i>
@else
       <i class="fa fa-trophy"></i>
@endif
        <h4>
    
        {{$achivementInfoData->achivementName}}
        </h4>
        <!-- <span class="super-admin-span">not approved by super admin</span> -->
        <span class="issued-by">
     @if($achivementInfoData->Issued_by)
     Issued By: {{substr($achivementInfoData->Issued_by,0,30)}}
     @else
     Issued By: N/A
     @endif   
        </span>
        <br>
        <span class="three-days">@if(strtotime($achivementInfoData->Issued)>0) 
         Issued On: {{date('M-Y',strtotime($achivementInfoData->Issued))}}
         @else @endif</span>
        <span class="new-eye-icon"><a href="{{asset('public/achivementPDF/'.$achivementInfoData->pdfFile)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></span>

        <a href="javascript:void(0)" onclick="editAchivement({{$achivementInfoData->id}})">Edit</a> 
        </div>
        </li>


    
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
            <input type="text" style="margin-left:35px" placeholder="Enter Issued by" name="issuedBy" id="issuedBy" maxlength="50" minlength="2"><!-- <a><i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i></a> -->
           </li>

           <li>
           <label for="link-to-course"><b>Link to course</b></label>
           <input type="url" placeholder="https://cmyqual.co.uk/" name="course_url" id="course_url" style="margin-left:9px" maxlength="500" minlength="5"><!-- <i class="fa fa-link a-link" aria-hidden="true"></i> -->
          </li>

          <li>
          <label for="duration" class="duration"><b>How long did <br> it take?</b></label>
          <input type="text" name="duration" id="duration" style="margin-left: 5px;width: 84%;" maxlength="50" minlength="0">
<!--          <select name="duration" id="duration">  
         <option value="">Select Duration</option>
         @for($i=1;$i<=12;$i++)
          <option value="{{$i}}">{{$i}}</option>
         @endfor 
         </select> -->
          <!-- <i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i> -->
          </li>

          <li>
          <label for="language" class="issued-by"><b>Language</b></label>
          <select name="language" id="language">
                    <option value="">Choose a Language</option>
                    <option value="English">English</option>
                    <option value="Other">Other</option>
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
          <input type="number" placeholder="Enter Credits" name="cratitsInp" maxlength="10" minlength="0" min="0" style="margin: 6px 0 0px 11px;width: 83%;padding: 5px 10px 5px 10px;border: none;background: #fff;border: 1px solid rgb(62 163 164 / 55%);" id="cratitsInp"><!-- <i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i> -->
          </li>

   
          <li>
          <label for="achType" class="issued-by"><b>Achievement<br> Type</b></label>
          <select name="achType" id="achType">
                    <option value="edu">Education</option>
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
           <input type="file" accept="image/jpeg,image/png,.pdf" name="acchiCertificate" id="acchiCertificate">
           <img src="" id="blah" style="width:50px;height:50px;border-radius:50%;display:none;">
            <a href="" target="_blank" id="AchViewFile" style="text-decoration:none;display:none"><p style="font-style:italic;color:black">Click to view</p></a>
           <img src="" id="blah" style="width:50px;height:50px;border-radius:50%;display:none;">
           </label>

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
$(function(){
  $('#remove_achi_popup').fadeOut(3000);
})  
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
$("#acchiCertificate").rules('add',{ filesize: 1000*1024});

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

$('input[type="text"]').removeClass('error');
$('input[type="date"]').removeClass('error');
$('input[type="number"]').removeClass('error');

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

$('input[type="text"]').removeClass('error');
$('input[type="date"]').removeClass('error');
$('input[type="number"]').removeClass('error');

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

$('#achType').val(data[0].achivementType);

if(data[0].cr_image){
$('#OldImg').val(data[0].cr_image);

var chkImg=data[0].cr_image.split('.');

if(chkImg[1]=='jpg' || chkImg[1]=='png' || chkImg[1]=='svg' || chkImg[1]=='jpeg'){
var img='{{asset("public/uploads/achivement")}}'+'/'+data[0].cr_image;
$('#blah').attr('src',img);
$('#blah').css('display','block');
$('#AchViewFile').hide();  
}else{
var link='<?php echo asset("public/uploads/achivement/"); ?>'+'/'+data[0].cr_image;
$('#blah').css('display','none');
$('#AchViewFile').show();
$('#AchViewFile').attr('href',link);
}
}

$('#course_url').val();

}
})
}

function removeAchievement(id){

if(confirm('Are you sure to remove the achievement ?')){
$.ajax({
url:'{{url("remove-achievement-from-user")}}',
method:'POST',
data:{id:id,'_token':"{{csrf_token()}}"},
success:function(data){
window.location.href="{{url('user/achievement')}}";
}
})
}else{
 return false; 
}
}

</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip()  
});
</script>
@endsection