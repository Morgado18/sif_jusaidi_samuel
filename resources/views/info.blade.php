@extends('templates.main')

@section('title', 'Informações - Site em Desenvolvimento')

@section('header')
    @section('name', 'Visitante')
@endsection
@section('content')
<div class="development-container">
    <div class="text-center">
        <h1>Site em Desenvolvimento</h1>
        <p>Estamos trabalhando para melhorar a sua experiência.</p>
        <div class="clock-animation">
            <div class="clock-piece hour-hand"></div>
            <div class="clock-piece minute-hand"></div>
            <div class="clock-piece second-hand"></div>
            <div class="clock-piece clock-center"></div>
        </div>
    </div>
</div><style>
    .development-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        background-color: #f4f4f4;
        text-align: center;
    }

    .clock-animation {
        display: inline-block;
        position: relative;
        width: 150px;
        height: 150px;
        margin-top: 20px;
    }

    .clock-piece {
        position: absolute;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #444;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .hour-hand {
        top: 40px;
        left: 70px;
        width: 40px;
        height: 4px;
        background-color: #444;
        transform-origin: 0 50%;
        transform: rotate(-60deg);
        animation: hourAnimation 2s linear infinite;
    }

    .minute-hand {
        top: 30px;
        left: 70px;
        width: 60px;
        height: 3px;
        background-color: #444;
        transform-origin: 0 50%;
        transform: rotate(120deg);
        animation: minuteAnimation 2s linear infinite;
    }

    .second-hand {
        top: 50px;
        left: 70px;
        width: 70px;
        height: 2px;
        background-color: #444;
        transform-origin: 0 50%;
        transform: rotate(90deg);
        animation: secondAnimation 2s linear infinite;
    }

    .clock-center {
        top: 60px;
        left: 65px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #444;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    @keyframes hourAnimation {
        0% {
            transform: rotate(-60deg);
        }
        100% {
            transform: rotate(300deg);
        }
    }

    @keyframes minuteAnimation {
        0% {
            transform: rotate(120deg);
        }
        100% {
            transform: rotate(480deg);
        }
    }

    @keyframes secondAnimation {
        0% {
            transform: rotate(90deg);
        }
        100% {
            transform: rotate(450deg);
        }
    }
</style>
@endsection

