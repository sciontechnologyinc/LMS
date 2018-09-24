@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Dashboard')
 
 @section('content')
 <div class="content mt-3">
 <link rel="stylesheet" href="{!! ('/css/headercss.css') !!}">


 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-5">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 
     
              <span class="no-padding center mt txt-sm count">{{$t_books}}</span> 
             </h4>
             <a href="{{ url('books') }}"><p class="text-light">Books</p></a>
             

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                
             </div>
             
         </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-4">
         <div class="card-body pb-0">
             
             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count">{{$t_members}}</span> 
             </h4>
             <a href="{{ url('members') }}"><p class="text-light">Members</p></a>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>

         </div>

     </div>
 </div>


 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-3">
         <div class="card-body pb-0">

             <h4 class="mb-0">
                 <span class="count">{{$t_bookissues}}</span>
             </h4>
             <a href="{{ url('bookissues') }}"><p class="text-light">Book Issued</p></a>

         </div>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>
     </div>
 </div>
 <!--/.col-->

 <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-2">
         <div class="card-body pb-0">

             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count">{{$t_categories}}</span> 
             </h4>
             <a href="{{ url('categories') }}"><p class="text-light">Categories</p></a>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

  <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-1">
         <div class="card-body pb-0">

             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count">{{$t_subjects}}</span> 
             </h4>
             <a href="{{ url('subjects') }}"><p class="text-light">Subjects</p></a>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

  <div class="col-sm-6 col-lg-3">
     <div class="card text-white bg-flat-color-5">
         <div class="card-body pb-0">

             <h4 class="mb-0">
             <span class="no-padding center mt txt-sm count">{{$t_departments}}</span> 
             </h4>
             <a href="{{ url('departments') }}"><p class="text-light">Departments</p></a>

             <div class="chart-wrapper px-3" style="height:70px;" height="70">
                
             </div>

         </div>
     </div>
 </div>

  

 @endsection