<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
      <h1> Add your Offer ! </h1>
            </div>
        <form method="POST" action =" {{route('offers.store')}} ">

           @csrf  <!--<input name="_token" value="{{csrf_token()}}">-->
         <div>
                <label  >offer name </label>
                <input type="text"   name ='name' >
                @error('name')
                    <small class="front-text text-danger"> {{$message}} </samll>
                @enderror
                
         </div>
            <div>
                <label   >offerprice</label>
                <input type="text" name='price'>
                @error('price')
                    <small class="front-text text-danger"> {{$message}} </samll>
                @enderror
            </div>
            <div>
                <label  >offer photo</label>
                <input type="text" name='photo'>
                @error('photo')
                    <small class="front-text text-danger"> {{$message}} </samll>
                @enderror
            </div>
            
            <button type="submit"  >Submit</button>
        </form>
            
        </div>
    </body>
</html>
