@props(['eyebrow' => '', 'title' => '', 'text' => ''])
<div class="section-heading reveal">
  @if($eyebrow)<div class="eyebrow">{{ $eyebrow }}</div>@endif
  <h2>{{ $title }}</h2>
  @if($text)<p>{{ $text }}</p>@endif
</div>
