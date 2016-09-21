@extends('layout')

@section('content')

    {!! $hero ?? null !!}

    {!! $carousel ?? null !!}

    {!! $featured_products ?? null !!}

    <div class="subscribe">
        <div class="container">
            <div class="subscribe1">
                <h4>the latest from swim wear</h4>
            </div>
            <div class="subscribe2">
                <form>
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="submit" value="JOIN">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection