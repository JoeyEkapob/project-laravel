@extends('auth.app')

        <div class="p-5 bg-image" ></div>
            <div class="container">
                <div class="block">
                    <div class="card-body py-5 px-md-5">
            
                        <div>
                            <img src="/img/pic/Logo_RMUTK.png" class=" logo">
                        </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <h3 class="fw-bold  my-5 text-center">ระบบสารสนเทศเพื่อการติดตามงาน</h3>

                                        <form action="{{route('loginuser')}}" method="post">
                                            @csrf
                                            <div class="text-center">
                                                @if(Session::has('success'))
                                                    <div class="alert alert-success">{{session::get('success')}}</div>
                                                @endif
                                                @if(Session::has('error'))
                                                    <div class="alert alert-danger">{{session::get('error')}}</div>
                                                @endif
                                        
                                            </div>
                                                <div class="form-outline mb-3">
                                                    <label class="form-label">อีเมลผู้ใช้งาน</label>
                                                    <input class="form-control " type="email" name="email" placeholder="กรอกอีเมลผู้ใช้งาน" value="{{old('email')}}">
                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                </div>

                                                <div class="form-outline mb-3">
                                                    <label class="form-label">รหัสผู้ใช้งาน</label>
                                                    <input class="form-control " type="password" name="password" placeholder="กรอกรหัสผู้ใช้งาน" value="{{old('password')}}">
                                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                </div>
                                            

                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-outline-primary btn-block mb-4 mt-3" > เข้าสู่ระบบ </button>
                                                </div>
                    
                                        </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


{{-- <body>
    <form action="{{route('loginuser')}}" method="post">
        @if(Session::has('success'))
              
                    <div class="alert alert-success">{{session::get('success')}}</div>
                @endif
                @if(Session::has('error'))
             
                    <div class="alert alert-success">{{session::get('error')}}</div>
                @endif
        @csrf
        <h2>ล็อกอิน</h2>
			<input class="form-control form-control-lg" type="email" name="email" placeholder="กรอกอีเมลผู้ใช้งาน" value="{{old('email')}}"> 
       
            <br>
            <input class="form-control form-control-lg" type="password" name="password" placeholder="กรอกรหัสผู้ใช้งาน" >
        
            <br>
            <button type="submit">เข้าสู้ระบบ</button>
    </form>
</body>
</html> --}}