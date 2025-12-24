<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --primary-color: #6366f1;
        --primary-hover: #4f46e5;
        --secondary-color: #64748b;
        --bg-gradient: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        --glass-bg: rgba(255, 255, 255, 0.8);
        --glass-border: rgba(255, 255, 255, 0.4);
        --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        --card-radius: 16px;
    }

    body {
        font-family: 'Outfit', sans-serif;
        background: var(--bg-gradient);
        min-height: 100vh;
        color: #1e293b;
    }

    .page-content {
        min-height: 85vh;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .glass-card {
        background: var(--glass-bg);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid var(--glass-border);
        border-radius: var(--card-radius);
        box-shadow: var(--glass-shadow);
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 40px 0 rgba(31, 38, 135, 0.1);
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        border-radius: 10px;
        padding: 0.6rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: var(--primary-hover);
        border-color: var(--primary-hover);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
    }

    .form-control {
        border-radius: 10px;
        padding: 0.75rem 1rem;
        border: 1px solid #e2e8f0;
        background-color: rgba(255, 255, 255, 0.5);
    }

    .form-control:focus {
        background-color: #fff;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    .footer {
        text-align: center;
        padding: 2rem;
        color: var(--secondary-color);
        font-size: 0.9rem;
    }

    .table {
        margin-bottom: 0;
    }

    .table thead th {
        background-color: rgba(0, 0, 0, 0.02);
        color: var(--secondary-color);
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        padding: 1rem;
        border-top: none;
    }

    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
    }

    .action-icons a {
        font-size: 1.1rem;
        margin: 0 5px;
        color: var(--secondary-color);
        transition: color 0.2s;
    }

    .action-icons a.edit:hover {
        color: var(--primary-color);
    }

    .action-icons a.delete:hover {
        color: #ef4444;
    }
</style>