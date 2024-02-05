<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.24.0/font/bootstrap-icons.css">
    <style>
        
        body {
            padding-top: 80px;
        }
        

        #sidebar {
            position: fixed;
            top: 50px;
            left: 0;
            width: 220px;
            border: none;
            border-radius: 0;
            overflow-y: auto;
            background-color: #222;
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-bar li a {
            color: #eee;
            width: 220px;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .side-bar li a:hover,
        .side-bar li a:focus {
            background-color: #333;
        }

        .tmargin {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/admin">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person"></i>&nbsp;Hello Admin</a>
                    </li>
                    <li class="nav-item active"><a class="nav-link" title="View Website" href="/Landing"><i
                                class="bi bi-globe"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="/" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3">
                <div class="container-fluid tmargin">
                    <div class="input-group">
                      
                            <button class="btn btn-default"><i class="bi bi-search"></i></button>
                        </span>
                    </div>
                </div>

                <ul class="nav flex-column side-bar">

                    <li class="nav-item side-bar tmargin"><a class="nav-link" href="/admin"><i
                                class="bi bi-house"></i>&nbsp;Dashboard</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="/members"><i
                                class="bi bi-flag"></i>&nbsp; Member Master List </a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="#"><i
                                class="bi bi-star"></i>&nbsp;Add Product</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="#"><i
                                class="bi bi-person-circle"></i>&nbsp;Add Events</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="register"><i
                                class="bi bi-person-check"></i>&nbsp;Register a User/Member</a></li>           

                    <li class="nav-item side-bar"><a class="nav-link" href="#"><i
                                class="bi bi-gear"></i>&nbsp;Settings</a></li>
                    
                </ul>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4 animated bounce">
                <h1 class="page-header">Registration</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><i class="bi bi-house-door"></i>&nbsp;Home</li>
                    <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-list"></i>Dashboard</a></li>
                </ul>
                <table class="table table-hover">
                    <!-- Insert Registration Form Here -->
                    <tr>
                        <td colspan="5">
                            <h2>Register a User/Member</h2>
                            <form>
                                <!-- Your registration form fields go here -->
                                <div id="register-container">
        

        <?php if (isset($validation)): ?>
            <div class="error"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <?= form_open('/register') ?>
        <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form action="your_registration_handler.php" method="post">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirm">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirm" required>
                </div>

                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" name="role">
                        <option value="user" <?= set_value('role') === 'user' ? 'selected' : '' ?>>User</option>
                        <option value="admin" <?= set_value('role') === 'admin' ? 'selected' : '' ?>>Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>

            </form>

        </div>
    </div>
</div>
        <?= form_close() ?>
    </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </main>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="/" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
