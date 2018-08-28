
@extends('lms.master.template')

@section('content')
<style>

.menu-list1 a {
    color:#2e77d1 !important;
}
        
</style>
<div class="searchbar">
    <div class="bar-row">
        <div class="bookname"><input type="text" id="search" class="searchbartext" name="bookname" placeholder="Book Name"/></div>
        <!-- <div class="authorname"><input type="text" id="search" class="searchbartext" placeholder="Author Name"/></div> -->
        <!-- <div class="publishername"><input type="text" class="searchbartext" placeholder="Publisher Name"/></div> -->
        <div class="searchbtn" type="submit">Search</div>
    </div>
    
</div>

<div class="booklist-container">

    <div class="booklist-title">List of Books</div>
    <div class="booklist-row">
    @foreach($books as $book)
        <div class="perbook-container" data-toggle="modal" data-target= "#{{$book->id}}">
        <div class="perbook-img">
                                @if($book->digitalphoto)
                                <img src="{{asset('storage/uploads/'.$book->digitalphoto)}}" alt="">&nbsp;
                                @else
                                <img src="{{asset('storage/uploads/book_icon.png')}}" alt="">
                                @endif
         
        </div>
        <div class="perbook-title" >{{$book->bookname}} </div>
   </div>
   
    @endforeach 
        </div>

    </div>
</div>


<!-- The Modal -->
@foreach($books as $book)
<div class="modal fade" id="{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
          
        <h5 class="modal-title" id="exampleModalLabel">{{$book->bookname}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="book-isbn">Book ISBN No. : {{$book->ISBN}}</div>
        <div class="availbook-number">Available Book No. : {{$book->booknumber}}</div>
        <div class="book-price">Book Price : {{$book->bookprice}}</div>
        <div class="writer-name">Writer Name : {{$book->writername}}</div>
        <div class="book-category">Book Category : {{$book->categoryname}}</div>
        <div class="book-status">Status : {{$book->status}}</div>
        <div class="book-type">Book Type : {{$book->booktype}}</div>
        <div class="book-condition">Book Type : {{$book->bookcondition}}</div>
        <div class="book-adtl-details">Details : {{$book->details}}</div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   
    </div>
    
  </div>
</div>
@endforeach

<script type="text/javascript">
$('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
      type : 'get',
      url  : '{{URL::to('lms')}}',
      data : {'search':$value},
      success:function(data){
          $('').html(data);
      }
    });
})

</script>




@endsection
