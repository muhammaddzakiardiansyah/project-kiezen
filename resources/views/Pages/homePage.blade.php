@extends('Layouts.main')

@section('main')
    @include('Components.Navbar')
    <div class="container px-5 md:px-0 mt-10 md:mt-0 md:mx-auto md:flex justify-between items-center">
        <div class="writer md:ml-10">
            <h1 class="text-3xl md:text-6xl font-bold md:font-extrabold text-center md:text-left"><span
                    class="text-[#E76E6E]">Kiezen</span> system for <br /> electing the chairman of the student council</h1>
            <p class="mt-5 md:font-medium md:text-xl text-center md:text-left">Mari bersama sama menyukseskan pemilihan ketua
                osis dengan Kiezen <br /> Memilih dengan hati nurani karena pilihanmu menggambarkan dirimu</p>
            <button
                class="px-10 py-2 block mx-auto md:mx-0 bg-[#E76E6E] rounded-full font-semibold text-[#F8F8F8] mt-5 cursor-pointer">Mulai
                Memilih</button>
        </div>
        <div class="icon">
            <img src="{{ asset('assets/smile-filled.png') }}" class="w-[900px]" alt="icon smile">
        </div>
    </div>
    {{-- card --}}
    <div class="container mx-auto mt-16 h-screen">
        <h1 class="text-3xl font-semibold my-5 md:ml-10 text-[#E76E6E]">Election Results</h1>
        <div class="w-[70%] mx-auto mt-10">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    {{-- api --}}
    <div class="container mx-auto h-screen">
        <h1 class="text-3xl font-semibold my-5 md:ml-10 text-[#E76E6E]">Access election results data with API</h1>
        <div class="w-[50%] mx-auto mt-14">
            <h3 class="text-2xl font-semibold mb-5">Find Election Results</h3>
            <p class="font-medium mb-3">Endpoint</p>
            <div class="p-5 bg-[#E76E6E] rounded-xl font-bold text-[#F8F8F8] text-xl">
                GET : https://api.kiezen.co.id/election-results
            </div>
        </div>
        <div class="w-[50%] mx-auto mt-14">
            <h3 class="text-2xl font-semibold mb-5">Find Election Result by Candidate</h3>
            <p class="font-medium mb-3">Endpoint</p>
            <div class="p-5 bg-[#E76E6E] rounded-xl font-bold text-[#F8F8F8] text-xl">
                GET : https://api.kiezen.co.id/election-results/:id
            </div>
        </div>
    </div>
    {{-- script chart --}}
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
                    backgroundColor: '#E76E6E',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
