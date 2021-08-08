<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Bramhansh - Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="{{ url('public/img/faviconss.png') }}" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ url('public/files/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>

        <div class="login-container">
         <div class="login-box animated fadeInDown">
            <div style="text-align: center;font-size: 26px; color: #ffffff;margin-bottom: 5px;">Bramhansh</div>
            <div class="login-body">
               <div class="login-title">Log In to your account</div>
                @include('message')
               <form action="{{ url('admin/login') }}" class="form-horizontal" method="post">
               {{ csrf_field() }}
                  <div class="form-group">
                     <div class="col-md-12">
                        <input type="text" class="form-control" required="" value="bramhansh@gmail.com" name="email" placeholder="Email"/>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <input type="password" class="form-control" required="" name="password" value="123456" placeholder="Password"/>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-6">
                      
                     </div>
                     <div class="col-md-6">
                        <button class="btn btn-info btn-block">Log In</button>
                     </div>
                  </div>
                  <div class="login-subtitle">
                  </div>
               </form>
            </div>
            <div class="login-footer">
               <div class="pull-left">
                  @ {{ date('Y') }} Bramhansh
               </div>
            </div>
         </div>
      </div>

        <!-- START PLUGINS -->
      <script type="text/javascript" src="{{ url('public/files/js/plugins/jquery/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('public/files/js/plugins/jquery/jquery-ui.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('public/files/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
      <!-- END PLUGINS -->


    </body>
</html>