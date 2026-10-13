<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Dashboard | EduNexa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #111827;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #111827;
            color: #fff;
            padding: 24px 16px;
            z-index: 1000;
            transition: 0.3s;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 10px 30px;
            font-size: 24px;
            font-weight: 700;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .menu-title {
            color: #9ca3af;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 12px;
            margin-bottom: 10px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 5px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 9px;
            color: #d1d5db;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
        }

        .menu a:hover,
        .menu a.active {
            background: #1d4ed8;
            color: #fff;
        }

        .menu-icon {
            width: 20px;
            text-align: center;
        }

        .sidebar-bottom {
            position: absolute;
            left: 16px;
            right: 16px;
            bottom: 20px;
        }

        .logout-btn {
            width: 100%;
            border: none;
            background: #1f2937;
            color: #d1d5db;
            padding: 12px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 14px;
            text-align: left;
        }

        .logout-btn:hover {
            background: #374151;
            color: #fff;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* ================= TOPBAR ================= */

        .topbar {
            height: 72px;
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .mobile-menu {
            display: none;
            border: none;
            background: transparent;
            font-size: 24px;
            cursor: pointer;
        }

        .topbar-left h2 {
            font-size: 20px;
            margin-bottom: 3px;
        }

        .topbar-left p {
            color: #6b7280;
            font-size: 12px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #dbeafe;
            color: #1d4ed8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .profile-info strong {
            display: block;
            font-size: 13px;
        }

        .profile-info span {
            color: #6b7280;
            font-size: 11px;
        }

        /* ================= CONTENT ================= */

        .content {
            padding: 30px;
        }

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h1 {
            font-size: 25px;
            margin-bottom: 7px;
        }

        .welcome p {
            color: #6b7280;
            font-size: 14px;
        }

        /* ================= STATS ================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-info span {
            color: #6b7280;
            font-size: 13px;
        }

        .stat-info h3 {
            font-size: 27px;
            margin-top: 8px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .stat-icon.green {
            background: #ecfdf5;
            color: #059669;
        }

        .stat-icon.orange {
            background: #fff7ed;
            color: #ea580c;
        }

        .stat-icon.red {
            background: #fef2f2;
            color: #dc2626;
        }

        /* ================= GRID ================= */

        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 22px;
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card-header h3 {
            font-size: 17px;
        }

        .view-all {
            color: #2563eb;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        /* ================= TABLE ================= */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 14px 12px;
            font-size: 13px;
            border-bottom: 1px solid #f1f5f9;
        }

        .school-name {
            font-weight: 600;
        }

        .school-code {
            display: block;
            color: #9ca3af;
            font-size: 11px;
            margin-top: 3px;
        }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
        }

        .status.active {
            background: #dcfce7;
            color: #15803d;
        }

        .status.warning {
            background: #ffedd5;
            color: #c2410c;
        }

        .status.expired {
            background: #fee2e2;
            color: #b91c1c;
        }

        /* ================= QUICK ACTION ================= */

        .quick-actions {
            display: grid;
            gap: 12px;
        }

        .action {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            text-decoration: none;
            color: #111827;
            transition: 0.2s;
        }

        .action:hover {
            border-color: #2563eb;
            background: #f8fbff;
        }

        .action-icon {
            width: 40px;
            height: 40px;
            border-radius: 9px;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .action strong {
            display: block;
            font-size: 13px;
        }

        .action span {
            display: block;
            color: #6b7280;
            font-size: 11px;
            margin-top: 3px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1100px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 800px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main {
                margin-left: 0;
            }

            .mobile-menu {
                display: block;
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 20px;
            }

            .profile-info {
                display: none;
            }
        }

        @media (max-width: 500px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .welcome h1 {
                font-size: 21px;
            }

            .content {
                padding: 15px;
            }

            .topbar-left p {
                display: none;
            }

            .card {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<aside class="sidebar" id="sidebar">

    <div class="brand">
        <div class="brand-icon">E</div>
        EduNexa
    </div>

    <div class="menu-title">
        Main Menu
    </div>

    <ul class="menu">

        <li>
            <a href="#" class="active">
                <span class="menu-icon">▦</span>
                Dashboard
            </a>
        </li>

        <li>
            <a href="#">
                <span class="menu-icon">🏫</span>
                Schools
            </a>
        </li>

        <li>
            <a href="#">
                <span class="menu-icon">👨‍💼</span>
                School Admins
            </a>
        </li>

        <li>
            <a href="#">
                <span class="menu-icon">📅</span>
                Subscriptions
            </a>
        </li>

        <li>
            <a href="#">
                <span class="menu-icon">📊</span>
                Reports
            </a>
        </li>

    </ul>

    <div class="menu-title" style="margin-top: 25px;">
        Settings
    </div>

    <ul class="menu">

        <li>
            <a href="#">
                <span class="menu-icon">⚙</span>
                Settings
            </a>
        </li>

    </ul>

    <div class="sidebar-bottom">

        <form method="POST" action="/company/logout">
            @csrf

            <button type="submit" class="logout-btn">
                ↪ &nbsp; Logout
            </button>
        </form>

    </div>

</aside>


<!-- ================= MAIN ================= -->

<main class="main">

    <!-- TOPBAR -->

    <header class="topbar">

        <div style="display:flex; align-items:center; gap:15px;">

            <button class="mobile-menu" onclick="toggleSidebar()">
                ☰
            </button>

            <div class="topbar-left">
                <h2>Company Dashboard</h2>
                <p>Manage your EduNexa platform</p>
            </div>

        </div>

        <div class="profile">

            <div class="avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div class="profile-info">
                <strong>{{ auth()->user()->name }}</strong>
                <span>Company Admin</span>
            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">

        <div class="welcome">

            <h1>
                Welcome back, {{ auth()->user()->name }} 👋
            </h1>

            <p>
                Here's what's happening across your schools today.
            </p>

        </div>
        
        @if (session('success'))
            <div style="padding: 12px 16px; margin-bottom: 20px; background: #dcfce7; color: #166534; border-radius: 8px;">
                {{ session('success') }}
            </div>
        @endif



        <!-- STATS -->

        <div class="stats-grid">

            <div class="stat-card">

                <div class="stat-info">
                    <span>Total Schools</span>
                    <h3>{{ $totalSchools }}</h3>
                </div>

                <div class="stat-icon">
                    🏫
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-info">
                    <span>Active Schools</span>
                    <h3>{{ $activeSchools }}</h3>
                </div>

                <div class="stat-icon green">
                    ✓
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-info">
                    <span>Expiring Soon</span>
                    <h3>2</h3>
                </div>

                <div class="stat-icon orange">
                    ⏳
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-info">
                    <span>Inactive Schools</span>
                    <h3>{{ $inactiveSchools }}</h3>
                </div>

                <div class="stat-icon red">
                    !
                </div>

            </div>

        </div>


        <!-- DASHBOARD GRID -->

        <div class="dashboard-grid">

            <!-- RECENT SCHOOLS -->

            <div class="card">

                <div class="card-header">

                    <h3>Recent Schools</h3>

                    <a href="#" class="view-all">
                        View All
                    </a>

                </div>

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>
                                <th>School</th>
                                <th>Status</th>
                                <th>Validity</th>
                            </tr>

                        </thead>

                        <tbody>

                           
@forelse ($recentSchools as $school)
    <tr>
        <td>
            <span class="school-name">
                {{ $school->name }}
            </span>

            <span class="school-code">
                {{ $school->code }}
            </span>
        </td>

        <td>
            @if ($school->status)
                <span class="status active">Active</span>
            @else
                <span class="status expired">Inactive</span>
            @endif
        </td>

        <td>
            —
        </td>
    </tr>
@empty
    <tr>
        <td colspan="3">No schools found.</td>
    </tr>
@endforelse


                        </tbody>

                    </table>

                </div>

            </div>


            <!-- QUICK ACTIONS -->

            <div class="card">

                <div class="card-header">

                    <h3>Quick Actions</h3>

                </div>

                <div class="quick-actions">

                    <a href="{{ route('company.schools.create') }}" class="action">

                        <div class="action-icon">
                            +
                        </div>

                        <div>
                            <strong>Add New School</strong>
                            <span>Create a new school</span>
                        </div>

                    </a>


                    <a href="#" class="action">

                        <div class="action-icon">
                            👨‍💼
                        </div>

                        <div>
                            <strong>Add School Admin</strong>
                            <span>Create admin account</span>
                        </div>

                    </a>


                    <a href="#" class="action">

                        <div class="action-icon">
                            📊
                        </div>

                        <div>
                            <strong>View Reports</strong>
                            <span>Platform statistics</span>
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>


<script>

    function toggleSidebar() {

        document.getElementById('sidebar').classList.toggle('open');

    }

</script>

</body>
</html>