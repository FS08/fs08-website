<div style="font-family: ui-sans-serif, system-ui; line-height:1.6">
  <h2 style="margin:0 0 8px">New contact message</h2>
  <p><strong>Name:</strong> {{ $payload['name'] }}</p>
  <p><strong>Email:</strong> {{ $payload['email'] }}</p>
  <p><strong>Message:</strong></p>
  <pre style="white-space: pre-wrap; background:#f8fafc; padding:12px; border-radius:8px; border:1px solid #e5e7eb">{{ $payload['message'] }}</pre>
</div>

