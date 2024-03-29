@extends('admin.master.template')

@section('sidepanel')
    @include('admin.layouts.sidepanel')
@endsection

@section('header')
    @include('admin.layouts.header')
@endsection

@section('title','Book list')
 
 @section('content')

 @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
 
    <a class="btn btn-primary col-lg-2 offset-9" href="{{ url('books/create') }}" style="margin-bottom: 10px;">Create New</a>
    <link rel="stylesheet" href="{!! ('/css/books.css') !!}">

   <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Book list</strong> &nbsp;&nbsp;&nbsp; 
                          <select class="formlabel" id="bookcondition" name="bookcondition" required="">
                            <option value="" selected="">FILTER SEARCH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="category"> CATEGORY</option>
                            <option value="author"> AUTHOR</option>
                            <option value="publisher"> PUBLISHER</option>
                        </select>
                             <input style="display:none;" id="searchcategory" type="text" placeholder="SEARCH CATEGORY" class="search-category">
                             <input style="display:none;" id="searchauthor" type="text" placeholder="SEARCH AUTHOR" class="search-author">
                             <input style="display:none;" id="searchpublisher" type="text" placeholder="SEARCH PUBLISHER" class="search-publisher">

                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                        <tr>
                            <th style="padding-left: 15px;">#</th>
                            <th>Book Name</th>
                            <th>YearPublish</th>
                            <th>Type</th>
                            <th>ISBN</th>
                            <th>Category</th>
                            <th>Writer</th>
                            <th>Available</th>
                            <th width="110px;">Action</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                         @foreach($books as $index => $book)
                      <tr>

                        <td>{{ $index +1  }}</td>
                        <td> {{ $book->bookname }}</td>
                        <td> {{ $book->yearpublish }} </td>
                        <td> {{ $book->booktype }}</td>
                        <td> {{ $book->ISBN }}</td>
                        <td> {{ $book->categoryname }}</td>
                        <td> {{ $book->writername }}</td>
                        
                        <td class="numeric" data-title="Avail">
						<span class="label label-success btn-success"><span class="fa fa-check"></span> ({{ $book->booknumber }})</span></td>
                        
                        <td><center>
                        <div class="form-group" style="display:inline-flex">
                        <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="books/{!! $book->id !!}/edit"><i class="fa fa-edit"></i></a>
                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/books/' . $book->id]) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                        {!! Form::close() !!}
                        </div>    
                    </center></td>

                      </tr>
                    </tbody>
                     @endforeach
                  </table>
                        </div>
                    </div>
                </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $("#deleteForm").on("submit", function() {
            return confirm("Are you sure you want to delete?")
        })

    $("#searchcategory").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});

    $("#searchauthor").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
$("#searchpublisher").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});

    $('#bookcondition').on('change', function() {
      if ( this.value == 'category' )
      //.....................^.......
      {
        $(".search-category").show();
        $(".search-author").hide();
        $(".search-publisher").hide();
      }
      else if( this.value == 'author' ){
        $(".search-category").hide();
        $(".search-author").show();
        $(".search-publisher").hide();
      }
      else if( this.value == 'publisher' ){
        $(".search-category").hide();
        $(".search-author").hide();
        $(".search-publisher").show();
      }
      else
      {
        $(".search-category").hide();
        $(".search-author").hide();
        $(".search-publisher").hide();
      }
    });


});
</script>

 @endsection