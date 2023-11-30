<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Mehr')
<img src="https://mehrfestivart.ir//images/golden_logo.png" class="logo" alt="Mehr">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
