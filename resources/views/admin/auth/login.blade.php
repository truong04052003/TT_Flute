<!-- Section: Design Block -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

</body>

</html>
<section class=" text-center text-lg-start">
    <style>
        .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        @media (min-width: 992px) {
            .rounded-tr-lg-0 {
                border-top-right-radius: 0;
            }

            .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
            }

            .card-body.py-5.px-md-5 {
                margin: 0px -104px 0px 221px;
            }

            input.form-control {
                border-radius: 30px;
            }
        }
    </style>
    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-5">
                <div class="card-body py-5 px-md-5">
                    <h2>Đăng Nhập</h2><br>
                    <form action="{{ route('postlogin') }}" method="POST">
                        @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" />
                            @error('email')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" />
                            @error('password')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="row mb-4">
                            <div class="nho-dang-nhap">
                                <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                                <a href="{{route('forget-password')}}">Quên Mật Khẩu</a>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
