@extends('layouts.app')

@section('content')
<style>
  #contact-form {
    background-color:#F2F7F9;
    width:565px;
    padding:20px;
    margin: 50px auto;    
    border: 6px solid #8FB5C1;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;
    border-radius:15px;
    position:relative;
}
 
#contact-form h1 {
    font-size:42px;
}
 
#contact-form h2 {
    margin-bottom:15px;
    font-style:italic;
    font-weight:normal;
}
 
#contact-form input, 
#contact-form select, 
#contact-form textarea, 
#contact-form label {
    font-size:15px;
    margin-bottom:2px;
}
 
#contact-form input, 
#contact-form select, 
#contact-form textarea {
    width:450px;
    border: 1px solid #CEE1E8;
    margin-bottom:20px;
    padding:4px;
}
 
#contact-form input:focus, 
#contact-form select:focus, 
#contact-form textarea:focus {
    border: 1px solid #AFCDD8;
    background-color: #EBF2F4;
}
 
#contact-form textarea {
    height:150px;
    resize: none;
}
 
#contact-form label {
    display:block;
}
 
#contact-form .required {
    font-weight:bold;
    color:#F00;    
}
 
#contact-form #submit-button {
    width: 100px;
    background-color:#333;
    color:#FFF;
    border:none;
    display:block;
    float:right;
    margin-bottom:0px;
    margin-right:6px;
    background-color:#8FB5C1;
    -moz-border-radius:8px;
}
 
#contact-form #submit-button:hover {
    background-color: #A6CFDD;
}
 
#contact-form #submit-button:active {
    position:relative;
    top:1px;
}
 
#contact-form #loading {
    width:32px;
    height:32px;
    background-image:url(../img/loading.gif);
    display:block;
    position:absolute;
    right:130px;
    bottom:16px;
    display:none;
}
 
#errors {
    border:solid 1px #E58E8E;
    padding:10px;
    margin:25px 0px;
    display:block;
    width:437px;
    -webkit-border-radius:8px;
    -moz-border-radius:8px;
    border-radius:8px;
    background:#FFE6E6 url(../img/cancel_48.png) no-repeat 405px center;
    display:none;
}
 
#errors li {
    padding:2px;
    list-style:none;    
}
 
#errors li:before {
    content: ' - ';    
}
 
#errors #info {
    font-weight:bold;
}
 
#errors #info:before {
    content: '';    
}
 
#success {
    border:solid 1px #83D186;
    padding:25px 10px;
    margin:25px 0px;
    display:block;
    width:437px;
    -webkit-border-radius:8px;
    -moz-border-radius:8px;
    border-radius:8px;
    background:#D3EDD3 url(../img/accepted_48.png) no-repeat 405px center;
    font-weight:bold;
    display:none;
}
 
#errors.visible, #success.visible {
    display:block;    
}
 
#req-field-desc {
    font-style:italic;
}
 
/* Remove box shadow firefox, chrome and opera put around required fields. It looks rubbish. */
input:required, textarea:required {
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
}
 
/* Normalize placeholder styles */
 
/* chrome, safari */
::-webkit-input-placeholder {
    color:#CCC;
    font-style:italic;
}
 
/* mozilla */
input:-moz-placeholder, textarea:-moz-placeholder {
    color:#CCC;
    font-style:italic;
}
 
/* ie (faux placeholder) */
input.placeholder-text, textarea.placeholder-text  { 
    color:#CCC;
    font-style:italic;
}
</style>
<div id="contact-form" class="clearfix">
    <form action="{{ route('kontak.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
     <label for="name">Name: <span class="required">*</span></label>
        <input type="text" id="name" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
         
        <label for="email">Email Address: <span class="required">*</span></label>
        <input type="email" id="Email" name="Email" value="" placeholder="johndoe@example.com" required="required" />
         
        <label for="telephone">Telephone: </label>
        <input type="tel" id="Telephone" name="Telephone" value="" />
         
        
         
        <label for="message">Message: <span class="required">*</span></label>
        <textarea id="Message" name="Message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>
         
        <span id="loading"></span>
        <input type="submit" value="Kirim" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>
</div>

@endsection

 