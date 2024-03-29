<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <section class="h-100">
        <div class="container-xl text-base py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-6">
                    <div class="card detail text-black login-card">
                        <div class="card-body py-5 p-md-5 mx-md-4 login">

                            <a class="navbar-brand fw-semibold login-fs" href="#">
                                Tand<span class="text-red">uran</span>
                            </a>
                            <p class="fw-bold mt-3 login-fs">Login</p>

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-4 login">
                                    <label for="email" :value="__('Email')" class="form-label sm-fs">Email</label>
                                    <input type="email" class="form-control p-4 py-lg-3" id="email"
                                        aria-describedby="emailHelp" placeholder="username@gmail.com" name="email"
                                        :value="old("email")" required autofocus>
                                </div>
                                <div class="mb-3 login">
                                    <label for="password" class="form-label sm-fs"
                                        :value="__('password')">Password</label>
                                    <input type="password" class="form-control p-4 py-lg-3" id="password"
                                        placeholder="Password" name="password" required autocomplete="current-password">
                                    <a href="" class="text-decoration-none d-block text-dark mt-2 sm-fs">Forgot
                                        Password?</a>
                                    <button type="submit"
                                        class="btn btn-warning button-input mt-2 p-4 py-lg-3 fw-semibold explore-button mb-3 mb-lg-1 w-100 text-white fs-5">
                                        Sign in</button>
                                </div>
                                <p class="text-center sm-fs">or continue with</p>
                                <div class="row justify-content-center text-center">
                                    <div class="col-4">
                                        <button
                                            class="btn btn-light button-input px-4 px-lg-5 py-3 fw-semibold account-button mb-3">
                                            <svg width="25" height="25" viewBox="0 0 31 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M30.648 14.0857H29.4271V14.018H15.7856V20.5446H24.3517C23.102 24.3439 19.7439 27.0713 15.7856 27.0713C10.7633 27.0713 6.6913 22.6878 6.6913 17.2813C6.6913 11.8748 10.7633 7.49136 15.7856 7.49136C18.1039 7.49136 20.2131 8.43282 21.819 9.97066L26.1062 5.35552C23.3991 2.63962 19.778 0.964722 15.7856 0.964722C7.41506 0.964722 0.628418 8.27047 0.628418 17.2813C0.628418 26.2921 7.41506 33.5979 15.7856 33.5979C24.1562 33.5979 30.9428 26.2921 30.9428 17.2813C30.9428 16.1873 30.8383 15.1194 30.648 14.0857Z"
                                                    fill="#FFC107" />
                                                <path
                                                    d="M2.375 9.68675L7.3549 13.6182C8.70238 10.027 11.9657 7.49136 15.7846 7.49136C18.1029 7.49136 20.212 8.43282 21.8179 9.97066L26.1051 5.35552C23.3981 2.63962 19.777 0.964722 15.7846 0.964722C9.9627 0.964722 4.91383 4.50297 2.375 9.68675Z"
                                                    fill="#FF3D00" />
                                                <path
                                                    d="M15.7858 33.5984C19.7009 33.5984 23.2583 31.9856 25.948 29.3627L21.2568 25.0893C19.6839 26.377 17.7619 27.0735 15.7858 27.0718C11.8434 27.0718 8.49596 24.3657 7.23488 20.5892L2.29211 24.6888C4.80063 29.9729 9.89497 33.5984 15.7858 33.5984Z"
                                                    fill="#4CAF50" />
                                                <path
                                                    d="M30.6481 14.0857H29.4271V14.0179H15.7856V20.5446H24.3517C23.754 22.3528 22.6771 23.9329 21.2544 25.0896L21.2566 25.0879L25.9478 29.3613C25.6159 29.686 30.9429 25.4396 30.9429 17.2813C30.9429 16.1872 30.8383 15.1193 30.6481 14.0857Z"
                                                    fill="#1976D2" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button
                                            class="btn btn-light button-input px-4 px-lg-5 py-3 fw-semibold account-button mb-4">
                                            <svg width="25" height="25" viewBox="0 0 31 33" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.3084 0.605225C6.93385 0.605225 0.150879 7.90702 0.150879 16.9221C0.150879 24.1423 4.48971 30.2407 10.5148 32.4027C11.2727 32.5455 11.5569 32.056 11.5569 31.6277C11.5569 31.2401 11.5379 29.9552 11.5379 28.5887C7.72962 29.3433 6.74438 27.5892 6.44123 26.6714C6.27071 26.2023 5.53178 24.7542 4.88759 24.3667C4.35708 24.0607 3.5992 23.3061 4.86864 23.2857C6.06229 23.2653 6.9149 24.4686 7.1991 24.9582C8.56328 27.4261 10.7422 26.7326 11.6137 26.3043C11.7463 25.2437 12.1442 24.5298 12.58 24.1219C9.20747 23.714 5.68336 22.3067 5.68336 16.0655C5.68336 14.291 6.27071 12.8225 7.237 11.6803C7.08542 11.2724 6.55491 9.5999 7.38857 7.35633C7.38857 7.35633 8.65801 6.92801 11.5569 9.02881C12.7695 8.66168 14.0579 8.47811 15.3462 8.47811C16.6346 8.47811 17.923 8.66168 19.1356 9.02881C22.0345 6.90762 23.3039 7.35633 23.3039 7.35633C24.1376 9.5999 23.6071 11.2724 23.4555 11.6803C24.4218 12.8225 25.0091 14.2706 25.0091 16.0655C25.0091 22.3271 21.4661 23.714 18.0935 24.1219C18.643 24.6318 19.1167 25.6108 19.1167 27.1405C19.1167 29.3229 19.0977 31.077 19.0977 31.6277C19.0977 32.056 19.3819 32.5659 20.1398 32.4027C23.1488 31.3091 25.7634 29.2273 27.6158 26.4503C29.4681 23.6733 30.4649 20.3409 30.4658 16.9221C30.4658 7.90702 23.6829 0.605225 15.3084 0.605225Z"
                                                    fill="black" />
                                            </svg>

                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button
                                            class="btn btn-light button-input px-4 px-lg-5 py-3 fw-semibold account-button mb-2">
                                            <svg width="25" height="25" viewBox="0 0 32 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M31.2501 17.382C31.2501 8.31388 24.4634 0.963135 16.0927 0.963135C7.71815 0.965174 0.931396 8.31388 0.931396 17.384C0.931396 25.5771 6.47524 32.369 13.7205 33.6009V22.1282H9.8743V17.384H13.7243V13.7637C13.7243 9.64983 15.9885 7.3777 19.45 7.3777C21.1098 7.3777 22.8434 7.69792 22.8434 7.69792V11.7363H20.9317C19.0503 11.7363 18.4629 13.0029 18.4629 14.3022V17.382H22.6653L21.9946 22.1261H18.461V33.5989C25.7063 32.367 31.2501 25.5751 31.2501 17.382Z"
                                                    fill="#059BE5" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="sm-fs">Don't have account yet?</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="sm-fs">Register for free</p>
                                        </div>
                                    </div>

                            </form>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center hero1">
            </div>
        </div>
        </div>
        </div>
    </section>

    @include('partials.scripts')
</body>

</html>
