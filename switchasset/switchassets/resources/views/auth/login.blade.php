<!doctype html>
<html class="no-js" lang="">
<head>
    
    <title>Switch Assets Group Asset Management </title>
    @include('auth.layouts.meta')
    
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout21">
        <!-- Animation Start Here -->
        <div id="particles-js"></div>
        
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
                 <div class="fxt-content">
                     <div class="fxt-header">
                         
                         <p>Login into your dashboard.</p>
                     </div>
                     <div class="fxt-form">
                         <form method="POST" action="{{ route('login')}}">
                            @csrf                            
                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-1">
                                     <input type="email" id="email" class="form-control" name="email" placeholder="Email"
                                         value="" required />
                                 </div>
                                 @error('email')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                             </div>
                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-2">
                                     <input id="password" type="password" class="form-control" name="password"
                                         placeholder="********" required />
                                     <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-3">
                                     <div class="fxt-checkbox-area">
                                         <div class="checkbox">
                                             <input id="checkbox1" type="checkbox">
                                             <label for="checkbox1">Keep me logged in</label>
                                         </div>
                                         <a href="{{ url('reset')}}" class="switcher-text">Forgot Password</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="fxt-transformY-50 fxt-transition-delay-4">
                                     <button style="background-color: #08237e" type="submit" class="fxt-btn-fill">Log in</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="fxt-footer">
                         <div class="fxt-transformY-50 fxt-transition-delay-9">
                             <p>Don't have an account?<a href="{{ url('register')}}" class="switcher-text2 inline-text">Register</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     </section>
    
     @include('auth.layouts.footer')
     
</body>

</html>