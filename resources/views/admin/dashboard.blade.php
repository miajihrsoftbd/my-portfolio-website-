
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Miaji Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f7fb;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: #172033;
            color: white;
        }

        .sidebar a {
            color: #b8c2d6;
            text-decoration: none;
            display: block;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #0d6efd;
            color: white;
        }

        .stat-card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.04);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 12px;
            font-size: 23px;
        }

        .main-content {
            padding: 30px;
        }

        .table-card {
            border: none;
            border-radius: 14px;
            overflow: hidden;
        }

        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .main-content {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-3 col-lg-2 sidebar p-3">

            <h4 class="fw-bold mb-4 mt-2">
                <i class="bi bi-code-slash text-primary"></i>
                Miaji Admin
            </h4>

            <a href="#" class="active">
                <i class="bi bi-grid me-2"></i> Dashboard
            </a>

            <a href="#">
                <i class="bi bi-envelope me-2"></i> Contact Messages
            </a>

            <a href="#">
                <i class="bi bi-person me-2"></i> Profile
            </a>

            <hr class="border-secondary">

            <a href="/">
                <i class="bi bi-house me-2"></i> Visit Website
            </a>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button type="submit"
                        class="btn text-start w-100 mt-2"
                        style="color: #b8c2d6;">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </button>
            </form>

        </aside>

        <!-- Main Content -->
        <main class="col-md-9 col-lg-10 main-content">

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

            <!-- Topbar -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1">Dashboard</h2>
                    <p class="text-muted mb-0">Welcome to your portfolio admin panel.</p>
                </div>

                <div class="bg-white rounded-circle p-3 shadow-sm">
                    <i class="bi bi-person-circle fs-4 text-primary"></i>
                </div>
            </div>

            <!-- Statistics -->
            <div class="row g-4 mb-4">

                <div class="col-md-6 col-xl-4">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1">Total Messages</p>
                                <h3 class="fw-bold mb-0">{{ $totalMessages }}</h3>
                            </div>
                            <div class="stat-icon bg-primary-subtle text-primary">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1">Unread Messages</p>
                                <h3 class="fw-bold mb-0">00</h3>
                            </div>
                            <div class="stat-icon bg-warning-subtle text-warning">
                                <i class="bi bi-envelope-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card stat-card p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1">Website Status</p>
                                <h5 class="fw-bold mb-0 text-success">Online</h5>
                            </div>
                            <div class="stat-icon bg-success-subtle text-success">
                                <i class="bi bi-globe"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Recent Messages -->
            <div class="card table-card shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold mb-0">Recent Contact Messages</h5>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            View All
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            
                            <tbody>
                                @forelse($recentMessages as $message)
                                    <tr>
                                        <td class="fw-semibold">{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.messages.show', $message->id) }}"
                                                 class="btn btn-sm btn-outline-primary">
                                                 View
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-5">
                                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                            No messages to display yet.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

            <p class="text-muted text-center mt-4 small">
                &copy; {{ date('Y') }} Miaji Portfolio Admin Panel
            </p>

        </main>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
