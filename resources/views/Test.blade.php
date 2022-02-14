@extends ('layout')

@section('title', 'Test')

@section('content')
    <div class="p-6">
                <div class="mt-12 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">

                        <div id="app">
                            <example-component></example-component>
                        </div>
                                <form class="form bg-white p-12 border-1" method="POST" action="{{ route('home.test')}}">
                                    @csrf
                                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                    
                                        <p>{{ $randomloop }} iterations for Random Table :</p>
                                        
                                        @for ($i = 0;$i < $randomloop; $i++)
                                        {{-- Just to see the iterations in the loop --}}
                                        {{ $i + 1 }}.)
                                        {{ $random = Str::random($randomloop); }}
                                        <br>
                                        @endfor
                                        <p>{{ $random }} is the last one</p>
                                        
                                        <hr style="background-color:black;width:100%;height:1px;border-top:1px solid black;">
                                        
                                        <p>{{ $breakdownloop }} iterations for Breakdown Table :</p>
            
                                        @for ($i = 0;$i < $breakdownloop; $i++)
                                        {{-- Just to see the iterations in the loop --}}
                                        {{ $i + 1 }}.)
                                        {{ $breakdown = Str::random('5'); }}
                                        <br>
                                        @endfor
                                        
                                        <p>{{ $breakdown }} is the last one</p>
                                        
                                        <div id="app">
                                            <test-frontend-input></test-frontend-input>
                                        </div>

                                    </form>
                                </div>
            </div>
@endsection