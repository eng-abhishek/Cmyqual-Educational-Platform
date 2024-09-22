@extends('user.layout.layout')
@section('title','cMyQual | My Profile')
@section('content')
<style>
  .fa.fa-info-circle
  {
    font-size:15px;
    color:#1D9B75;
  }
  .tooltip-arrow
  {
    border-right-color:#1D9B75!important;
    border-left-color: #1D9B75!important;
  }
  .change-career P
  {
    padding-bottom: 10%;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip.right {
    left: -4.125px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip.right .tooltip-arrow
{
  transform: rotate(
180deg
)!important;
right:0!important;
left: unset!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career P
  {
    padding-bottom: 14.5%;
  }
  

body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip {
    left: 255.875px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip.left .tooltip-arrow
{
  left: 0;
  transform: rotate(
180deg
);
}
  .team-member-name .tooltip-inner
{
    min-width: 500px;
    padding: 13px 20px;
    font-size: 13px;
    text-align: center;
    border: 0.847222px solid rgba(0, 0, 0, 0.12);
    background-color: #ffffff!important;
    color:#333!important;
}
.change-career span
{
    float: left;
    text-align: left;
}
.change-career .tooltip-inner
{
  width: 220px;
  font-size: 13px;
  padding: 10px 10px;
  border: 0.847222px solid rgba(0, 0, 0, 0.12);
  background-color: #ffffff!important;
  color:#333!important;
}
.change-career .tooltip
{
  left: 210.875px!important;
}
.change-career .fa.fa-eye
{
  padding-left: 50px;
}
.change-career.iac .tooltip-inner
{
  width: 220px;
  font-size: 13px;
  padding: 10px 10px;
  border: 0.847222px solid rgba(0, 0, 0, 0.12);
  background-color: #ffffff!important;
  color:#333!important;
}
.change-career.iac .tooltip
{
  left: auto!important;
}
.change-career.iac .fa.fa-eye {
    padding-left: 0px;
}

.change-career.iac .tooltip.left
{
  margin-left: -213px!important;
}
.achievement-box h4 .tooltip-inner
{
  width: 220px;
  font-size: 13px;
  padding: 10px 10px;
  border: 0.847222px solid rgba(0, 0, 0, 0.12);
  background-color: #ffffff!important;
  color:#333!important;
}

.achievement-box h4 .fa.fa-eye {
    font-size:13px;
}

.achievment-tree-list.add-new .tooltip-inner
{
  width: 220px;
  font-size: 13px;
  padding: 10px 10px;
  border: 0.847222px solid rgba(0, 0, 0, 0.12);
  background-color: #ffffff!important;
  color:#333!important;
}

.achievment-tree-list.add-new .tooltip.left .tooltip-arrow
{
  border-left-color: #333!important;
}
  #cratitsInp {
    margin-left: 15px !important;
}
  @media(max-width:1024px)
  {
    /* .select2-container--default .select2-selection--multiple .select2-selection__choice
  {
    position: absolute!important;
  } */
  .achievment-tree-list.add-new .fa.fa-eye
  {
    position: absolute;
    z-index: 9;
    top: -20px;
    right: -70px;
  }
  .achievment-tree-list.add-new .tooltip.right
  {
    top: -18.5px!important;
    left: -5px!important;
  }
  .achievment-tree-list.add-new .tooltip.right .tooltip-arrow
  {
    left: unset!important;
    right: 0!important;
    transform: rotate(
180deg
)!important;
    margin-top: -43px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip
  {
    left: 230.875px!important;
  }

  .change-career .tooltip {
    left: 170.875px!important;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper #my-profile
    {
      padding-left: 6%;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper .col-lg-3.col-md-3.col-sm-12.text-center .change-career .box .chart {
      left: -35px!important;
}
.share-achievement-outer.share-achievement-outer1 {
    padding: 5px 0 55px 0!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    width: 61%!important;
}
    body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 112px!important;
}

body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 120px!important;
    top: 49%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 59%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree6 {
    top: 16%!important;
    left: 42.95%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7
{
    top: 57%!important;
    left: 50px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    top: 63%!important;
    left: 100px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
    top: 31%!important;
    left: 40px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
    top: 22%!important;
    left: 74px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: 51px!important;
    top: 42.75%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12
{
  left: 148px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13
{
  left: 247px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14
{
    top: 33.5%!important;
    left: 349px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15
{
  left: 360px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16
{
  left: 346px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    top: 65%!important;
    left: 298px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 8.5%!important;
    left: 240px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    top: 21%!important;
    left: 29.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
    top: 23%!important;
    left: 71%!important;
}
    .team-member-img img
    {
      padding:0!important;
      width: 120px!important;
      height:120px!important;
    }
    .new-figma-share-view .col-lg-6.col-md-6.col-sm-12
    {
      padding-top: 20px;
    height: 355px;
    }
    .change-career .box .chart 
    {
    margin-left: 10px!important;
    }
    .change-career P.spread
   {
     padding-bottom: 10%;
     padding-top: 10px;
    }
    .tree2, .tree3 
    {
    left: 65px!important;
    }
    .tree4 {
    left: 60.5%!important;
   }
   .tree6
   {
    top: 14%!important;
    left: 43.95%!important;
   }
   .tree7 {
    top: 62%!important;
    left: 27px!important;
}
.tree8 {
    top: 65%!important;
    left: 90px!important;
}
.tree9 {
    top: 29.5%!important;
    left: 0px!important;
}
.tree10
{
  left: 105px!important;
}

   .tree11 {
    left: 3px!important;
   }
   .tree12
   {
    left: 43px!important;
   }
   .tree13 {
    top: 20%!important;
    left: 100px!important;
  }
  .tree14 {
    top: 32.5%!important;
    left: 300px!important;
  }
  .tree15
  {
    top: 44%!important;
    left: 300px!important;
  }
  .tree16
  {
    left: 293px!important;
    top: 58%!important;
  }
  .tree17 {
    top: 66%!important;
    left: 250px!important;
  }
  .tree18 {
    top: 9.5%!important;
    left: 216px!important;
}
  .tree19
  {
    top: 21%!important;
    left: 54.5%!important;
  }
  .tree20 {
    top: 22%!important;
    left: 75%!important;
}
.add-new-border
{
  height: 75px;
} 
.new-figma-recent .col-lg-6.col-md-6.col-sm-12
{
  height:350px;
} 
.new-figma-recent .col-lg-6.col-md-6.col-sm-12 h4{padding-top:20px;}
}

@media(max-width:768px)
{
  body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-img img
  {
    margin: 10% auto 0 60%;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .achievment-tree-list.add-new .tooltip.right {
    top: -18.5px!important;
    left: 150px!important;
}
  .achievment-tree-list.add-new .tooltip.right {
    top: -18.5px!important;
    left: 50px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip.right {
    left: 470.875px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip.left {
    margin-left: 217px!important;
    top: 35px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip.left .tooltip-arrow {
    left: unset;
    transform: rotate( 
360deg
 );
}
  .change-career .tooltip
  {
    left: 276.875px!important;
    top: 31px!important;
  }
  .change-career.iac .tooltip.left {
    margin-left: 247px!important;
    top: 5px!important;
}
  .change-career .fa.fa-eye
  {
    float:right;
  }
  h4.cc{margin-top:40px;}
  .team-member-name .tooltip.right
  {
    left: -270px!important;
    top: 53.5px!important;
  }
  .team-member-name .tooltip-inner {
    min-width: 270px;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 222px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 200px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 56%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree5 {
    top: 48.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree6 {
    top: 16%!important;
    left: 46.2%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7
{
  left: 130px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8
{
  left: 180px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    top: 29%!important;
    left: 133px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 {
    top: 24%!important;
    left: 188px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: 150px!important;
    top: 39%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    left: 263px!important;
    top: 8.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    left: 360px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
  top: 25.5%!important;
    left: 451px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 452px!important;
    top: 37%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    left: 495px!important;
    top: 50%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    top: 60%!important;
    left: 463px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 8.5%!important;
    left: 355px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    top: 20%!important;
    left: 36.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    top: 14%!important;
    left: 66%!important;
}
  .tree2, .tree3 
  {
    left: 125px!important;
  }
  .tree6 {
    top: 16%!important;
  }
  .tree7 {
    top: 56%!important;
    left: 56px!important;
}
.tree8 {
    top: 64%!important;
    left: 100px!important;
}
.tree9 {
  top: 32.5%!important;
    left: 38px!important;
}
.tree10 {
    left: 165px!important;
}
  .tree11 {
    left: 63px!important;
}
.tree12 {
    left: 87px!important;
    top: 25.5%!important;
}
.tree13 {
    top: 20%!important;
    left: 140px!important;
}
.tree14 {
    top: 29.5%!important;
    left: 366px!important;
}
.tree15 {
    top: 41.5%!important;
    left: 356px!important;
}
.tree16 {
    left: 368px!important;
    top: 56%!important;
}
.tree17 {
    top: 64.5%!important;
    left: 325px!important;
}
.tree18 {
    top: 9.5%!important;
    left: 256px!important;
}
.tree20 {
    top: 20%!important;
    left: 70%!important;
}
  .cpd-log-text-box-info
  {
    width: 94.25%!important;
    margin-left: 15px;
  }
  .add-list-shared-list
  {
    margin-top:10%!important;
  }
  .select2-container--default .select2-selection--multiple
  {
    background-color:transparent!important;
  }
  .select2
  {
    min-width: 100% !important;
    margin-left: -5px!important;
  }
  /* .select2-container--default .select2-selection--multiple .select2-selection__choice
  {
    position: absolute!important;
  } */
  body.leftmenu #wrapper.toggled #page-content-wrapper .col-lg-3.col-md-3.col-sm-12.text-center .change-career .box .chart {
    left: 55px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box canvas
{
  left: 36%;
}
  .notes-textarea .col-lg-8.col-md-8.col-sm-8.col-xs-8
  {
    float: right;
    margin-top: -20px;
  }
  .change-career P.spread {
    padding-bottom: 0%;
  }
  .new-figma-recent .col-lg-6.col-md-6.col-sm-12 {
    height: 300px;
}
.new-figma-share-view .col-lg-6.col-md-6.col-sm-12
{
  height: auto;
}
.new-figma-share-view ul
{
   padding-top: 0px;
    margin-top: -40px;
}
  .new-figma-achievement-box .col-lg-6.col-md-6.col-sm-6.text-center {
    border-right: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}
.three-dot-hover
{
  margin: 0 0 0 71.5%!important;
}
  .team-member-img img
  {
    margin: 25% auto 0 80px;
  }
  .team-member-name
  {
    height:auto!important;
    margin: 20px 0 0 0!important;
  }
  .change-career .box .chart {
    margin-left: 35%!important;
}
}

@media(max-width:414px)
{
  /* .logout-bar ul
  {
    padding-right:50px;
  } */
  .tooltip-arrow
  {
    display:none!important;
  }
  .team-member-name .tooltip.right .tooltip-arrow
  {
    left: unset!important;
    right: 0!important;
    transform: rotate(
180deg
)!important;
top: 5.1059%!important;
  }
  .achievment-tree-list.add-new .tooltip.right .tooltip-arrow
  {
    margin-top: 40px!important;
    top:0px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip.right {
    left: 155.875px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box h4 .tooltip.left {
    left: 78.5156px!important;
    top: -55.2344px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip 
  {
    left: 160.875px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip 
  {
    left: -109.125px!important;
    top: -7.5px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .achievment-tree-list.add-new .tooltip.right
  {
    left: 70px!important;
    top: -35.234px!important;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-name .tooltip.right
  {
    left: -40px!important;
    top: -0.594px!important;
  }
  .team-member-name .fa.fa-eye
  {
    float:right;
  }
  .change-career .fa.fa-eye {
    padding-left: 30px;
    float: left;
    margin-top: 5px;
}
.change-career h4.cc{margin-top:40px;}
  .change-career .tooltip .tooltip.right
  {
    top: 33.984px!important;
  }
  .team-member-name .tooltip
  {
    position: absolute;
    z-index: 99999;
  }
  .team-member-name .tooltip.right
  {
    left: -14px!important;
    top: -0.594px!important;
  }
  .team-member-name .tooltip-inner
  {
    min-width: 360px;
    font-size: 12px;
  }
  .change-career .tooltip-inner , .achievment-tree-list.add-new .tooltip-inner , .achievement-box h4 .tooltip-inner
  {
    font-size: 12px!important;
  }
  .change-career .tooltip {
    left: 160.875px!important;
    top: -18px!important;
}
  .achievement-box h4 .tooltip.right
  {

  }
  .achievment-tree-list.add-new .tooltip.right
  {
    left: 108px!important;
    top: -68.234px!important;
  }
  .achievement-box h4 .fa.fa-eye , .change-career.iac .fa.fa-eye
  {
    float: right;
  }
  .achievement-box h4 .tooltip.left
  {
    left: 117.5156px!important;
    top: -57.2344px!important;
  }
  .change-career.iac .tooltip.left {
    margin-left: 140px!important;
    top: -9.5px!important;
}
.tree17 .tooltip
{
  margin-left: 55px!important;
}
.achievment-tree-list.add-new .fa.fa-eye
{
    position: absolute;
    top: -30px;
    margin-left: 25%;
    right: -20px;
}
  #date
  {
    width: 100% !important;
    margin: 5px 0 0px 0px!important;
  }
  input#title , input.provider
  {
    margin-left:0px!important;
  }
  #summary {
    margin: 30px 0 0px 0px!important;
    width: 100%!important;
  }
  .select2-container--open .select2-dropdown {
    left: -11px;
    width: 340px!important;
}
.select2
{
  margin-left: -15px!important;
}
.shared-search h5
{
  margin-bottom: 8px;
}
  .tags
  {
    margin-left: 0px !important;
    width: 100% !important;
  }
  input[type="date"]
  {
    border: 1px solid rgb(62 163 164 / 55%);
    width: 100%;
  }
    .duration-box
    {
        margin-left:0px!important;
        width: 100%!important;
    }
    #NameOfAchivement
    {
        margin-left:0px!important;
    }
    select#achType {
    margin: 5px 0 0px 0px!important;
}
#expDate
{
  width:100%!important;
  margin-left: 0px !important;
}
#cratitsInp
{
  margin-left: 0px!important;
}
.modal-list.modal-list-form ul li textarea.a-notes {
    margin: 30px 0 0px 0px!important;
}
  .modal-list ul {
    padding-left: 0px;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-img img {
    margin: 0 auto 0 0;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-img {
    margin-top: -30px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career {
    margin: 140px 10px 0px 0;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .col-lg-3.col-md-3.col-sm-12.text-center .change-career .box .chart {
  left: -105px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    width: 120%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .sec1 span{padding-left:10px}
body.leftmenu #wrapper.toggled #page-content-wrapper .sec2 span{padding-right:10px}
body.leftmenu #wrapper.toggled #page-content-wrapper .about-widget .team-member-name
{
  padding: 0 30px 0 0px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac {
    margin: 10px 10px 0px 0;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box {
    margin: -20px 10px 0 0px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-recent {
    margin: 15px 10px 0 0;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-share-view {
    margin: 15px 10px 0 0;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1
{
  left: 45%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 52px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 60px!important;
    top: 47.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree5
{
  left: 65%!important;
  top: 47.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree6 {
    top: 14%!important;
    left: 42.2%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: 70px!important;
    top: 65%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 15px!important;
    top: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    top: 25%!important;
    left: 20px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 {
    top: 8%!important;
    left: 85px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
  left: 14px!important;
    top: 45%!important;
    width: 50px;
    height: 50px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .tree-11-circle
{
    width: 35px;
    height: 35px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .fa
{
  margin-top: 10px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    left: 17px!important;
    top: 12.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    left: 188px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
    top: 28%!important;
    left: 273px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 272px!important;
    top: 42.5%!important;
    width: 50px;
    height: 50px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .tree-11-circle
{
    width: 35px;
    height: 35px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 .fa
{
  margin-top: 10px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    left: 275px!important;
    top: 60%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    top: 65%!important;
    left: 223px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 15.5%!important;
    left: 270px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    top: 20%!important;
    left: 22.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    top: 8%!important;
    left: 58%!important;
}
  #my-profile
  {
    padding: 10px 15px 10px 0;
  }
  .tree-root2
  {
    left: 53%!important;
  }
  .tree2, .tree3 {
    left: 70px!important;
}
.tree3 ,.tree5 {
    top: 48%!important;
}
.tree6 {
    top: 15%!important;
    left: 42.95%!important;
}
.tree7 {
    top: 63%!important;
    left: 39px!important;
}
.tree8 {
    top: 65%!important;
}
.tree9 {
    top: 32.5%!important;
    left: 0px!important;
}
.tree10 {
    left: 107px!important;
}
.tree11 {
    left: 12px!important;
    top: 43.5%!important;
}
.tree12 {
    left: 35px!important;
    top: 23.5%!important;
}
.tree13 {
    top: 20%!important;
    left: 90px!important;
}
.tree14
{
  left: 296px!important;
}
.tree15
{
  left: 286px!important;
}
.tree16 {
    left: 298px!important;
}
.tree17
{
  left: 260px!important;
}
.tree18 {
    top: 8.5%!important;
    left: 202px!important;
}
.tree19 {
    top: 19.5%!important;
    left: 56.5%!important;
}
.tree20 {
    top: 18%!important;
    left: 77%!important;
}
.new-figma-achievement-box
  {
    margin: 0px -20px 0 0px ;
  }
  .new-figma-recent
  {
    margin:15px -20px 0 0;
  }
  .change-career {
    margin: 140px -20px 0px 0;
}
  .new-figma-share-view
  {
    margin:15px -20px 0 0;
  }
  .new-figma-share-view h4
  {
    margin-top: -15px;
    margin-bottom: 20px;
  }
  .new-figma-share-view .hour-logged.hour-logged2 {
    margin-bottom: 0px;
}
.new-figma-share-view .add-new-border {
    height: 5px;
}
  .add-new-border {
    height: 25px;
}
.three-dot-hover {
    padding: 23px 7px 0px 7px!important;
}
.new-figma-recent .col-lg-6.col-md-6.col-sm-12 h4 {
    padding-top: 10px;
    padding-bottom: 20px;
}
.new-figma-recent .col-lg-6.col-md-6.col-sm-12 {
    height: auto;
}
.new-figma-achievement-box .col-lg-6.col-md-6.col-sm-6.text-center, .new-figma-recent .col-lg-6.col-md-6.col-sm-12, .new-figma-share-view .col-lg-6.col-md-6.col-sm-12.text-center {
    margin-bottom: 0px;
}
.hour-logged.hour-logged2
{
  margin-bottom:40px;
}
.three-dot
{
  margin-top: -40px!important;
}
  .team-member-img img {
    margin: 0 0px 0 10px;
    margin-top: 60px!important;
}
.about-widget .team-member-name {
    padding: 0 20px 0 10px!important;
    width: 100%;
    margin: 0px 0 0 0!important;
}
.new-figma-achievement-box .achievment-tree-list.add-new
{
  padding-top: 30px;
}
}

/*414px*/


@media(max-width:375px)
{
  .team-member-name .tooltip.right {
    left: 0px!important;
    top: -0.594px!important;
}
.achievment-tree-list.add-new .tooltip.right {
    left: 68px!important;
    top: -28.234px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievment-tree-list.add-new .tooltip-inner
{
  max-width: 160px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip.left {
    margin-left: 240px!important;
    top: -16.5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box h4 .tooltip.left {
    left: 40.5156px!important;
    top: -0.2344px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievment-tree-list.add-new .tooltip.right
{
    left: 68px!important;
    top: -30.234px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-name .tooltip.right {
    left: -5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .tooltip {
    left: 160.875px!important;
    top: -26px!important;
}
.change-career .tooltip-inner
{
  width: 158px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-name .tooltip-inner {
    min-width: 300px;
}
.change-career.iac .tooltip.left {
    margin-left: 145px!important;
}
.achievement-box h4 .tooltip.left {
    left: 77.5156px!important;
}
.team-member-name .tooltip-inner {
    min-width: 315px;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box canvas {
    left: 33%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1
{
  left: 44%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 34px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 40px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 63%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree6 {
    top: 14%!important;
    left: 40.2%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 13px!important;
    top: 63%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    top: 25%!important;
    left: 1px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  left: 63px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: -3px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    left: -2px!important;
    top: 13.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    left: 166px!important;
    top: 19.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
    top: 22%!important;
    left: 241px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 249px!important;
    top: 43.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    left: 254px!important;
    top: 59%!important;
    width: 45px;
    height: 45px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 .fa
{
  margin-top: 16px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17
{
  left: 206px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18
{
    top: 10.5%!important;
    left: 225px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19
{
  left: 19.5%!important;
}
.tree-root1
{
  top: 56%;
  left: 48%;
}
.tree2 {
    left: 53px!important;
}
.tree3{top: 47.5%!important;}
.tree6 {
    top: 14%!important;
    left: 41.95%!important;
}
.tree9 {
    top: 32.5%!important;
    left: -17px!important;
}
.tree10 {
    left: 89px!important;
    top: 7.5%!important;
}
.tree11 {
    left: 0px!important;
    top: 44.5%!important;
}
.tree12 {
    left: 18px!important;
    top: 21.5%!important;
}
.tree13 {
    top: 19%!important;
    left: 75px!important;
}
.tree14 {
    left: 276px!important;
}
.tree15 {
    left: 265px!important;
}
.tree16 {
    left: 277px!important;
}
.tree17 {
    left: 240px!important;
}
.tree18 {
    top: 7.8%!important;
    left: 191px!important;
}
.tree20 {
    top: 18.5%!important;
    left: 79%!important;
}
}
/*375px*/

@media(max-width:360px)
{
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1
  {
    left: 44%;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career.iac .tooltip.left {
    margin-left: 225px!important;
    top: 18.5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievment-tree-list.add-new .tooltip.right {
    left: 55px!important;
}
  .change-career.iac .tooltip.left {
    margin-left: 132px!important;
    top: 20.5px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .team-member-name .tooltip.right {
    left: -20px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box h4 .tooltip.left {
    left: 20.5156px!important;
    top: -0.2344px!important;
}
  .team-member-name .tooltip-inner {
    min-width: 295px;
}
.achievment-tree-list.add-new .tooltip.right {
    left: 68px!important;
}
.achievment-tree-list.add-new .tooltip-inner {
    max-width: 185px;
}
.achievement-box h4 .tooltip.left {
    left: 67.5156px!important;
    top: 0.7656px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 41px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 44px!important;
    top: 45.5%!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree5 {
    left: 63%!important;
    top: 45.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree6 {
    top: 14%!important;
    left: 39.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7 {
    left: 60px!important;
    top: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8
{
    left: 4px!important;
    top: 58%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    top: 26%!important;
    left: -5px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 {
    left: -12px!important;
    top: 14%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: 0px!important;
    top: 42.6%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 .tree-11-circle
{
  margin-top: 8px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    left: 58px!important;
    top: 7.9%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 {
    left: 154px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14
{
    top: 29%!important;
    left: 234px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 228px!important;
    top: 40.6%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    left: 236px!important;
    top: 54%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    left: 195px!important;
    top: 61%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 17.5%!important;
    left: 237px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    left: 17.5%!important;
    top: 19.5%!important;
}
  .tree1, .tree2, .tree3, .tree4, .tree5 {
    width: 65px;
    height: 65px;
}
.tree11 , .tree15
{
    width: 55px;
    height: 55px;
}
.tree11 .tree-11-circle , .tree15 .tree-11-circle
{
    width: 45px;
    height: 45px;
    margin-top: 5px;
    margin-left: 5px;
}
.tree-5-circle , .tree-1-circle , .tree-3-circle
{
    width: 55px!important;
    height: 55px!important;
}
.tree2 {
    left: 60px!important;
}
.tree3 , .tree5 {
    top: 45.5%!important;
}
.tree6 {
    top: 12%!important;
    left: 42.95%!important;
}
.tree7 {
    top: 57%!important;
    left: 27px!important;
}
.tree8 {
    top: 61%!important;
    left: 86px!important;
}
.tree9 {
    top: 28.5%!important;
    left: 0px!important;
}
.tree10 {
    left: 82px!important;
}
.tree11 {
    left: 15px!important;
    top: 43.5%!important;
}
.tree12 {
    left: 16px!important;
    top: 17.5%!important;
}
.tree11 .fa , .tree15 .fa
{
  margin-top: 15px;
}
.tree14 {
    left: 256px!important;
    top: 28.5%!important;
}
.tree15 {
    left: 249px!important;
    top: 40.6%!important;
}
.tree16 {
    left: 255px!important;
    top: 53%!important;
}
.tree17 {
    left: 210px!important;
    top: 60.6%!important;
}
.tree18
{
  left: 190px!important;
}
.tree20 {
    top: 16.5%!important;
    left: 81%!important;
}
}
  .share-achievement-outer span {
    padding-left: 0px;
    font-size: 11px!important;
}
.share-achievement-outer.share-achievement-outer1
{
  padding: 5px 0 10px 0;
}
.tesla-box
{
  height: 175px !important;
}

.overflow-email.shared-scroll::-webkit-scrollbar {
  width: 5px;
}

.overflow-email.shared-scroll::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
.overflow-email.shared-scroll::-webkit-scrollbar-thumb {
  background: #888; 
}

.overflow-email.shared-scroll::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
  .all-mail
  {
    /* display:-webkit-inline-box;
    position: absolute;
    z-index: 9; */
    /* overflow-y: hidden;
    width: 90%; */
  }
  .overflow-email
  {
    border: 1px solid rgb(62 163 164 / 55%)!important;
    padding-left: 0px;
    padding-right: 0px;
    margin-left: 15px;
    height: 30px !important;
    width: 95%;
    overflow-x: hidden;
  }
  .multiple-enter-mail-id
  {
    position: absolute;
    width: 95%!important;
    border: none !important;
  }
  span.email-ids {
    float: left;
    border: 1px solid #ccc;
    margin-right: -1px;
    margin-left: 4px;
    padding-left: 3px;
    padding-right: 3px;
    margin-bottom: 5px;
    background: #f5f5f5;
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 3px;
    border-radius: 20px;
    font-size: 12px!important;
}
span.cancel-email {
    font-size: 12px!important;
    width: 15px;
    display: block;
    float: right;
    text-align: center;
    margin-left: 0px;
    border-radius: 49%;
    height: 15px;
    line-height: 12px;
    margin-top: 2.5px;    
    cursor: pointer;
}
  /* .chosen-container .chosen-results
{
  overflow-x: hidden!important;
  overflow-y: hidden!important;
  max-height: 90px!important;
  border: 1px solid rgb(62 163 164 / 55%);
} */
.select2-container--default .select2-selection--multiple{
    border: none !important;
    z-index: 1;
    overflow-y: scroll;
    height: 33px!important;
}
.select2-results__option {
    font-size: 12px!important;
}
.select2-container--default .select2-results>.select2-results__options {
    max-height: 80px;
    overflow-y: auto;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__display
{
    padding-left: 0px;
    padding-right: 5px;
    font-size: 11px;
}
.select2-search.select2-search--inline
{
   display: none !important;
}
.select2-container--default .select2-selection--multiple , .select2-container--default.select2-container--focus .select2-selection--multiple
{
  border:none;
}
.select2-container--default .select2-selection--multiple::-webkit-scrollbar {
  width: 3px;
}

/* Track */
.select2-container--default .select2-selection--multiple::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.select2-container--default .select2-selection--multiple::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.select2-container--default .select2-selection--multiple::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.achievment-tree-list span
{
  font-size:10.5px;
}
.tesla-box input[type=text], .tesla-box input[type=email]
{
  padding: 3px 5px 3px 7px;
}
  .shared-log-asses-border
  {
    padding-bottom: 45px!important;
    padding-top: 15px!important;
  }
  .add-list-shared-list
  {
    display:inline-block;
    margin-top:10px;
  }
  .shared-log-asses-border .col-lg-6.col-md-6.col-sm-6.text-right
  {
    margin-top: -10px;
  }
  .achievment-tree-list.cpd .fa.fa-ellipsis-h {
    padding-top: 0px!important;
    padding-left: 9px;
}
.achievment-tree-list.add-new .fa.fa-ellipsis-h
{
  padding-left: 9px;
}
.new-figma-share-view ul li
{
  padding-left:0px!important;
}
.achievment-tree-list .fa.fa-file-pdf-o
{
  padding-right:10px!important;
}
#achType
{
  margin: 5px 0 0px 13px!important;
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
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree13 .tooltip{
    transform: rotate( 
162deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .col-lg-3.col-md-3.col-sm-12.text-center .change-career .box .chart {
    margin-left: 70px!important;
}
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 .tooltip
  {
    margin-top: -5px;margin-left:-10px;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 .fa , body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 .fa{
    transform: rotate( 
275deg
 );
}

.tooltip
{
  font-size:10px;
}
.tree1 .fa{margin-left: 8px;}
.tree2 .fa{margin-left: 13px;
    margin-bottom: 23px;}
.tree3 .fa{margin-left: 18px;
    margin-bottom: 55px;}
.tree4 .fa{margin-left: 18px;
    margin-bottom: 8px;}
.tree5 .fa{margin-left: 18px;
    margin-bottom: 0px;}
    .tree6 .fa {
    display: block;
    margin-top: -1px;
    /* margin-bottom: -70px; */
    margin-left: 0px;
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
 margin-left: -4px;
}
.tree7 .fa{transform: rotate( 
326deg
 );
    margin-left: 0px;    margin-top: 20px;}

.tree7 .tooltip
 {
  transform: rotate( 
326deg
 ); 
 }

.tree8 .fa{margin-left: 0px;
    transform: rotate( 
336deg
 );    margin-top: 20px;}

 .tree8 .tooltip
 {
  transform: rotate( 
336deg
 ); 
 }
.tree9 .fa{    transform: rotate( 
300deg
 );margin-top:20px;}

 .tree9 .tooltip{ transform: rotate( 
300deg
 );margin-top:0px;margin-left:10px;}

.tree10 .fa{transform: rotate( 
279deg
 );
  
    margin-top: 18px;}

    .tree10 .tooltip{transform: rotate( 
279deg
 );margin-left: 15px;
    margin-top: -6px;
 }
.tree11 .fa{transform: rotate( 
317deg
 );
    margin-left: 0px;
    margin-top: 20px;}

    .tree11 .tooltip
 {
  transform: rotate( 
    317deg
 ); 
 }

.tree12 .fa{transform: rotate( 
277deg
 );
    margin-left: 0px;
    margin-top: 17px;}
  
    .tree12 .tooltip{transform: rotate( 
277deg
 );
  margin-left:10px;margin-top:-5px;}
.tree13 .fa{transform: rotate( 
277deg
 );
    
    margin-top: 16px;}
.tree13 .fa{transform: rotate( 
277deg
 );
    
    margin-top: 16px;}

    .tree13 .tooltip{transform: rotate( 
277deg
 );
    margin-left:20px;
    margin-top:-6px;
}

.tree14 .fa{transform: rotate( 
156deg
 );
   
    margin-top: 20px;}

    .tree14 .tooltip{transform: rotate( 
156deg
 );
   margin-top:-20px;margin-left:-10px;
}
.tree15 .fa{transform: rotate( 
156deg
 );
    margin-top: 20px;}

    .tree15 .tooltip{transform: rotate( 
156deg
 );
    margin-top: -9px;margin-left:-7px;}
.tree16 .fa{transform: rotate( 
147deg
 );

    margin-top: 20px;}

    .tree16 .tooltip{transform: rotate( 
147deg
 );

    margin-top: -15px;margin-left:-10px;}
.tree17 .fa{margin-left: 0px;
    transform: rotate( 
123deg
 );
    margin-top: 20px;}
  
    .tree17 .tooltip{margin-left: -15px;
    transform: rotate( 
123deg
 );
    margin-top: 0px;}
.tree18 .fa{transform: rotate( 
189deg
 );
    margin-top: 22px;}
    .tree18 .tooltip{transform: rotate( 
189deg
 );margin-left: -10px;
    margin-top: -15px;
 }

.tree19 .fa{transform: rotate( 
173deg
 );
    margin-top: 18px;}

    .tree19 .tooltip{transform: rotate( 
173deg
 );margin-top: -15px;
   }
.tree20 .fa{transform: rotate( 
177deg
 );

    margin-top: 20px;}

    .tree20 .tooltip{transform: rotate( 
177deg
 );margin-top: -15px;}

@media(min-width:1920px)
{
  body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 93px!important;
}
.change-career .tooltip.right {
  margin-left: 45.875px!important;
}
body.dashboard-background.leftmenu.memberprofile .menuopener {
    margin-top: 0px!important;
}
.change-career.iac {
    padding-top: 30px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1 {
    top: 58%;
    left: 48%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree2 {
    left: 304px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree3 {
    left: 290px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree4 {
    left: 55.1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree6 {
    top: 16%!important;
    left: 45.95%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree7 {
    top: 61%!important;
    left: 242px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree8 {
    top: 64.5%!important;
    left: 305px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree9 {
    top: 28.5%!important;
    left: 245px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree10 {
    top: 8.5%!important;
    left: 337px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree11 {
    left: 232px!important;
    top: 40.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree12 {
    top: 17.5%!important;
    left: 256px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree13 {
    top: 21%!important;
    left: 437px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree14 {
    left: 536px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree15 {
    left: 539px!important;
    top: 38%!important;
    transform: rotate( 
225deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree16 {
    left: 568px!important;
    top: 53%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree17 {
    left: 531px!important;
    top: 64%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree18 {
    left: 435px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree19 {
    top: 20%!important;
    left: 38%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .new-figma-achievement-box .achievement-box .tree-main .tree20 {
    top: 17%!important;
    left: 60.5%!important;
}
  .new-figma-achievement-box .achievement-box .tree-main .tree2 {
    left: 247px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree3 {
    top: 49.5%!important;
    left: 240px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree6 {
    top: 15%!important;
    left: 46.93%!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree7 {
    top: 60%!important;
    left: 187px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree8 {
    top: 65.5%!important;
    left: 239px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree9 {
    top: 27.5%!important;
    left: 194px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree10 {
    top:6.5%!important;
    left: 294px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree11 {
    left: 179px!important;
    top: 41.4%!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree12 {
    top: 16.5%!important;
    left: 223px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree13 {
    top: 20%!important;
    left: 277px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree14 {
  left: 501px!important;
    top: 26.5%!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree15 {
  top: 38.5%!important;
    left: 493px!important;
    transform: rotate( 
107deg
 )!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree16 {
    left: 526px!important;
    top: 53%!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree17 {
    top: 62%!important;
    left: 492px!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree18 {
    left: 395px!important;
    top: 9.5%!important;
}
.new-figma-achievement-box .achievement-box .tree-main .tree20 {
    top: 18%!important;
    left: 63.5%!important;
}
}
@media(min-width:1600px)
{
  body.leftmenu #wrapper {
    padding-top: 80px!important;
}
.change-career .tooltip.right {
    left: 235.875px!important;
}
.tree-root1
{
  left: 47%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree2 {
    left: 230px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree3 {
    left: 220px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree4 {
    left: 56.1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree5
{
  left: 58%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree7 {
    top: 60%!important;
    left: 172px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree8 {
    top: 64.5%!important;
    left: 225px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree9 {
    top: 28.5%!important;
    left: 165px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree10 {
    top: 9.5%!important;
    left: 271px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree11 {
    left: 162px!important;
    top: 40.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree12 {
    top: 17.5%!important;
    left: 182px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree13 {
    top: 20%!important;
    left: 365px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree14 {
    left: 466px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree15 {
    left: 465px!important;
    top: 39%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree16 {
    left: 488px!important;
    top: 53%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree17 {
    left: 451px!important;
    top: 64%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree18 {
    left: 355px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree19 {
    top: 20%!important;
    left: 35%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .achievement-box .tree-main .tree20 {
    top: 18%!important;
    left: 63%!important;
}
.achievement-box .tree-main .tree2 {
    left: 177px!important;
}
.achievement-box .tree-main .tree3 {
    top: 49%!important;
    left: 150px!important;
}
.achievement-box .tree-main .tree4 {
    left: 57%!important;
}
.achievement-box .tree-main .tree6 {
    top: 15%!important;
    left: 44.95%!important;
}
.achievement-box .tree-main .tree7 {
    top: 60%!important;
    left: 107px!important;
}
.achievement-box .tree-main .tree8 {
    top: 64.5%!important;
    left: 165px!important;
}
.achievement-box .tree-main .tree9 {
    top: 27.5%!important;
    left: 124px!important;
}
.achievement-box .tree-main .tree10 {
    top: 9.5%!important;
    left: 214px!important;
}
.achievement-box .tree-main .tree11 {
    left: 102px!important;
}
.achievement-box .tree-main .tree12 {
    top: 16.5%!important;
    left: 145px!important;
}
.achievement-box .tree-main .tree13 {
    top: 21%!important;
    left: 205px!important;
}
.achievement-box .tree-main .tree14 {
    left: 411px!important;
    top: 27.5%!important;
}
.achievement-box .tree-main .tree15
{
  left: 406px!important;
}
.achievement-box .tree-main .tree16 {
    left: 438px!important;
    top: 53%!important;
}
.achievement-box .tree-main .tree17 {
    top: 62%!important;
    left: 402px!important;
}
.achievement-box .tree-main .tree18 {
    left: 315px!important;
    top: 9.5%!important;
}
.achievement-box .tree-main .tree19 {
    left: 53%!important;
    top: 21%!important;
}
.achievement-box .tree-main .tree20 {
    top: 17%!important;
    left: 66%!important;
}
}
  @media(min-width:1440px)
  {
    p.spread
    {
      padding-bottom: 10px!important;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper .col-lg-3.col-md-3.col-sm-12.text-center .change-career .box .chart {
    margin-left: 0px!important;
}
    .change-career .box .chart {
    margin-left: 0px!important;
    }
    .tree2 {
    left: 140px!important;
}
.tree3 {
    top: 49%!important;
}
.tree4 {
    left: 58%!important;
}
.tree5 {
    top: 49.5%!important;
}
.tree6
{
  top: 17%!important;
  left: 41.95%!important;
}
.tree9 {
    top: 27.5%!important;
    left: 83px!important;
}
.tree10
{
  top: 8.5%!important;
    left: 175px!important;
}
.tree11 {
    left: 65px!important;
    top: 38.5%!important;
}
.tree12
{
  top: 15.5%!important;
    left: 82px!important;
}
.tree14
{
  left: 379px!important;
}
.tree15 {
    top: 39%!important;
    left: 374px!important;
}
.tree16 {
    left: 400px!important;
    top: 53%!important;
}
.tree17 {
    top: 62%!important;
    left: 364px!important;
}
.tree18
{
  left: 257px!important;
}
.tree20
{
  top: 17%!important;
    left: 68%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 195px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 170px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 56.5%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree6 {
    top: 17%!important;
    left: 44.95%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9 {
    top: 25.5%!important;
    left: 153px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10 {
    top: 8.5%!important;
    left: 235px!important;
    transform: rotate( 
80deg
 )!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: 119px!important;
    top: 38%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12 {
    top: 13.5%!important;
    left: 152px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13
{
    top: 20%!important;
    left: 335px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14 {
    left: 430px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15 {
    left: 430px!important;
    top: 38%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16 {
    left: 464px!important;
    top: 52%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    left: 429px!important;
    top: 62%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    left: 327px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    top: 20%!important;
    left: 34%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20 {
    top: 16%!important;
    left: 66%!important;
}
  }

  body.leftmenu #wrapper.toggled #page-content-wrapper .tree-root1
  {
    top: 58%;
    left: 47%;
  }
  body.leftmenu #wrapper.toggled #page-content-wrapper .tree2 {
    left: 175px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree3 {
    left: 170px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree4 {
    left: 57%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree5 {
    top: 49.5%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree7
{
  top: 60%;
  left: 110px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree8 {
    left: 165px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree9
{
  top: 30%;
    left: 110px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree10
{
  top: 20%;
    left: 143px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree11 {
    left: 109px;
    top: 42%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree12
{
    top: 9.5%;
    left: 209px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree13
{
    top: 20%;
    left: 308px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree14
{
  transform: rotate( 
208deg
 );  
    top: 27.5%;
    left: 410px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree15
{
    top: 39%;
    left: 405px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree16
{
  top: 53%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree17 {
    top: 62%;
    left: 400px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree18 {
    top: 8.5%;
    left: 310px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree19 {
    top: 21%;
    left: 35%;
    transform: rotate( 
84deg
 );
}
body.leftmenu #wrapper.toggled #page-content-wrapper .tree20
{
    top: 17%;
    left: 67%;
    transform: rotate( 
182deg
 );
}
  .tree2
  {
    left: 120px;
  }
  .tree3
  {
    top: 50%;
    left: 115px;
    
  }
  .tree4
  {
    left:59%;
  }
  .tree5
  {
    top: 50%;
  }
  .tree6 {
    margin: 0;
    border-radius: 50px 50px 50px 0;
    position: absolute;
    width: 55px;
    height: 55px;
    top: 15%;
    background: rgba(33, 33, 33, 0.1);
    left: 44.95%;
    transform: rotate( 
135deg
 );
}
.tree7
{
  top: 59%;
    left: 57px;
}
.tree8
{
  top: 65%;
    left: 110px;
}
.tree9
{
    top: 30.5%;
    left: 50px;
    transform: rotate( 
63deg
 );
}
.tree10
{
  top: 8.5%;
    left: 165px;
    transform: rotate( 
80deg
 );
}
.tree11
{
  left: 53px;
  top: 42%;
}
.tree12
{
  transform: rotate( 
83deg
 );
    top: 21.5%;
    left: 89px;
}
  .tree13 {
    top: 20%;
    left: 147px;
    transform: rotate( 
84deg
 );
}
.tree14
{
  top: 29.5%;
    left: 358px;
    transform: rotate( 
208deg
 );
}
  .tree15 {
    transform: rotate( 
215deg
 );
    top: 41%;
    left: 350px;
}
.tree16
{
  top: 55%;
}
.tree17
{
  top: 64%;
  left: 330px;
  transform: rotate( 
243deg
 );
}
.tree18
{
     top: 8.5%;
    left: 263px;
}
.tree19 {
    transform: rotate( 
184deg
 );
    top: 20%;
    left: 55.5%;
}
.tree20
{
  top: 19%;
    left: 71%;
    transform: rotate( 
182deg
 );
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
  .tree-root1 {
    background: #baa591;
    width: 10px;
    border-radius: 10px 10px 0 0;
    transform: rotate( 
315deg
 );
    height: 40px;
    position: absolute;
    top: 57%;
    left: 46%;
}
.tree-root2 {
    background: #baa591;
    width: 10px;
    border-radius: 10px 10px 0 0;
    transform: rotate( 
49deg
 );
    height: 45px;
    position: absolute;
    top: 57%;
    left: 52%;
}
  input#acchiCertificate
  {
    border: 1px solid rgb(62 163 164 / 55%);
    padding:9px;
  }
  .share-achievement-outer h5
  {
    padding-top:10px;
  }
  input#acchiCertificate:focus
  {
    outline:none;
  }
  h4.modal-title.modal-title1
  {
    margin-top:-10px;
  }
  #goalModal h4.modal-title.modal-title1 , #shareModal h4.modal-title.modal-title1
  {
    margin-top:10px;
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
  label.expire-padding
  {
    padding-left: 3px;
  }
  @media(max-width:1920px)
  {
    body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    margin-left: 0px!important;
}
  }

.enabled-color
{
  background: rgba(62, 163, 164, 0.5);
}
.disabled-color
{
  background: rgba(33, 33, 33, 0.1);
}
h5#exampleModalLabel
{
  font-weight:600;
  font-size: 18px;
}
#basicExampleModal .modal-header 
{
    padding: 25px 15px 15px 15px;
}
#basicExampleModal .modal-header .close {
    margin-top: -40px;
}

#basicExampleModal .modal-body
{
  padding: 45px 15px 45px 15px;
}
.now-left {width: 15%;}
.not-now-right {border: 1px solid rgb(25 130 98 / 55%);
    background: transparent;
    color: #333!important;
    font-weight: 500;
    margin-left: 10px;}
    .not-now-right:hover
    {
      color:#fff!important;
    }
    #basicExampleModal .modal-dialog
    {
      margin: 16% auto;
    }
.about-widget .team-member-name {
    padding-top: 30px;
}
.team-member-name img{width:25%; height: 45%;   border-radius: 50%;
    border: 1px solid #1d9b75;}
.change-career .box .chart
{
    margin-left:40px;
}
.team-member-name
{
  background: transparent;
    border-radius: 8px;
    margin: 20px 0;
    padding-left: 0px;
    padding-right: 0px;
    border: none;
    height: 243px;
}
    html{scroll-behavior: smooth;}
select2-container--default .select2-results> .select2-results__options
    {
      max-height: 70px;
      overflow-y: hidden;
    }
    select2-container--default .select2-selection--multiple
    {
        border:none!important;
        border-radius:0px!important;
    }
    .share-achievement-list-program .col-lg-4 , .share-achievement-list-program .col-lg-8
    {
        margin-top:20px;
    }
    .select2-results__option
    {
      margin-left:0px;
    }
.select2{
width:373px !important;
padding-right:0px !important; 
margin-left:-15px;
}
.select2-search__field{
width:360px !important;
}
.tesla-box select
{
    height:30px;
}
.team-member-img img
{
    margin-top: 50px;
    padding: 3px;
    width: 150px;
    height: 150px;
    border-radius: 20px;
}
.team-member-img {
    background-color:  transparent;
}

.about-widget h5 {
    font-weight: 700;
    font-family: 'Lato' , sans-serif!important;
    font-size: 14.3px;
    line-height: 1.25;

}
.about-widget p::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.about-widget p::-webkit-scrollbar-track {
  background: #888; 
}
 
/* Handle */
.about-widget p::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.about-widget p::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
#expDate{
    margin: 5px 0 0px 50px;
    width: 83%;
    padding: 5px 10px 5px 10px;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
     },
.pickupdate{
     margin: 5px 0 0px 50px;
    width: 83%;
    padding: 5px 10px 5px 10px;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);   
}     
 #summary
{
    margin: 5px 0 0px 84px;
    width: 83%;
    padding: 9px 10px 9px 10px;
    border: none;
    background: #fff;
    font-size: 12px;
    max-height: 70px;
    border: 1px solid rgb(62 163 164 / 55%);
} 
.summary-area{position: absolute;}    
.error{
 border-color:#ef3f17cc !important;    
}     
.modal-list.modal-list-form ul li input[type=number]:focus , #summary:focus{outline:none;}
.tooltip-inner
{
  background-color: #1d9b75!important;
}

.tooltip.bottom .tooltip-arrow
{
  border-bottom-color: #1d9b75!important;
}
     #notes {
    margin: 5px 0 0px -4px;
    width: 105%;
    padding: 9px 10px 9px 10px;
    border: none;
    background: #fff;
    font-size: 12px;
    max-height: 70px;
    border: 1px solid rgb(62 163 164 / 55%);
    outline:none;
}
.three-dot:hover .three-dot-hover
{
  display:block;
}
.three-dot
{
  cursor: pointer;
  margin-top: 20px;
}
.three-dot-hover
{
    padding: 10px 7px 0px 7px;
    position: absolute;
    margin: 0 0 0 -15px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 18%);
    z-index: 1;
    max-width: 95px;
    min-width: 95px;
    height:60px;
    display:none;
}
.three-dot-hover ul{list-style: none;margin-top: -20px;}
.three-dot-hover ul li{margin-left: 0;padding-bottom: 4px;}
.three-dot-hover ul li a{margin-left: -20px;font-size: 12px;}
.three-dot-hover ul li a .fa.fa-file-pdf-o
{
  visibility: visible;
  padding-right: 0px!important;
  font-size: 11px;

}
.three-dot-hover ul li a .fa.fa-file-excel-o
{
    color: #1D6F42;
    font-size: 11px;
}
</style>

@if(Session::has('profile_update_msg'))
<div id="update_popup" style="z-index: 999;height: 70px;
    width: 300px;
    background-color:#1D9B75;
    position: fixed;
    top: 33px;
    text-align: center;
    vertical-align: sub;
    left: 1070px;
    margin-top: 35px;
    color: #191919;">
    <p style="padding-top:20px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('profile_update_msg')}}</p>
</div>
@elseif(Session::has('remove_cpdlog')) 

<div id="update_popup" style="z-index: 999;height: 70px;
    width: 300px;
    background-color:#1D9B75;
    position: fixed;
    top: 33px;
    text-align: center;
    vertical-align: sub;
    left: 1070px;
    margin-top: 35px;
    color: #191919;">
    <p style="padding-top:20px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_cpdlog')}}</p>
</div>

@elseif(Session::has('remove_achive'))

<div id="update_popup" style="z-index: 999;height: 70px;
    width: 300px;
    background-color:#1D9B75;
    position: fixed;
    top: 33px;
    text-align: center;
    vertical-align: sub;
    left: 1070px;
    margin-top: 35px;
    color: #191919;">
    <p style="padding-top:20px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_achive')}}</p>
</div>

@elseif(Session::has('remove_shared'))

<div id="update_popup" style="z-index: 999;height: 70px;
    width: 300px;
    background-color:#1D9B75;
    position: fixed;
    top: 33px;
    text-align: center;
    vertical-align: sub;
    left: 1070px;
    margin-top: 35px;
    color: #191919;">
    <p style="padding-top:20px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_shared')}}</p>
</div>


@endif

    <!-- PRELOADER -->
    <!-- <div class="cssload-container">
        <div class="cssload-loader"></div>
    </div> -->
    <!-- end PRELOADER -->

    <!-- ******************************************
    START SITE HERE
    ********************************************** -->
    <div id="wrapper">
     @include('user.sidebar')

        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot profile-bg profile-bg2" data-stellar-background-ratio="0.5">
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
                                    <ol class="breadcrumb my-profile">

                                        <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>

                                        <li><a href="{{route('user-profile')}}">My Profile</a></li>
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
                                    <!-- <h1 class="heading1">My Profile</h1> -->
                                   
                                </div><!-- end title -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-6">
                                        <div class="team-member-img">
                                        
                                          @if($userInfo->photos)
                                            @if(!(substr($userInfo->photos, 0, 8) == 'https://'))
                                            <img src="{{asset('public/uploads/user/'.$userInfo->photos)}}" alt="team member img" class="img-responsive">
                                            @else
                                            <img src="{{$userInfo->photos}}" alt="team member img" class="img-responsive">
                                            @endif
                                          @else
                                            <img src="{{asset('assets/images/default_user.jpeg')}}" alt="team member img" class="img-responsive"> 
                                          @endif
                                        </div>
                                  
                                            
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="team-member-name">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="(1) Use this tool to set goals or reach out to cMyQual team to set initial goals.
                                        (2) Upload past certificates, licenses, achievements, microcredentials, badges or any other professional documents to this safe and encrypted space.
                                        (3) Add your ongoing professional practice activities such as conferences, Learning and Development hours, sessions delivered, relevant to your current professional role - Its is normally referred to as CPD (Continuous Professional Development) in the UK and CLE (Continuous Learning) in the USA (4) This is where you can share the documents or files you want from your cMyQual profile with whomever you wish - colleagues, managers, HR etc."><i class="fa fa-info-circle" aria-hidden="true"></i></a>


                                        <h5 class="">Welcome, {{str_replace(',',' ',$userInfo->name)}}!</h5>
                                    <p><i>{{$quotes['quote']}}<br>_____{{$quotes['by']}}</i></p>
                                            
                                        </div>
                                       
                                        <hr class="invis">

                   

                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 text-center">
   <div class="change-career">
   <span><i class="fa fa-bullseye" aria-hidden="true"></i> Current Goal</span>
   <a href="#" data-toggle="tooltip" data-placement="right" title="What is this?- This shows you an overview of the goals that you have set or cMyqual team has set for you."><i class="fa fa-info-circle" aria-hidden="true"></i></a>
   <h4 class="cc">Change Career</h4>
   <div class="box text-center">
    <div class="chart" data-percent="{{$goalPrecentage}}" data-scale-color="#CED6DC">{{$goalPrecentage}}% - Complete<canvas height="160" width="160"></canvas></div>
   </div>
   <section class="sec1 text-left">
   <a href="{{url('user/goal')}}" style="position: absolute;"><span><i class="fa fa-check" aria-hidden="true"></i> Completed</span></a>
   </section>
<section class="sec2 text-right">
       <a href="{{url('user/goal')}}" style="position: absolute;z-index: 1;right: 30px;"><span>See more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
   </section>
   </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12">
<div class="change-career iac">
<a href="#" data-toggle="tooltip" data-placement="left" title="What is this?- Spread the word and get your colleagues and friends to use this tool as well 
"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
<h4 class="text-center"><i class="fa fa-envelope-o" aria-hidden="true"></i>Invite a Colleague</h4>

<p class="text-center spread">
Spread the word by inviting a friend or colleague and you both get a free 1v1 coaching session with our career experts.
</p>
<div class="space text-center">
<a href="#" class="btn btn-primary" type="button" data-toggle="modal" data-target="#inviteModal" style="cursor:pointer;background-color:  #1D9B75!important;border-radius:4px!important;text-transform:uppercase;padding-top: 10px;
    padding-bottom: 10px;">Invite</a>
</div>
</div>                              
 </div>
                                    <!-- <div class="col-md-4 col-sm-6">
                                        <div class="team-member-name">
                                       <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSXanJlp8fSM6vn8JGF8Oym7VnL3GkBA8Xu2QN3TYD3dDzhE8Nc">
                                      
                                        <p><i>{{$quotes['quote']}}<br>_____{{$quotes['by']}}</i></p>
                                            
                                        </div> -->
                                       
                                        <hr class="invis">

                   

                                    </div><!-- end col -->


<div class="col-lg-12 col-md-12 col-sm-12 text-center new-figma-achievement-box">
<div class="col-lg-6 col-md-6 col-sm-6 text-center">
  <div class="achievement-box">
    <h4 class=""><i class="fa fa-caret-down" aria-hidden="true"></i> Achievements <a href="#" data-toggle="tooltip" data-placement="left" title="What is this?- This shows you an overview of your hard earned achievements so far. Click on Achievements to edit, view or organise the achievements on this section 

"><i class="fa fa-info-circle" aria-hidden="true"></i></a><!-- <span class="tree-span text-center">1 Expiring Soon</span> --></h4>
    
    <div class="tree-main">

  
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


<!-- @if($tree[9]['achivementType'])

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



    <div class="tree6">
    <span>@if($tree[14]->achivementType=='edu')
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
    <span>@if($tree[15]->achivementType=='edu')
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
 @endif    -->

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

    <!--------End layer three ------->

    <div class="tree-root"></div>
    <div class="tree-root1"></div>
    <div class="tree-root2"></div>

</div>

    
  </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 text-left">
<div class="achievment-tree-list add-new">

<div class="col-lg-6 col-md-6 col-sm-6">
<a href="#" data-toggle="tooltip" data-placement="right" title="What is this?- This shows you an overview of the goals that you have set or cMyqual team has set for you."><i class="fa fa-info-circle" aria-hidden="true"></i></a>
<div class="add-new-box">
    <span type="button" data-toggle="modal" data-target="#myModal" style="cursor:pointer;">Add New +</span>
</div>

</div>

@foreach($achivementInfo as $achivementInfoData)
<div class="col-lg-9 col-md-9 col-sm-12">
        <h6><i class="fa fa-trophy" aria-hidden="true"></i>{{$achivementInfoData->achivementName}}</h6>
        
<?php

$t1=\Carbon\Carbon::parse($achivementInfoData->created_at);
$t2=\Carbon\Carbon::now();
$diff=$t2->diff($t1);
if($diff->d>=7){
$week=($diff->d/7)." week";
}else{
$week=$diff->d." days";
}
?>

<span>{{$achivementInfoData->Issued_by}} Achieved {{$week}} ago</span>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 text-right">
<!-- <i class="fa fa-file-pdf-o" aria-hidden="true"></i>  --> 
<!-- <a href="{{asset('public/achivementPDF/'.$achivementInfoData->pdfFile)}}" target="_blank"> -->
 <!-- <a href="{{url('download_pdf/'.$achivementInfoData->id)}}"> -->   
<!-- <i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->

<div class="three-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i><div class="three-dot-hover">
  <ul>
    <li><a href="{{url('download_pdf/'.$achivementInfoData->id)}}">Export PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onclick="download_2({{$achivementInfoData->id}})">Export Excel <i class="fa fa-file-excel-o" aria-hidden="true"></i></a></li>

  </ul>
</div></div>



</div>
<div class="add-new-border"></div>
@endforeach
<div class="col-lg-12">
<a href="{{url('user/achievement')}}"><span class="see-cpd">See All Achievement</span></a>
</div>
</div>
</div>
</div>





<div class="col-lg-12 new-figma-recent">
    <div class="col-lg-6 col-md-6 col-sm-12">
    <h4><i class="fa fa-caret-down" aria-hidden="true"></i>  CPD Logs</h4>
    <div class="hour-logged hour-logged2">
  <!--     <span><h4>Hours Logged in past 4 weeks</h4></span> -->
      
<!--       <span class="hour-logged"><span>+34%</span> from previous period </span> -->
      <div class="line-chart">
        <canvas id="canvas"></canvas>
      </div>
  </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
<div class="achievment-tree-list cpd">

<div class="col-lg-6 col-md-6 col-sm-6">
<div class="add-new-box" type="button" data-toggle="modal" data-target="#goalModal" style="cursor:pointer;">
    <span>Add New +</span>
</div>
</div>

@foreach($logInfo as $logInfoData)
<div class="col-lg-9 col-md-9 col-sm-12">
<h6>{{$logInfoData->title}}</h6><span style="padding-left:0px;">
{{date('d-M-Y'),strtotime($logInfoData->date)}}. @if($logInfoData->hours>0) {{$logInfoData->hours}} @else 0 @endif  Hours
</span>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 text-right">
<!--  <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF 

<a href="javascript:void(0)" onclick="download_1({{$logInfoData->id}})">
 <a href="{{asset('public/cpdLogPDF/'.$logInfoData->pdfFile)}}" target="_blank">

<i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
 -->

<div class="three-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i>
<div class="three-dot-hover">
  <ul>
    <li><a href="{{url('download_pdf2/'.$logInfoData->id)}}">Export PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
    <li><a href="javascript:void(0)" onclick="download_1({{$logInfoData->id}})">Export Excel <i class="fa fa-file-excel-o" aria-hidden="true"></i></a></li>

  </ul>
</div></div>

</div>
<div class="add-new-border"></div>
@endforeach

<div class="col-lg-12">
    <a href="{{url('user/cpd-log')}}"><span class="see-cpd">See All CPD Logs</span></a>
</div>
</div>
</div>
</div>
<div class="col-lg-12 new-figma-share-view">
<div class="col-lg-6 col-md-6 col-sm-12 text-center">
<h4 class="text-left"><i class="fa fa-caret-down" aria-hidden="true"></i>  Sharing lists</h4>
<div class="hour-logged hour-logged2">
    <!--   <span class="text-left"><h4>33 views in past 4 weeks</h4></span> -->
      <div class="line-chart"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
        <canvas id="share-canvas" width="435" height="212" style="display: block; width: 435px; height: 212px;"></canvas>
      </div>
  </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="achievment-tree-list">

<div class="col-lg-6 col-md-6 col-sm-6">
<div class="add-new-box" type="button" data-toggle="modal" data-target="#shareModal" style="cursor:pointer;">
    <span>Add New +</span>
</div>
</div>

@foreach($sharedListInfo as $sharedListInfoData)
<div class="col-lg-8 col-md-8 col-sm-12">
        <h6><i class="fa fa-share-alt" aria-hidden="true"></i>{{$sharedListInfoData->company_name}}</h6><span>Created on {{date('d-M-Y')}}</span>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 text-right">
<ul>
    <li>
    <i class="fa fa-eye" aria-hidden="true"></i> 
    </li>
    <li>
    <span>{{$sharedListInfoData->view}} views</span>
    </li>
    <li>
   <!--  <i class="fa fa-ellipsis-h" aria-hidden="true"></i> -->
    </li>
</ul>
</div>
<div class="add-new-border"></div>
@endforeach

<div class="col-lg-12">
<a href="{{url('user/shared')}}"><span class="see-cpd">See All Shared Lists</span></a>
</div>
</div>
</div>
</div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <h4 class="heading1">Share My Learning Record</h4>
    <ul>
        <li>Share list only</li>
        <li>Share list and certificates</li>
        <li>Share Validated and verified certificates</li>
        <li>Cancel</li>
    </ul>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <h4 class="heading1">Unfiled Items</h4>
    <ul>
        <li><a href="">Fwd:Course1</a></li>
        <li><a href="">Fwd:Course2</a></li>
        <li><a href="">Fwd:Course3</a></li>
        <li><a href="">Fwd:Course4</a></li>
    </ul>
 </div>
                                </div><!-- end row -->      
                            </div><!-- end widget -->
                        </div><!-- end col -->

               
                    </div><!-- end row -->
                </div><!-- end container -->
                <section class="profile-member">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-6">
            <h4 class="heading1">Membership</h4>
            </div>
            <div class="col-lg-6">
            <h4 class="heading1">Certificate</h4>
            <ul class="certificate-list">
            
                <li>
                     <img src="images/certificate1.jpg">
                     
                </li>
                <li>
                     <img src="images/certificate2.jpg">
                    
                </li>
                <li>
                     <img src="images/certificate3.jpg">
                     
                </li>
            </ul>
            </div>
            </div>
        </div>
        </div>
        </section>
        <div class="section lb" id="my-courses">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="clearfix">
                                <div class="widget-title">
                                <h4 class="heading1">Upcoming Courses</h4>
                                   
                                </div>
                                <div class="row">
                                
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_01.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                            
                                                <h3><a>Learn English in 20 Days</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  Expires : 22 June 2016</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_02.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a>Learning Web Design</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  Expires : 22 June 2016</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row mobile-hidden">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                     <!-- <img src="upload/blog_03.jpg" alt="" class="img-responsive"> -->
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              
                               <div class="row mobile-hidden">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <!-- <img src="upload/blog_04.jpg" alt="" class="img-responsive"> -->
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="register-widget clearfix">
                                <div class="widget-title expire-course">
                                    <h4 class="heading1" style="visibility:hidden;">Expired Courses</h4>
                                   
                                </div>
                 
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_05.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a>Working with a Group</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  <a href="#">Expired : Re-join the course</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                           

                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="video-wrapper clearfix">
                                            <div class="post-media">
                                                <div class="entry">
                                                    <img src="upload/blog_06.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="magni-desc">
                                                            <a class="secondicon" href="course-single.html"> <span class="oi" data-glyph="link-intact" title="Read More" aria-hidden="false"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="video-wrapper">
                                            <div class="widget-title clearfix">
                                                <h3><a>5 Step to Build a Website</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <small><a href="#">View Course</a>  -  <a href="#">Expired : Re-join the course</a></small>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    

                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div> 
            </div><!-- end section -->
        <!-- end copyrights -->

        <!-- end page-content-wrapper -->
       
    </div>
    <!-- end wrapper -->
     <!-- Modal -->
  <div class="modal fade" id="shareModal" role="dialog">
    <div class="modal-dialog">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!-- Modal content-->
      <div class="modal-content shared-scroll">
        <div class="modal-header">
          
         
          <h4 class="modal-title modal-title1"><i class="fa fa-share-alt"></i> <span style="font-size:13px;color: #333;">Shared List</span></h4>
        </div>

       <form method="post" action="{{url('add-shared-list')}}"> 
        <div class="modal-body">
         @csrf
        <div class="modal-list modal-list-form">
        
        <div class="tesla-box">
            <div class="col-lg-6 col-md-6 text-left">
             <span class="tesla-invite"><i class="fa fa-envelope-o" aria-hidden="true"></i> Invites</span>
            </div>

            <div class="col-lg-6 col-md-6 text-right">
            <span class="tesla-invite tesla-invite1">
         <i class="fa fa-long-arrow-rigt" aria-hidden="true"></i></span>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <label for="create-invite" class="create-invite"><b>Create Invite</b><apan class="textdenger">*</apan></label>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <input type="text" name="company_name" placeholder="company name" required="">
           </div>

           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
           <select name="expireDate" id="select" required="">
                    <option value="30">Expire in 30 Days</option>
                    <option value="20">Expire in 20 Days</option>
                    <option value="10">Expire in 10 Days</option>
                    <option value="5">Expire in 5 Days</option>
          </select>
           </div>

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <label for="sent-invite" class="sent-invite"><b>Sent Invites</b>
           <apan class="textdenger">*</apan></label>
           </div>

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 overflow-email shared-scroll">
           <div class="all-mail shared-scroll">
             
           </div> 
           <input type="text" name="receiverInvitationMail" class="multiple-enter-mail-id" placeholder="joes@gmail.com" required="" style="border: none !important;">
          
          </div>
           </div>
            <!-- <ul>
                <li>
                <label for="create-invite" class="create-invite"><b>Create Invite</b></label>
                <input type="email" name="email">
                </li>
            </ul> -->
        </div>
<div class="shared-search" style="margin-bottom:0">
<div class="col-lg-4 col-md-4 col-sm-6">
<h5>Shared Achievements<apan class="textdenger">*</apan></h5>
</div>

<div class="col-lg-8 col-md-8 col-sm-6" style="border: 1px solid rgb(62 163 164 / 55%)!important;">

<select name="achivementList[]" multiple="multiple" class="js-example-basic-multiple-achivement" style="height:auto">
  <option value="">Select Achivement</option>
  @foreach($achivementInfo as $achivementInfoDropVal)
  <option value="{{$achivementInfoDropVal->id}}">{{$achivementInfoDropVal->achivementName}}</option>
  @endforeach
</select>
<!-- 
<input type="text" id="getAchievement" name="getAchievement" placeholder="Find achievement to add">
 -->
</div>
</div>

<section class="share-achievement-list-program">

@foreach($achivementInfo as $achKey=>$achivementInfoData)


<?php

$t1=\Carbon\Carbon::parse($achivementInfoData->created_at);
$t2=\Carbon\Carbon::now();
$diff=$t2->diff($t1);
if($diff->d>=7){
$week=($diff->d/7)." week";
}else{
$week=$diff->d." days";
}
?>


@if($achKey==0)
<div class="share-achievement-outer">
<div class="col-lg-6 col-md-6 col-sm-6">
        <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{$achivementInfoData->achivementName}}</h5>

   <span>{{substr($achivementInfoData->Issued_by,0,20)}} Achieved {{$week}} ago</span>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 text-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF <a href="{{asset('public/achivementPDF/'.$achivementInfoData->pdfFile)}}" target="_blank"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
</div>
</div> 
@else
<div class="col-lg-12 share-achievement-outer share-achievement-outer1" style="">
<div class="col-lg-6 col-md-6 col-sm-6">
        <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{$achivementInfoData->achivementName}}</h5>

  <span>{{substr($achivementInfoData->Issued_by,0,20)}} Achieved {{$week}} ago</span>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 text-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF <a href="{{asset('piblic/achivementPDF/'.$achivementInfoData->pdfFile)}}" target="_blank"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
</div>
</div>  
@endif
@endforeach
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-6">
<h5>CPD Log</h5>
</div>

<div class="col-lg-8 col-md-8 col-sm-6 cpd-log-text-box-info" style="border: 1px solid rgb(62 163 164 / 55%)!important;width: 64.25%;">

<select name="cpdList[]" multiple="multiple" class="js-example-basic-multiple-sharedLog">
  <option value="">Select CPD Logs</option>
  @foreach($logInfo as $logInfoVal)
  <option value="{{$logInfoVal->id}}">{{$logInfoVal->title}}</option>
  @endforeach
</select>

<!-- 
<input type="text" id="getAchievement" name="getAchievement" placeholder="Find achievement to add">
 -->
</div>
</div>


<div class="shared-logs-assesement col-lg-12">
  <h5>Shared logs</h5>
@foreach($logInfo as $logInfoData)
<div class="shared-log-asses-border">
  <div class="col-lg-6 col-md-6 col-sm-6">
        <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{$logInfoData->title}}</h5>
<span>
{{date('d-M-Y'),strtotime($logInfoData->date)}}. @if($logInfoData->hours>0) {{$logInfoData->hours}} @else 0 @endif  Hours
 </span>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 text-right">
      <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF <a href="{{asset('public/cpdLogPDF/'.$logInfoData->pdfFile)}}" target="_blank"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> 
</div>
</div>
@endforeach
</div>

<div class="notes-textarea">
<div class="col-lg-4 col-md-4 col-sm-6" style="padding-left: 0;">
<h5>Remark</h5>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<textarea placeholder="As part of my job training...min(20) max(350)" minlength="20" maxlength="350" id="notes" name="notes"></textarea>
</div>
</div>
 
</section>
<div class="space text-left add-list-shared-list">
            <button class="btn btn-primary" type="submit" style="cursor:pointer;background-color: #1D9B75!important;">Add List</button>
</div>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="goalModal" role="dialog">
    <div class="modal-dialog">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!-- Modal content-->
      <div class="modal-content shared-scroll">
        <div class="modal-header">
          
         
          <h4 class="modal-title modal-title1"><i class="fa fa-info-circle" aria-hidden="true"></i><span style="font-size:13px;color: #333;margin-right:3px;">CPD Logs</span> Add CPD Logs</h4>
        </div>
        <div class="modal-body">
     
        <div class="modal-list modal-list-form">
          <form method="post" action="{{url('add-cpd-log')}}" id="cpd-log"> 
         @csrf
         <ul>

            <li>
            <label for="title" class="title"><b>Title<apan class="textdenger">*</apan></b></label>
            <input type="text" id="title" placeholder="Enter title" maxlength="35" minlength="2" name="title" style="margin-left:48px;" required>
            </li>
            <li>
            <label for="date" class="cpd-date"><b>Date<apan class="textdenger">*</apan></b></label>
            <input type="date" id="date" style="margin: 5px 0 0px 45px;width: 83%;padding: 5px 10px 5px 10px;background-color: #fff;border: 1px solid rgb(62 163 164 / 55%); " name="date" placeholder = "dd/mm/yyyy" required>
            </li>
    
            <li>
            <label for="provider" class="provider"><b>Provider<apan class="textdenger">*</apan></b></label>
            <input type="text" placeholder="Organization Name" maxlength="100" minlength="2" name="provider" required class="provider" style="margin-left: 25px;"><!-- <i class="fa fa-pencil-square-o a-pencil pencil1" aria-hidden="true"></i> -->
           </li>
           <li>
            <label for="standard" class="provider"><b>Standards</b></label>
            <input type="text" placeholder="Enter Standards" name="standard" maxlength="50" minlength="1" class="provider" style="margin-left: 22px;"><!-- <i class="fa fa-pencil-square-o a-pencil pencil1" aria-hidden="true"></i> -->
           </li>
          
          <li>
          <label for="hour" class="cpd-hour"><b>Hours</b><apan class="textdenger">*</apan></label>
          <input type="number" placeholder="5 Hours" name="hours" maxlength="5" min='0' required="" style="margin-left: 0px;"><!-- <i class="fa fa-pencil-square-o a-pencil pencil1" aria-hidden="true"></i> -->
          </li>

          <li>
           <label for="sumaary" class="summary-area"><b>Summary</b></label>
           <textarea id="summary" name="summary" placeholder="About your log" maxlength="150" minlength="5"></textarea>
           </li>

           <li>
           <label for="notes" class="notes-area"><b>Notes</b></label>
           <textarea id="notes" name="notes" placeholder="Summery" maxlength="150" minlength="5"></textarea>
           </li>
 
          <li>
          <label for="" class="cpd-hour"><b>Tags</b><apan class="textdenger">*</apan></label>
          <input type="text" placeholder="Ex: Coding" style="margin-left: 12px;width: 83% ;" name="tags" class="tags" maxlength="25" minlength="2" required="">
          </li>

        </ul>
        <div class="space text-left">
            <button class="btn btn-primary" type="submit" style="cursor:pointer;background-color: #1D9B75!important;">Add Log</button>
          </div>
        </form> 
        </div>

        </div>
      </div>
      
    </div>
  </div>


<!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!-- Modal content-->
      <div class="modal-content shared-scroll">
        <div class="modal-header">
         
          <img src="images/financial1.jpg" alt="" srcset="" style="width:100%">
          <h4 class="modal-title modal-title1"><i class="fa fa-trophy"></i>Add Achievement</h4>
        </div>
        <div class="modal-body">
     
        <div class="modal-list modal-list-form">

        <form method="post" name="UserAchivemant" id="UserAchivemant" action="{{url('add-user-achivement')}}" enctype="multipart/form-data">
        @csrf
        <ul>
            <li>
            <label for="NameOfAchivement" class="a-name"><b>Name<apan class="textdenger">*</apan></b></label>
            <input type="text" id="NameOfAchivement" name="NameOfAchivement" placeholder = "Enter Achievement" maxlength="50" minlength="2" style="margin-left:50px" required>
            </li>

          <li>
          <label for="issued"><b>Issued<apan class="textdenger">*</apan></b></label>
          <input type="month" id="start-date" max="<?php echo date('Y-m');?>" name="start-date" required>
          </li>

            <li>
            <label for="expire" class="expire-padding"><b>Expires</b></label>
            <label class="switch">
            <input type="checkbox" name="expires" id="expires">
            <span class="slider round ronud1"></span>
            </label>
            </li>

            <li id="expDateId" style="display:none;">
            <label for="expDate"><b>Expires<br> Date</b></label>
            <input type="month" style="margin-left:43px" id="expDate" name="expDate">
            </li>

            <li>
            <label for="issued-by" class="issued-by"><b>Issued by</b></label>
            <input type="text" placeholder="Enter Issued by" name="issuedBy" maxlength="50" minlength="2"><!-- <a><i class="fa fa-pencil-square-o a-pencil" aria-hidden="true"></i></a> -->
           </li>

           <li>
           <label for="link-to-course"><b>Link to course</b></label>
           <input type="url" placeholder="https://cmyqual.co.uk/" maxlength="500" minlength="5" name="course_url"><!-- <i class="fa fa-link a-link" aria-hidden="true"></i> -->
          </li>
          <li>
          <label for="duration" class="duration"><b>Duration</b></label>
        
<!--           <input type="number" placeholder="12 Hours(max 15)" name="duration" maxlength="15" min="0" style="margin-left:30px">
 -->
          <input type="text" name="duration" style="margin-left: 30px;width: 83%;" maxlength="50" minlength="0" class="duration-box">

          </li>
          <li>
          <label for="language" class="issued-by"><b>Language</b></label>
          <select name="language" id="select">
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
          <input type="number" placeholder="Enter Credits" maxlength="10" minlength="0" min="0" name="cratitsInp" id="cratitsInp" style="margin-left: 15px;">
          </li>

          <li>
          <label for="achType" class="issued-by"><b>Achievement<br> Type</b></label>
          <select name="achType" id="achType" style="margin-left: 14px">
                    <option value="edu">Education</option>
                    <option value="other">Other</option>
          </select>
          </li>

           <li>
           <label for="notes" class="notes-area"><b>Notes</b></label>
           <textarea placeholder="As part of my job training" maxlength="300" minlength="2" id="notes" class="a-notes" name="notes"></textarea>
            </li>
            <input type="text" hidden name="redirectId" value="1">

            <input type="text" name="valofData" id="valofData" hidden>

            <li>
            <label for="uploadCertificate"><b>Upload Certificate (<i style="font-size:11px"> File size must be less than 1 MB</i>)</b>
            
             <input type="file" accept="image/jpeg,image/png,.pdf" name="acchiCertificate" id="acchiCertificate">
             <img src="" id="blah" style="width:50px;height:50px;border-radius:50%;display:none;"></label>

            </li>         
        </ul>
        <div class="space text-left">
        <button tyle="submit" class="btn btn-primary" id="addAchivement" style="cursor:pointer;background-color: #1D9B75!important;">Add Achievement</button>

        </div>
     </form>

        </div>
        </div>
        
      </div>
      
    </div>
  </div>
    
<!-- Modal -->
  <!-- Modal -->
  <div class="modal fade" id="inviteModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content text-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="images/invite.jpg" alt="">
          <h4 class="modal-title text-center">Spread the word and get a free career consultation</h4>
          <p class="text-center">Invite a friend or colleague to CMyQual and you both get a coaching session with our own career experts.</p>
        </div>
        <div class="modal-body">
        <div class="space text-center">
        <form method="post" action="{{url('sendInvite')}}">    
        <input type="email" name="email" placeholder="hello@gmail.com" style="height: 30px;    outline: none;
    border-radius: 0;
    box-shadow: none;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
    padding: 0 10px;">  
        @csrf<br>
        <button type="submit" name="btnsendmail" value="Invite" style="background: #1D9B75!important;
    padding: 3px 80px;
    text-transform: capitalize;
    font-family: 'Lato' ,sans-serif!important;
    border: none;
    color: #fff;
    margin-top: 10px;">Invite</button>
        <!--<a href="#" class="btn btn-primary" type="button" style="cursor:pointer;"></a>-->
        </form>
        </div>
        <div class="modal-list">

        </div>
        </div>
      </div>
      
    </div>
  </div>

<!-- onLoad Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Please Complete Your Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <button type="button" class="btn btn-default now-left">Now</button>  <button type="button" class="btn btn-default not-now-right">Not Now</button>
      </div>
     
    </div>
  </div>
</div>
@endsection
@section('script')
<!-- onLoad Modal -->
    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
    <script>
  $(".multiple-enter-mail-id").keydown(function (e) {
  if (e.keyCode == 13 || e.keyCode == 32) {
    //alert('You Press enter');
	 var getValue = $(this).val();
	   var html = '';
    html += '<input type="text" value="'+getValue+'" name="receiverInvitationMail01[]" class="form-control email-ids" style="display:inline;width:200px">';
    html +='<span class="cancel-email">x</span>';

  $('.all-mail').append(html);
	 $(this).val('');
  }
});


/// Cancel 

$(document).on('click','.cancel-email',function(){
	  
	      $(this).parent().remove();
	
	});

  // $('.enter-mail-id').click()
</script>
    <script type="text/javascript">

function download_2(id){

$.ajax({
url:'{{url("getAchiveExcelData")}}',
method:'POST',
data:{id:id,'_token':"{{csrf_token()}}"},
success:function(data){
console.log(data);
var json_pre = '['+data+']';
var fileName='achivement'+id;
console.log(json_pre);
var json = $.parseJSON(json_pre);

var csv = JSON2CSV(json);
var downloadLink = document.createElement("a");
var blob = new Blob(["\ufeff", csv]);
var url = URL.createObjectURL(blob);
downloadLink.href = url;
downloadLink.download = ""+fileName+".csv";

document.body.appendChild(downloadLink);
downloadLink.click();
document.body.removeChild(downloadLink);

}
})
}


function download_1(id){

$.ajax({
url:'{{url("getCPDExcelData")}}',
method:'POST',
data:{id:id,'_token':"{{csrf_token()}}"},
success:function(data){
console.log(data);
var json_pre = '['+data+']';
var fileName='cpdlog'+id;
//console.log(json_pre);
var json = $.parseJSON(json_pre);

var csv = JSON2CSV(json);
var downloadLink = document.createElement("a");
var blob = new Blob(["\ufeff", csv]);
var url = URL.createObjectURL(blob);
downloadLink.href = url;
downloadLink.download = ""+fileName+".csv";

document.body.appendChild(downloadLink);
downloadLink.click();
document.body.removeChild(downloadLink);

}
})
}

function JSON2CSV(objArray) {
    var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray;
    var str = '';
    var line = '';

    if ($("#labels").is(':checked')) {
        var head = array[0];
        if ($("#quote").is(':checked')) {
            for (var index in array[0]) {
                var value = index + "";
                line += '"' + value.replace(/"/g, '""') + '",';
            }
        } else {
            for (var index in array[0]) {
                line += index + ',';
            }
        }

        line = line.slice(0, -1);
        str += line + '\r\n';
    }

    for (var i = 0; i < array.length; i++) {
        var line = '';

        if ($("#quote").is(':checked')) {
            for (var index in array[i]) {
                var value = array[i][index] + "";
                line += '"' + value.replace(/"/g, '""') + '",';
            }
        } else {
            for (var index in array[i]) {
                line += array[i][index] + ',';
            }
        }

        line = line.slice(0, -1);
        str += line + '\r\n';
    }
    return str;
}




    $('#update_popup').fadeOut(5000);
    function checkLevel(level){
    
    $.ajax({
    url:'{{url("checkUserAchivementLevel")}}',
    method:'POST',
    data:{level:level,'_token':"{{csrf_token()}}"},
    success:function(data){
    if(data==202){
    alert('This achivement level is already use try any other.');
    $('#valofData').val('1');
    }else{
    $('#valofData').val('0');
    }
    }
    })
    }

   //  $("#start-date").flatpickr({
   //  dateFormat: "d/m/Y",
   // // maxDate: new Date(),
   //  });

  //   $("#expDate").flatpickr({
  //   dateFormat: "d/m/Y",
  // //  maxDate: new Date(),
  //   });

    $("#date").flatpickr({
    dateFormat: "d/m/Y",
  //  maxDate: new Date(),
    });


    $('.js-example-basic-multiple-achivement').select2();
    $('.js-example-basic-multiple-sharedLog').select2();
    $(function() {
    $('.chart').easyPieChart({
      size: 115,
      barColor: "#1D9B75",
      scaleLength: 0,
      lineWidth: 8,
      trackColor: "#cfd8dc",
      lineCap: "circle",
      animate: 2000,
    });
  });

$('#UserAchivemant').validate({
 errorPlacement: function(){
            return false;  // suppresses error message text
        }
});

    $('#cpd-log').validate({
    errorPlacement: function(){
            return false;  // suppresses error message text
        }
});

$('#addAchivement').on('click',function(){
if($('#valofData').val()=='1'){
alert('This achivement level is already use try any other.');
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
$('#valofData').val('0');
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

$("#acchiCertificate").rules('add',{ filesize:1000*1024});

    </script>
    
<script>
window.chartColors = {
  red: 'transparent',
  orange: 'tranparent',
//   yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: '#48B359',
//   purple: 'rgb(153, 102, 255)',
//   grey: 'rgb(231,233,237)'
};

    var lchart_labels = <?php echo json_encode($lchart_label) ?>;
    var lchart_data = <?php echo json_encode($lchart_hours) ?>;
    console.log(lchart_labels);
    console.log(lchart_data);
    var MONTHS = lchart_labels;
// var config = {
//   type: 'line',
//   data: {
//     labels: lchart_labels,
//     datasets: [{
//       label: "CPD LOGS Hrs",
//       fill: false,
//       backgroundColor: window.chartColors.blue,
//       borderColor: window.chartColors.blue,
//       data: lchart_data,
//     }]
//   },
//  options: {
//     responsive: true,
//     title:{
//       display:true,
//       text:''
//     },
//     tooltips: {
//       mode: 'index',
//       intersect: false,
//     },
//    hover: {
//       mode: 'nearest',
//       intersect: true
//     },
  
//     scales: {
//          xAxes: [{
//            gridLines : {
//              display : false,
//            }
//          }],
//          yAxes: [{
//            gridLines : {
//              display : false,
//            }
//          }]
//        }
//   }
// };

var config = {
  type: 'line',
  data: {
    labels: lchart_labels,
    

    datasets: [{
    
      label: "CPD LOGS Hrs",
      fill: false,
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      data: lchart_data,
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
           gridLines : {
             display : false,
           }
         }],
         yAxes: [{
           gridLines : {
             display : false,
           }
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

/*
$('a[href="#pie"]').on('shown.bs.tab', function(){
  myPie.update();
});
*/
</script>

<script>
window.chartColors = {
  red: 'transparent',
  orange: 'tranparent',
//   yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: '#48B359',
//   purple: 'rgb(153, 102, 255)',
//   grey: 'rgb(231,233,237)'
};


    var lchart_labels1 = <?php echo json_encode($chart_label1) ?>;
    var lchart_data1 = <?php echo json_encode($chart_data1) ?>;
 

var MONTHS = lchart_labels1; 
var config = {
  type: 'line',
  data: {
    labels: MONTHS,
    datasets: [{
      label: "views",
      fill: false,
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      data: lchart_data1,
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

var ctx = document.getElementById("share-canvas").getContext("2d");
var myLine = new Chart(ctx, config);

var data1 = [
  randomScalingFactor(),
  randomScalingFactor(),
];

// var data2 = [
//   randomScalingFactor(),
//   randomScalingFactor(),
// ];

var ctx = document.getElementById("share-canvas").getContext("2d");
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
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

@endsection