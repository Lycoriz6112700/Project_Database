<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="py-5">
                        <div class = "col-md-12">
                            
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header">แบบฟอร์ม</div>
                                <div class ="card-body">

                        <form action="/user/update/" method ="post" >
                        @csrf
                        <input type="hidden" name = "id" value = "{{Auth::user()  -> id}}">
                                <div class = "form-group">
                                    <label for="firstname">firstname</label>
                                    <input type="text" class = "form-control" name = "firstname" value ="{{Auth::user() -> firstname}}">
                                    <label for="lastname">lastname</label>
                                    <input type="text" class = "form-control" name = "lastname" value ="{{Auth::user() -> lastname}}">
                                    <label for="extention">extention</label>
                                    <input type="text" class = "form-control" name = "extention" value ="{{Auth::user() -> extention}}">
                                    <label for="officeCode">officeCode</label>
                                    <input type="text" class = "form-control" name = "officeCode" value ="{{Auth::user() -> officeCode}}">
                                    <label for="reportTo">reportTo</label>
                                    <input type="text" class = "form-control" name = "extention" value ="{{Auth::user() ->reportTo}}">
                                    <label for="phone_no">phone</label>
                                    <input type="text" class = "form-control" name = "phone_no" value ="{{Auth::user() -> phone_no}}">
                                </div>
                            @error('product_code')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                            @enderror
                                    <br>
                            <input type="submit" value = อัพเดท  class="btn btn-primary">
                            </form>

                     </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
