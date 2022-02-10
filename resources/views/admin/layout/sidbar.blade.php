<header class="main-nav">
    <div class="sidebar-user text-center">
        <a  class="setting-primary"
            href="{{ route('user.edit', Auth::user()->id) }}">
                <i data-feather="settings"></i>
        </a>
        <img    class="img-90 rounded-circle"
                src="{{ asset('admin') }}/assets/images/dashboard/1.png" alt="">
        <div class="badge-bottom">
            <span class="badge badge-primary">{{ Auth::user()->roles_name[0] }}</span>
        </div>
        <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
        {{-- <p class="mb-0 font-roboto">{{ Auth::user()->roles_name[0] }}</p> --}}

    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>القائمه </h6>
                        </div>
                    </li>
                    @can('الاقسام')
                        <li class="dropdown">
                            <a  class="nav-link menu-title"
                            href="javascript:void(0)">
                                <i data-feather="home"></i>
                                <span>الاقسام</span>
                            </a>

                            <ul class="nav-submenu menu-content">
                                <li>
                                    <a href="{{ route('category.index') }}">عرض الاقسام</a>
                                </li>
                                @can('اضافه قسم')
                                    <li>
                                        <a href="{{ route('category.create') }}">اضافه قسم</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('ادوار الموظفين')

                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="airplay"></i>
                                <span>صلاحيات الموظفين</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                <li>
                                    <a href="{{ route('roles.index') }}">عرض الصلاحيات</a>
                                </li>
                                @can('اضافه دور')
                                    <li>
                                        <a href="{{ route('roles.create') }}">اضافه صلاحيه</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan


                    @can('مستخدمين')

                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="airplay"></i>
                                <span>اضافه موظف</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                <li>
                                    <a href="{{ route('user.index') }}">عرض الموظفين</a>
                                </li>
                                @can('اضافه مستخدم')
                                    <li>
                                        <a href="{{ route('user.create') }}">اضافه موظف</a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan

                    @can('المنتجات')
                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="airplay"></i>
                                <span>المنتجات</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                <li>
                                    <a href="{{ route('product.index') }}">عرض المنتجات</a>
                                </li>
                                @can('اضافه منتج')

                                    <li>
                                        <a href="{{ route('product.create') }}">اضافه منتج</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @can('العملاء')
                        <li class="dropdown">
                            <a  class="nav-link menu-title"
                            href="javascript:void(0)">
                                <i data-feather="home"></i>
                                <span>العملاء</span>
                            </a>

                            <ul class="nav-submenu menu-content">
                                <li>
                                    <a href="{{ route('customer.index') }}">عرض العملاء</a>
                                </li>
                                @can('اضافه عميل')
                                    <li>
                                        <a href="{{ route('customer.create') }}">اضافه عميل</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
