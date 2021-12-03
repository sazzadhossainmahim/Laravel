{{-- <x-app-layout> --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>


    <form method="post" action="{{route('post.create')}}">
        @csrf
         <div class="form-group px-5">
           <label for="exampleInputEmail1">Title</label>
           <input type="text" id="title" name="title" class="form-control" required="">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Description</label>
           <textarea name="body" class="form-control" required=""></textarea>
         </div><br>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>

{{-- </x-app-layout> --}}
