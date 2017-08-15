@component('mail::message')
# CODECASTS

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, asperiores dignissimos ea, earum eius eligendi eum facere ipsa iste itaque molestiae necessitatibus, quibusdam repudiandae sunt tempora tempore totam voluptatibus voluptatum!

@component('mail::button', ['url' => ''])
验证用户
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
