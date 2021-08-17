@extends('freight _exchange')
@section('content')
<template>

    <div class="relative ml-8 flex-1" >
        {{--            {!! Form::open() !!}--}}
        {{--            {!! Form::lable('name') !!}--}}
        {{--            {!! Form::close() !!}--}}

        <form class="bg-white h-full"  method="post" action={{ route('add_good') }}>
            @csrf
            <div>
                <label for="load_city_name">
                    <input class="bg-white " type="text" name="load_city_name" placeholder="Місто завантаження">
                </label>
            </div>
            <div>
                <label for="unload_city_name">Місто вивантаження</label>
                <input class="bg-white " type="text" name="unload_city_name" placeholder="Місто вивантаження">
            </div>
            <div>
                <label for="weight">Масса вантажу</label>
                <input class="bg-white " type="text" name="weight" placeholder="Масса вантажу">
            </div>
            <div>
                <label for="weight">Назва вантажу</label>
                <input class="bg-white " type="text" name="good" placeholder="Назва вантажу">
            </div>
            <div>
                <label for="date">Дата завантаження</label>
                <input class="bg-white " type="text" name="date" placeholder="Дата завантаження">
            </div>

            <button class="bg-white" type="submit">Додати вантаж</button>
        </form>
    </div>
</template>


   <script>
export default {
    name:'add-form',
    components:{

    }
}
   </script>
@stop
