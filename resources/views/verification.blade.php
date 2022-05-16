<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="w-100 h-screen bg-gray-100 flex justify-center items-center">

        <div class="w-[450px] h-[550px] bg-white shadow-lg flex flex-col justify-center items-center">
            <h1 class="text-3xl font-bold">Alliance</h1>

            <h2 class="m-5 text-center">Thank you {{$user->first_name}} for choosing Alliance .your account is been verified.</h2>

            <form action="{{ route('verifyMyAccount') }}" method="POST">
                @csrf <!-- {{ csrf_field() }} -->
                <button type="submit">
                    <input name="id" type="hidden" value="{{$id}}">
                    <input name="type" type="hidden" value="{{$type}}">
                    <a class="bg-orange-500 p-3 mt-2 rounded-lg text-white">Verify My
                        Account</a>
                </button>
            </form>

        </div>
    </div>

    </div>


</body>

</html>
