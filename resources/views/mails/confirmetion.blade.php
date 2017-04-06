Hi {{ $name }},
<p>your Registration is completed. Please click the link to get access</p>

{{ route('confirmation', $token) }}