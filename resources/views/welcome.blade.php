@extends('layout.master')

@section('wrapper')

<div class="mx-auto bg-img-dust">
    <div class="container">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="flex">
            <div class="py-24 md:py-32 px-6 mx-auto flex flex-wrap items-center">

                <!--Left Col-->
                <div class="flex flex-col w-full lg:w-1/2 justify-center lg:items-start overflow-y-hidden pb-8">
                    <div class="mx-auto">

                        <h1 class="my-4 text-3xl text-3xl md:text-5xl text-indigo-700 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Aplicații utile</h1>
                    </div>
                    <div class="mx-auto">

                        <p class="leading-normal text-base text-gray-700 md:text-2xl mb-8 text-center md:text-left">Împreună facem lucrurile mai simple.</p>
                    </div>


                    <div class="flex mx-auto">
                        <a href="{{ route('register') }}" class="border-2 bg-orange-400 border-orange-500  px-8 py-4 rounded-full text-indigo-700 font-bold text-2xl outline-none hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg">Merită să încerci...</a>
                    </div>

                </div>

                <!--Right Col-->
                <div class="w-full lg:w-1/2 py-6 overflow-y-hidden">
                    <img class="mx-auto lg:mr-0 slide-in-bottom w-full" src="./assets/svg/devices.svg">
                </div>



            </div>
        </div>
    </div>
</div class="bg-img-dust">
@endsection