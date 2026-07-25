<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>
<body style="font-family:sans-serif;padding:2em;background:#f5f5f5;">
    <div style="max-width:600px;margin:auto;background:white;border-radius:12px;padding:2em;">
        <h2 style="color:#10B981;">Pesan Baru dari Portfolio</h2>
        <p><strong>Nama:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Subjek:</strong> {{ $subject }}</p>
        <hr style="border:none;border-top:1px solid #eee;margin:1.5em 0;">
        <p>{{ nl2br(e($message)) }}</p>
    </div>
</body>
</html>
