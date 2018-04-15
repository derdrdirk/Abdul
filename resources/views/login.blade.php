@extends('layout.master')

@section('content')

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                    <div class="tab-container">

                        <div class="tab-content clearfix" id="tab-login">
                            <div class="panel panel-default nobottommargin">
                                <div class="panel-body" style="padding: 40px;">
                                    <form id="login-form" name="login-form" class="nobottommargin" action="/Login" method="post">
                                        {{ csrf_field() }}

                                        <h3>Login </h3>

                                        <div class="col_full">
                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" value="" class="form-control" />
                                        </div>

                                        <div class="col_full">
                                            <label for="password">Password:</label>
                                            <input type="password" id="password" name="password" value="" class="form-control" />
                                        </div>

                                        <div class="col_full nobottommargin">
                                            <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->
@endsection