<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body dir="rtl">
<!------------------- Header ------------------>

<header class="header">
        <section class="sidebar-header bg-gray">
            <section class="d-flex justify-content-between flex-md-row-reverse px-2">
                <span class="d-inline d-md-none"><i class="fas fa-toggle-off"></i></span>
                <span class="d-none d-md-inline"><i class="fas fa-toggle-on"></i></span>
                <span><img class="logo" src="assets/images/logo.png" alt=""></span>
                <span class="d-md-none"><i class="fas fa-ellipsis-h"></i></span>
            </section>
        </section>


        <section class="body-header">
            <section class="d-flex justify-content-between">
                <section>
                    <span class="mr-5">
                        <span class="search-area d-none">
                            <i class="fas fa-times pointer"></i>
                            <input type="text" class="search-input">
                            <i class="fas fa-search pointer"></i>
                        </span>
                        <i class="fas fa-search p-1 d-none d-md-inline pointer"></i>
                    </span>

                    <span class="pointer p-1 d-none d-md-inline mr-5">
                        <i class="fas fa-compress d-none"></i>
                        <i class="fas fa-expand "></i>
                    </span>
                </section>

                <section>
                    <span class="ml-2 ml-md-4 position-relative">
                        <span class="pointer">
                            <i class="far fa-bell"></i><sup class="badge badge-danger">4</sup>
                        </span>
                        <section class="header-notifictation rounded">
                            <section class="d-flex justify-content-between">
                                <span class="px-2">
                                    نوتیفیکیشن ها
                                </span>
                                <span class="px-2">
                                    <span class="badge badge-danger">جدید</span>
                                </span>
                            </section>

                            <ul class="list-group rounded px-0">
                                <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                        <section class="media-body pr-1">
                                            <h5 class="notification-user">محمد هاشمی</h5>
                                            <p class="notification-text">این یک متن تستی است</p>
                                            <p class="notification-time">30 دقیقه پیش</p>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <img class="notification-img" src="assets/images/avatar-2.jpg" alt="">
                                        <section class="media-body pr-1">
                                            <h5 class="notification-user">محمد هاشمی</h5>
                                            <p class="notification-text">این یک متن تستی است</p>
                                            <p class="notification-time">30 دقیقه پیش</p>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <img class="notification-img" src="assets/images/avatar-2.jpg" alt="">
                                        <section class="media-body pr-1">
                                            <h5 class="notification-user">محمد هاشمی</h5>
                                            <p class="notification-text">این یک متن تستی است</p>
                                            <p class="notification-time">30 دقیقه پیش</p>
                                        </section>
                                    </section>
                                </li>
                            </ul>
                        </section>
                    </span>

                    <span class="ml-2 ml-md-4 position-relative">
                        <span>
                            <i class="far fa-comment-alt"><sup class="badge badge-danger">3</sup></i>
                         </span>
                         <section class="header-comment">
                            <section class="border-bottom px-4">
                                <input type="text" class="form-control form-control-sm my-4" placeholder="جستجو...">
                            </section>
                            <section class="header-comment-wrapper">
                                <ul class="list-group rounded px-0">
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">آروین زارعی</h5>
                                                    <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">آروین زارعی</h5>
                                                    <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">آروین زارعی</h5>
                                                    <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">آروین زارعی</h5>
                                                    <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">آروین زارعی</h5>
                                                    <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <section class="media">
                                            <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                            <section class="media-body pr-1">
                                                <section class="d-flex justify-content-between">
                                                    <h5 class="comment-user">آروین زارعی</h5>
                                                    <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                                </section>
                                            </section>
                                        </section>
                                    </li>
                                </ul>
                            </section>
                         </section>
                    </span>

                    <span ml-3 ml-md-5 position-relative>
                        <span class="pointer">
                            <img class="header-avatar" src="assets/images/avatar-2.jpg" alt="avatar">
                            <span class="header-username"> آروین زارعی </span>
                            <i class="fas fa-angle-down"></i>
                        </span>

                        <section class="header-profile rounded">
                            <section class="list-group rounded">
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-cog"> </i> تنظیمات
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-user"> </i> کاربر
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="far fa-envelope"> </i> پیام ها
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-lock"> </i> قفل صفحه
                                </a>
                                <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                    <i class="fas fa-sign-out-alt"> </i> خروج
                                </a>
                            </section>
                        </section>
                    </span>

                </section>
            </section>
        </section>
</header>

<!-- Scripts -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/poper.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/grid.js"></script>
</body>
</html>