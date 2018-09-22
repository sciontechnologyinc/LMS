@extends('lms.master.template')


@section('content')

{!! Form::open(['id' => 'dataForm','class' => 'reservations', 'url' => '/reservations']) !!}

<div class="contact-container">
    <div class="contact-title-container">
        <div class="contact-title">Contact Us</div>
        <div class="contact-desc">&nbsp;&nbsp;  <h3>Reservation of books !</h3></div>
    </div>
    <div class="contactus-form">
        <div class="contact-row1">
        <div class="contact-row1-1">
            <div class="contactname">
            {!!Form::text('LRN',null, ['placeholder' => 'Card Number', 'class' => 'contactemailfield', 'required' => '' ])!!}
            </div>
            <div class="contactemail">
            {!!Form::text('membername',null, ['placeholder' => 'Your Name', 'class' => 'contactsubjectfield', 'required' => '' ])!!}
            </div>
        </div>
        </div>
        <div class="contact-row2">
            <div class="contactsubject">
            {!!Form::text('bookname',null, ['placeholder' => 'Book Name', 'class' => 'contactsubjectfield', 'required' => '' ])!!}
        </div>
        </div>
        <div class="contact-row3">
            <div class="contactmessage">
            {!!Form::text('message',null, ['placeholder' => 'Your Message', 'class' => 'contactmessagefield', 'required' => '' ])!!}
        </div>
        </div>
        <br>
        <div class="form-group">
        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-2 offset-5']) !!}
        </div>
        <br>
    </div>
    <div class="or-option-container">
        <div class="or-txt">Do you have any questions? Please do not hesitate to contact us directly. <br>Our team will come back to you within matter of hours to help you.</div>
        <div class="contact-column2">
            <div class="contact1">
            <div class="contact-school"><i class="fa fa-university"></i> Culiat High School</div>
            <div class="contactschool-info">Email : culiathighschool@gmail.com</div>
            <div class="contactschool-info">Phone No : 0912345678/123-45-67</div></div>
            <div class="contact1">
            <div class="contact-librarian"><i class="fa fa-book"></i> CHS Librarian</div>
            <div class="contactschool-info">Email : juandelacruz@gmail.com</div>
            <div class="contactschool-info">Phone No : 0912345678/123-45-67</div></div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection

<style>

.menu-list3 a {
    color:#2e77d1 !important;
}
                
</style>

