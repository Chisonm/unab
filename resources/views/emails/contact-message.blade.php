@component('mail::message')
# Introduction
You have a message from 
<h2>From: {{$email->email}}</h2>
<h3>Name: {{$email->name}}</h3>
<p>{{ $email->message }}</p>
<br>Thanks.
@endcomponent