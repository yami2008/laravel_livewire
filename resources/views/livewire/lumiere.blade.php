<div class="container" xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="row align-items-center justify-content-center" style="height: 100vh;">

        <div class="col-4 text-center">

            <h1 class="display-3" style="margin-bottom: 5%;">Light</h1>

            <div style="margin-bottom: 4%;">
                <span class="display-6"><i style="color: orange;" class="fas fa-sun"></i></span>&nbsp;<span class="display-6">{{$luminance}}%</span>
            </div>

            <div class="progress" style="width: 75%; margin: 5% auto; height: 25px;">
                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="{{$luminance}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$luminance}}%;"></div>
            </div>

            <div>
                <button wire:click="toZero" class="btn btn-danger">Off</button>
                <button wire:click="decrement" class="btn btn-secondary">-</button>
                <button wire:click="increment" class="btn btn-secondary">+</button>
                <button wire:click="toMax" class="btn btn-success">On</button>
            </div>
        </div>
    </div>
</div>
