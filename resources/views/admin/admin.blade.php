@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">Laponov</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <router-link :to="{name: 'createCompany'}" class="p-2 text-dark">Главная</router-link>
                    <router-link :to="{name: 'createCompany'}" class="p-2 text-dark">Работы</router-link>
                    <router-link :to="{name: 'createCompany'}" class="p-2 text-dark">Выставки</router-link>
                    <router-link :to="{name: 'createCompany'}" class="p-2 text-dark">Инфо</router-link>
                </nav>
            </div>
            <router-view name="mainScreen"></router-view>
            <router-view></router-view>
        </div>
    </div>
@endsection