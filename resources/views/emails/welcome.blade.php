<x-mail::message>
# Hello {{ $user['first_name'] }}!
# Welcome to Bloom Beauty!

    
    Your login details:
    Email: {{ $user['email'] }}
    Password: {{ $user['password'] }}

<x-mail::button :url="''">
Click here
</x-mail::button>

Thanks,<br>
Team {{ config('app.name') }}
</x-mail::message>
