@extends('Layouts.main')

@section('main')
    <section class="w-screen h-screen">
        <div class="flex">
            <div class="flex-1 w-full h-screen">
                <div class="w-[80%] h-screen mx-auto flex flex-col justify-center items-center">
                    <h3 class="text-3xl font-bold text-[#3A3434] my-5">Login User</h3>
                    <form action="" class="w-[65%]" method="post">
                        <div class="mb-3">
                            <label for="email" class="block font-semibold text-[#3A3434] mb-3">Email</label>
                            <input type="email" class="px-5 py-3 placeholder:font-medium ring-2 ring-[#E76E6E] outline-2 outline-[#E76E6E] rounded-full bg-[#F8F8F8] w-full" name="email" placeholder="Enter Email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="block font-semibold text-[#3A3434] mb-3">Password</label>
                            <input type="password" class="px-5 py-3 placeholder:font-medium ring-2 ring-[#E76E6E] outline-2 outline-[#E76E6E] rounded-full bg-[#F8F8F8] w-full" name="password" placeholder="Enter Password" id="password">
                        </div>
                        <button type="submit" class="px-16 border cursor-pointer py-2 bg-[#F8F8F8] font-bold text-[#3A3434] rounded-full mt-14 block mx-auto">Login</button>
                    </form>
                    <p class="text-sm font-semibold mt-10">Is Admin ? <a href="/login-admin" class="text-blue-600">Login Here</a></p>
                </div>
            </div>
            <div class="flex-1 bg-[#E76E6E] w-full h-screen"></div>
        </div>
    </section>
@endsection
