<x-layout>
    <div class="container vh-100 d-flex align-items-center  ">
        <form class="w-100" action="{{route('register')}}" method="POST">
            @csrf
            <div class="">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="{{old('email')}}" class="form-control" name="email">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" value="{{old('name')}}" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>    
            </div>
                <button type="submit" class="btn btn-primary">Register</button>
        </form>
            
    </div>
    </x-layout> 