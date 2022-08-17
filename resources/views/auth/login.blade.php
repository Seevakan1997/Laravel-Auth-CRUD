@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
@endif

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="authenticate">
        <section class="vh-100 bg-image"
            style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Login</h2>

                                    <form>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3cg"
                                                class="form-control form-control-lg" name="email" />
                                            <label class="form-label" for="form3Example3cg">Your Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4cg"
                                                class="form-control form-control-lg" name="password" />
                                            <label class="form-label" for="form3Example4cg">Password</label>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">

                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" value="Login"
                                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
        </section>

    </form>
</body>
