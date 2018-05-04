<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>itOffside - @yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('css/front-custom.css') }}" rel="stylesheet" type="text/css"/>
    
    @yield('style')

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">เกี่ยวกับเรา</h4>
                        <p class="text-muted">
                            โปรเจคนี้พัฒนาขึ้นโดย <a href="https://itoffside.com">itOffside.com</a> & <a href="https://bahtsoft.com">bahtSoft.com</a>
                            โดยตั้งใจไว้ว่าทำไว้เป็นโครงแบบมาตฐานในการพัฒนาระบบอื่นๆอีกด้วย และ ตั้งใจไว้ว่า Sourcecode ฟรีสำหรับบุคคลทั่วไปเพื่อเป็นแนวทางในการพัฒนาระบบ
                            สำหรับโปรเจคนี้พัฒนาโดยใช้ Laravel 5.6 และ bootstrap 4.1
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">ติดต่อเรา</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ url('https://facebook.com/itoffside') }}" class="text-white">Like on Facebook</a>
                            </li>
                            <li>
                                <a href="#" class="text-white">Email : itoffside@hotmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                    <i class="fa fa-shopping-basket"></i>
                    &nbsp;
                    <strong>itOffside.com Shop</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">
        @yield('content')
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>&copy; itOffside.com & bahtSoft.com</p>
            <p>ติดตามเราได้ที่
                <a href="https://facebook.com/itoffside">facebook</a> หรือ
                <a href="https://www.itoffside.com">itoffside.com</a></p>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>        
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>

    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/loadingoverlay.min.js') }}"></script>

    <script src="{{ asset('js/front-custom.min.js') }}"></script>

    @yield('script')
</body>

</html>