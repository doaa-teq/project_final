<x-mail::message>
# Hello you have got an email send

<h1>First_Name:{{$data['first_name']}}</h1>
<h2>Last_Name:{{$data['last_name']}}</h2>
<h3>Email:{{$data['email']}}</h3>
<h4>Message:{{$data['massege']}}</h4>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
