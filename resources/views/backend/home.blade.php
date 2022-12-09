@extends('backend.layout')
@section('do-du-lieu')
<style>
     .wrapper {
        width: 100%;
        height: 100%;
     }
     .content {
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap : wrap
     }
     .item {
         width: 220px;
         height: 300px;
         border : 1px solid #ccc;
         margin-bottom : 20px;
         display: flex;
         flex-direction : column;
         align-items: center;
         overflow : hidden;
     }
     .image-wrapper {
         width: 164px;
         height: 164px;
         margin-top : 30px;
         position: relative;
     }
     .image-wrapper:before {
         content : "";
         width: 160px;
         height: 160px;
         position: absolute;
         z-index: 0;
         background-color : #ccc;
         top: -14px;
         left: -8px;
         border-radius : 50%;
     }
     .image-wrapper:after {
         content : "";
         width: 160px;
         height: 160px;
         position: absolute;
         z-index: 0;
         background-color : #666;
         top: 130px;
         left: -8px;
         clip-path: ellipse(46% 3% at 52% 56%);
     }
     .image {
         width: 100%;
         height : 100%;
         object-fit : cover;
         position: absolute;
     }
     .information {
        margin-top : 16px;
     }
     .name {
         font-size : 18px;
         line-height : 18px;
         text-transform: uppercase;
         font-weight:700;
     }
</style>
<h3>Manager Admin</h3>
<div class="wrapper">
    <div class="content">
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/category.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Danh mục sản phẩm</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/placard.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Quản lý banner</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/trademark.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Thương hiệu sản phẩm</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/presentation.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Quản lý sản phẩm</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/checklist.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Quản lý sản phẩm</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/web-design.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Danh mục bài viết</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/agenda.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Liên hệ</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/flag.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Quản lý admin</p>
              </div>
         </div>
         <div class="item">
              <div class="image-wrapper">
                   <img src="{{asset('../public/frontend/images/target.png')}}" class="image" alt=""/>
              </div>
              <div class="information">
                   <p class="name">Quản lý customer</p>
              </div>
         </div>
    </div>
</div>
@endsection