<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .player{
                position: absolute;
                width: 69px;
                height: 93px;
                background: transparent;
                border: 0;
            }
            #player-1 {
                left: 452px;
                top: 82px;
            }
            #player-2 {
                left: 305px;
                top: 185px;
            }
            #player-3 {
                left: 405px;
                top: 205px;
            }
            #player-4 {
                left: 496px;
                top: 205px;
            }
            #player-5 {
                left: 596px;
                top: 184px;
            }
            #player-6 {
                left: 340px;
                top: 314px;
            }
            #player-7 {
                left: 451px;
                top: 344px;
            }
            #player-8 {
                left: 561px;
                top: 314px;
            }
            #player-9 {
                left: 359px;
                top: 462px;
            }
            #player-10 {
                left: 449px;
                top: 492px;
            }
            #player-11 {
                left: 543px;
                top: 462px;
            }
            #player-12 {
                left: 312px;
                top: 634px;
            }
            #player-13 {
                left: 404px;
                top: 634px;
            }
            #player-14 {
                left: 495px;
                top: 634px;
            }
            #player-15 {
                left: 587px;
                top: 634px;
            }
        </style>
    </head>
    <body>
       <div class="container justify-content-center">
        <h1 class="mb-5 text-center mt-2">Laravel Test</h1>
        <h3>{{$team->name}} Team</h3>
        <div style="width:970px;height:728px;position:relative">
            <img style="width:970px;height:728px;" src="{{URL::asset('/playground.png')}}" alt="profile Pic" height="200" width="200">
        
            <!-- Button trigger modal -->
            <button type="button" id="player-1" class="player" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-2" class="player" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-3" class="player" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-4" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-5" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-6" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-7" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-8" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-9" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-10" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-11" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-12" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-13" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-14" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <button type="button" id="player-15" class="player" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Player Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{!! url($team->id . '/players') !!}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="input-group mb-3">
                <input name="player_number" type="hidden" id="player-number" class="form-control">
                <input name="player_number" type="text" id="player-number" class="form-control" disabled>
            </div>
            <div class="input-group mb-3">
                <input name="player_position" type="hidden" id="player-position" class="form-control" >
                <input name="player_position" type="text" id="player-position" class="form-control" disabled>
            </div>
            <div class="input-group mb-3">
                <input name="player_name" type="text" class="form-control" placeholder="Enter player name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

       </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<script>
    const myModal = document.getElementById('exampleModalCenter')
    $(document).on("click", "#player-1", function () {
        $("#exampleModalCenter #player-number").val('1');
        $("#exampleModalCenter #player-position").val('Goalkeeper');
    });
    $(document).on("click", "#player-2", function () {
        $("#exampleModalCenter #player-number").val('2');
        $("#exampleModalCenter #player-position").val('Right Back');
    });
    $(document).on("click", "#player-3", function () {
        $("#exampleModalCenter #player-number").val('4');
        $("#exampleModalCenter #player-position").val('Center Back');
    });
    $(document).on("click", "#player-4", function () {
        $("#exampleModalCenter #player-number").val('5');
        $("#exampleModalCenter #player-position").val('Center Back');
    });
    $(document).on("click", "#player-5", function () {
        $("#exampleModalCenter #player-number").val('5');
        $("#exampleModalCenter #player-position").val('Left Back');
    });
    $(document).on("click", "#player-6", function () {
        $("#exampleModalCenter #player-number").val('6');
        $("#exampleModalCenter #player-position").val('Right MF');
    });
    $(document).on("click", "#player-7", function () {
        $("#exampleModalCenter #player-number").val('7');
        $("#exampleModalCenter #player-position").val('Center MF');
    });
    $(document).on("click", "#player-8", function () {
        $("#exampleModalCenter #player-number").val('8');
        $("#exampleModalCenter #player-position").val('Left MF');
    });
    $(document).on("click", "#player-9", function () {
        $("#exampleModalCenter #player-number").val('10');
        $("#exampleModalCenter #player-position").val('Wing');
    });
    $(document).on("click", "#player-10", function () {
        $("#exampleModalCenter #player-number").val('9');
        $("#exampleModalCenter #player-position").val('Center Forward');
    });
    $(document).on("click", "#player-11", function () {
        $("#exampleModalCenter #player-number").val('11');
        $("#exampleModalCenter #player-position").val('Wing');
    });
    $(document).on("click", "#player-12", function () {
        $("#exampleModalCenter #player-number").val('12');
        $("#exampleModalCenter #player-position").val('Substitute 1');
    });
    $(document).on("click", "#player-13", function () {
        $("#exampleModalCenter #player-number").val('13');
        $("#exampleModalCenter #player-position").val('Substitute 2');
    });
    $(document).on("click", "#player-14", function () {
        $("#exampleModalCenter #player-number").val('14');
        $("#exampleModalCenter #player-position").val('Substitute 3');
    });
    $(document).on("click", "#player-15", function () {
        $("#exampleModalCenter #player-number").val('15');
        $("#exampleModalCenter #player-position").val('Substitute 4');
    });
</script>
</body>
</html>
