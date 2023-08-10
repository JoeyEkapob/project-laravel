@extends('auth.app')
    @section('title', 'สมัครสมาชิก')
        @include('auth.sidebar')
            @section('content')
                <form action="{{route('registeruser')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('success'))
                            
                        <div class="alert alert-success">{{session::get('success')}}</div>
                    @endif
                    @if(Session::has('error'))
                
                        <div class="alert alert-success">{{session::get('error')}}</div>
                    @endif
                
                <main class="content">
                    <div class="card">		
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="" class="control-label" >คำนำหน้า</label>
                                                <select name="shortname" id="shortname" class="form-select"  >
                                                    <option value="1">นาย</option>
                                                    <option value="9">นาง</option>
                                                    <option value="2">นางสาว</option>
                                                    <option value="3">ดร.</option>
                                                    <option value="4">ผศ</option>
                                                    <option value="5">รศ</option>
                                                    <option value="6">ศ</option>
                                                    <option value="7">ผศ.ดร</option>
                                                    <option value="8">ศ.ดร</option>
                                                    <option value="10">อาจารย์</option>
                                                    <option value="11">Mr</option>
                                                    <option value="12">Ms</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="" class="control-label">ชื่อจริง</label>
                                            <input type="text" name="firstname" class="form-control " placeholder="กรอกชื่อของคุณ" value="{{old('firstname')}}">
                                            <span class="text-danger">@error('firstname'){{$message}} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="" class="control-label">นามสกุล</label>
                                            <input type="text" name="lastname" class="form-control" placeholder="กรอกนามสกุลของคุณ" value="{{old('lastname')}}">
                                            <span class="text-danger">@error('lastname'){{$message}} @enderror</span>

                                        </div>
                                    </div>
                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">อีเมล</label>
                                            <input type="email" class="form-control " name="email" placeholder="กรอกอีเมลของคุณ" value="{{old('email')}}">
                                            <span class="text-danger">@error('email'){{$message}} @enderror</span>

                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="control-label">รหัสผ่าน</label>
                                            <input type="password" class="form-control " name="password" value="{{old('password')}}">
                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                            
                                        </div>		
                                        <div class="mb-3">
                                            <label for="" class="control-label" >ตำเเหน่ง</label>
                                            
                                                <select name="role" id="role" class="form-select" value="{{old('role')}}">
                                                    @foreach($dataposition as $item)
                                                    <option value="{{$item->role_id}}">{{$item->positionname}}</option>
                                                    @endforeach
                                                </select>
                                            <span class="text-danger">@error('role') {{$message}} @enderror</span>

                                        </div> 					
                                    </div>	
                                    <div class="col-md-6">
                                        
                                        <div class="mb-3">
                                            <label for="control-label">เบอร์โทรศัพท์</label>
                                            <input  class="form-control" type="tel" id="phone" name="phone" placeholder="กรอกหมายเลขโทรศัพท์ของคุณ" value="{{old('phone')}}">
                                            <span class="text-danger">@error('tel') {{$message}} @enderror</span>

                                        </div>
                                        <div class="mb-3">
                                            <label class="label control-label">ยืนยันรหัสผ่าน</label>
                                            <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">	
                                            <span class="text-danger">@error('c_password') {{$message}} @enderror</span>

                                        </div> 
                                        <div class="mb-3">
                                            <label for="" class="control-label" >ฝ่าย</label>
                                                <select name="department" id="department" class="form-select"  value="{{old('department')}}">
                                                    @foreach($datadepartment as $item)
                                                    <option value="{{$item->department_id }}">{{ $item->departmentname }}</option>
                                                    @endforeach
                                                </select>
                                            <span class="text-danger">@error('department') {{$message}} @enderror</span>

                                        </div> 	
                                        
                                        

                                    </div>
                                    <div class="col-md-12">
                                    <div class="mb-3">
                                            <label for="control-label">เลขบัตรประชาชน</label>
                                            <input  class="form-control" type="tel" id="idcard" name="idcard" placeholder="กรอกหมายเลขบัตรประชาชนของคุณ" value="{{old('idcard')}}">
                                            <span class="text-danger">@error('idcard') {{$message}} @enderror</span>

                                        </div>
                                        <div class="mb-3">
                                            <button id="toggleButton">เปิดสถานะ</button>
                                        </div>	
                                        <div class="mb-3">
                                            <label for="" class="control-label">ไลน์โทเค็น</label>
                                            <input type="text" name="tokenline" class="form-control" placeholder="กรอกไลน์โทเค็นของคุณ" value="{{old('tokenline')}}">
                                            <p class="small mb-0 mt-2"><b>รายละเอียด :</b>หากต้องการเเจ้งได้รับการเเจ้งตื่อนผ่านไลน์อนุญาตโปรดกรอกไลน์โทเค็นของคุณ</p> 
                                            <p class="small mb-0 mt-2"><b>วิธีเอาโทเค็นไลน์ :</b><a href="procedure.php" target="_blank">คลิกที่นี่</a></p> 
                                        </div>
                                        
                                        <div class="user-image mb-3 text-center">
                                            <img class="rounded-circle rounded me-2 mb-2" id="img"  src="" width="150"  height="150">
                                        </div>
                                    </div>
                                    
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="control-label">รูปภาพ</label>	
                                                <input type="file" name="file" class="form-control streched-link" accept="image/jpeg,image/png,image/jpg" onchange="">
                                                <p class="small mb-0 mt-2"><b>รายละเอียด :</b>อนุญาตให้อัปโหลดเฉพาะไฟล์ JPG, JPEG, PNG </p> 
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                        
                                        </div>
                                        <hr>
                                        <div class="col-lg-12 text-right justify-content-center d-flex">
                                            <button class="btn btn-primary" name="signup" >บันทึก</button>
                                        </div>
                            </div>
                        </div>
                    </div>
            
                </main>
            </form>
        @endsection
