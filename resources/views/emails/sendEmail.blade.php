<h3>Qotation Request</h3>

<p>Dear Client</p>
<p>You have requested for a quotation following products</p>
@foreach($images as $image)
<p>sankanai.ca/public{{$image}}</p>
@endforeach 
<br>

<h3>Following is your informaiton you have provided</h3>
<p>Name: {{$name}}</p>
<p>Email: {{$email}}</p>
<p>Phone: {{$phone}}</p>
<p>Notes: {{$notes}}</p>
<br>

<p>We will be in touch for your request ASAP</p>
<br>
<a href="sankanai.ca">Sankanai Furniture</a>

<p>Sent via infosankanai@gmail.com</p>