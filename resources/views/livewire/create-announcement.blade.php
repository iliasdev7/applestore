<div>
    <div class="vw-100 d-flex justify-content-center">
        <form wire:submit.prevent="store" class="w-50 border border-5 p-5">

            @if(session()->has('message'))
              <div class="d-flex flex-row justify-content-center my-2 alert alert-dark">
                {{session('message')}}
              </div>
            @endif

               @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror"  value="{{old('title')}}">
                  @error('title')
                      {{$message}}
                  @enderror
                </div>  
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea wire:model="body" type="text" class="form-control  @error('body') is-invalid @enderror"  value="{{old('body')}}"></textarea>
                    @error('body')
                        {{$message}}
                    @enderror
                  </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input wire:model="price" type="nuber" class="form-control  @error('price') is-invalid @enderror" value="{{old('price')}}">
                    @error('price')
                      {{$message}} 
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="category">Category</label>
                  <select wire:model.defer="category" id="category" class="form-control">
                    <option value="">select category</option>
                      @foreach ($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select> 
                </div>
              
                <button type="submit" class="btn btn-primary">create</button>
              </form>    
    </div>

</div>
