
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Details | Miaji Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary mb-4">
        <i class="bi bi-arrow-left"></i> Back to Dashboard
    </a>

    <div class="card border-0 shadow-sm mx-auto" style="max-width: 800px;">
        <div class="card-body p-4 p-md-5">

            <h3 class="fw-bold mb-4">Message Details</h3>

            <hr>

            <div class="mb-3">
                <label class="text-muted small">Sender Name</label>
                <h5>{{ $message->name }}</h5>
            </div>

            <div class="mb-3">
                <label class="text-muted small">Email Address</label>
                <p class="mb-0">{{ $message->email }}</p>
            </div>

            <div class="mb-3">
                <label class="text-muted small">Subject</label>
                <h5>{{ $message->subject }}</h5>
            </div>

            <div class="mb-3">
                <label class="text-muted small">Received Date</label>
                <p>{{ $message->created_at->format('d M Y, h:i A') }}</p>
            </div>

            <div class="mb-3">
                <label class="text-muted small">Message</label>

                <div class="bg-light border rounded p-3 mt-2">
                    {!! nl2br(e($message->message)) !!}
                </div>
            </div>

            <div class="mt-4">
                <a href="mailto:{{ $message->email }}?subject={{ urlencode('Re: '.$message->subject) }}"
                   class="btn btn-primary">
                    <i class="bi bi-reply"></i> Reply via Email
                </a>
            </div>

            <form action="{{ route('admin.messages.delete', $message->id) }}"
                method="POST"
                class="mt-3"
                onsubmit="return confirm('Are you sure you want to delete this message?')">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Delete Message
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>
