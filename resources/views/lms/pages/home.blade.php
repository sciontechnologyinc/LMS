

@extends('lms.master.template')



@section('content')
<div class="searchbar">
    <div class="bar-row">
        <div class="bookname"><input type="text" class="searchbartext" placeholder="Book Name"/></div>
        <div class="authorname"><input type="text" class="searchbartext" placeholder="Author Name"/></div>
        <div class="publishername"><input type="text" class="searchbartext" placeholder="Publisher Name"/></div>
        <div class="searchbtn">Search</div>
    </div>
    
</div>

<div class="booklist-container">
    <div class="booklist-title">List of Books</div>
    <div class="booklist-row">
        <div class="perbook-container">
            <div class="perbook-img"><img src="/img/Book1.jpg" alt=""></div>
            <div class="perbook-title" data-toggle="modal" data-target="#myModal">Game of Thrones</div>
        </div>
        <div class="perbook-container">
            <div class="perbook-img"><img src="/img/Book1.jpg" alt=""></div>
            <div class="perbook-title" data-toggle="modal" data-target="#myModal">Book One Sample</div>
        </div>
    </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Game of Thrones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="book-isbn">Book ISBN No. : 12345678</div>
        <div class="availbook-number">Available Book No. : 5</div>
        <div class="book-price">Book Price : $1000.00</div>
        <div class="writer-name">Writer Name : Michael Waje</div>
        <div class="book-category">Book Category : Fantasy</div>
        <div class="book-status">Status : Available</div>
        <div class="book-type">Book Type : Physical</div>
        <div class="book-adtl-details">Details : This book is a fiction</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection


<style>

.menu-list1 a {
    color:#2e77d1 !important;
}
        
</style>