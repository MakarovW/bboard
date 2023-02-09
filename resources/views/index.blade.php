@extends('layouts.base')
@section('title', 'Главная')
@section('main')
@if (count($bbs) > 0)
<table class="table table-striped">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Цена, руб.</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                @foreach ($bbs as $bb)
                <tr>
                    <td><h3>{{ $bb->title }}</h3></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее...</a>
                    </td>
                </tr>
                @endforeach

            </table>
@endif
@endsection('main')
